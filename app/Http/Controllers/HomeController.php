<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
		 $this->middleware('soloAdmin', ['only' => 'index']);
		
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		$reservas = Reserva::all();
        return view('home', compact('reservas'));
    }
	
	public function getUser()
	{
		
		return view('reservas.index');
	}
	
}
