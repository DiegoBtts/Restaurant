<?php
namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\models\GroupsModel;
use App\Http\Controllers\Controller;

class GroupsController extends Controller
{
    public function index()
	{
		return view('panel.groups.index')->with(['items' => GroupsModel::all()]);
	}

	public function add() 
	{
        return view('panel.groups.form')->with(['group' => new GroupsModel()]);
    }

    public function edit($id)
    {
        return view('panel.groups.form')->with(['group' => GroupsModel::find($id)]);;
    }

    public function delete($id)
    {
        return redirect()->route('groups');
    }

    public function save(Request $request, GroupsModel $group) 
    {
        $table_name = strtolower(str_replace(" ","_",$request->input('group_name')));
        $group->table_name = $table_name;
        $group->user_id = $request->input('user_id');
        $group->count_field = $request->input('count_field');
        $group->typeTest_id = $request->input('typeTest_id');
        $group->save();
        session()->flash('messages', 'success|Cambios guardados correctamente.' );
        return redirect()->route('groups');
    }
}
