<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\models\ClinicalExamModel;
use App\Http\Controllers\Controller;

class ClinicalExamController extends Controller
{
    public function index()
	{
		return view('panel.clinicalExam.index');
	}

	public function add() 
	{
        return view('panel.clinicalExam.form');
    }

    public function edit($id)
    {
        return view('panel.clinicalExam.form');
    }

    public function delete($id)
    {
        return redirect()->route('clinicalexam');
    }

    public function save(Request $request, CategoryModel $category) 
    {
        return redirect()->route('clinicalexam');
    }
}
