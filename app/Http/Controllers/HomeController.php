<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelo;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modelos = Modelo::all();
        return view('welcome',array('modelos'=>$modelos));
    }
}
