<?php 

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
	public function index()
    {
    	return view('panel.inicio.index');
    }
}

?>