<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Reserva;
use App\Models\User;
use App\Models\ReservaXLibro;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;


class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('reservas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $libros = Libro::all();
        return view('reservas.create', compact('libros'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reserva = Reserva::create([
			'id_users' => Auth::user()->id,
			'fecha_reserva' => Carbon::now(),
			'created_at' => Carbon::now()
		]);
		
		foreach ($request->get('libros') as $id) {
    		ReservaXLibro::create([
			'id_libro' => $id,
			'id_reserva' => $reserva->id_reserva
			]);
			
			
		}
		
		$details = [
			'title'=> 'Nueva Reserva',
			'body'=> 'Han realizado una nueva reserva'	
		];
		
		$confirmacion = [
			'title'=> 'Reserva Confirmada',
			'body'=> 'La reserva se ha efectuado correctamente'
			
		];
		
		$user = Auth::user()->email;
		
		//Mail::to('raycomartin00@gmail.com')->send(new \App\Mail\TestMail($details));
		//Mail::to($user)->send(new \App\Mail\TestMail($confirmacion));
		
		$libros = ReservaXLibro::where('id_reserva', $reserva->id_reserva)->get();
      
		
		
		return view('reservas.confirmacion', compact("libros"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=User::find($id);
		return view('users.index', compact("user"));
		
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reserva = Reserva::findOrFail($id);
        return view('editar.reserva', compact('reserva'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reserva = $request->except(['_token', '_method']);
		Reserva::whereid_reserva($id)->update($reserva);
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $reserva = Reserva::findOrFail($id);
          $reserva->delete();
          return redirect('/home');
    }
}
