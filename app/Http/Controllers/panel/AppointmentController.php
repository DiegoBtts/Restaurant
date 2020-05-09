<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\models\TestTypeModel;
use App\models\SamplesTypeModel;
use App\models\AppointmentModel;
use App\models\ClientModel;
use App\Http\Controllers\Controller;

class AppointmentController extends Controller
{
    public function index()
	{
        return view('panel.appointment.index', ['items' => AppointmentModel::all(),'clients' => ClientModel::all(),
        'testtypes' => TestTypeModel::all(),'samplestypes' => SamplesTypeModel::all()
        
		]);
	}

	public function add() 
	{
        $action ="Agregar";
        $samplestypes = SamplesTypeModel::all();
        $testtypes = TestTypeModel::all();
        $clients = ClientModel::all();
        return view('panel.appointment.form', compact('samplestypes','clients','testtypes','action'),[
            'appointment' => new AppointmentModel() 
        ]);
    }

    public function edit($id)
    {
        $action ="Editar";
        $appointment =AppointmentModel::find($id);
        $client = ClientModel::all();
        $testtype = TestTypeModel::all();
        $samplestype = SamplesTypeModel::all();
        return view('panel.appointment.form')->with(['appointment' => $appointment,'clients' => $client,'testtypes' => $testtype,'samplestypes' => $samplestype,'action' => $action]);
    }

    public function delete($id)
    {
        AppointmentModel::destroy($id);
        session()->flash('messages', 'success|La cita se cancelo satisfactoriamente.' );
        return redirect()->route('appointment');
    }

    public function save(Request $request, AppointmentModel $appointment) 
    {
    	$validatedData = $request->validate([
            'appointmentdate' => 'required',
        ]);
        $appointment->appointmentdate = $request->input('appointmentdate');
        $appointment->hour = $request->input('hour');
        $appointment->clientid = $request->input('client');
        $appointment->samplestypeid = $request->input('samplestype');
        $appointment->testtypeid = $request->input('testtype');
        $appointment->save();
        session()->flash('messages', 'success|Cita agendada correctamente.' );
        return redirect()->route('appointment');
    }
}
