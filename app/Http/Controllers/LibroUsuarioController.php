<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReservaXLibro;

class LibroUsuarioController extends Controller
{
     public function index($id)
    {
		
		$libros = ReservaXLibro::where('id_reserva', $id)->get();
        return view('libros.user', compact('libros'));
    }
}
