<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use Illuminate\Support\Facades\Auth;

class ListaReservasUserController extends Controller
{
     public function index()
    {
        $reservas = Reserva::where('id_users', Auth::user()->id)->get();

		return view('reservas.user', compact("reservas"));
    }
}
