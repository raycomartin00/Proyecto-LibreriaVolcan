<?php

use Illuminate\Support\Facades\Route;
use Dompdf\Dompdf;
use App\Models\Libro;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

URL::forceScheme('https');

Route::get('/offline', function(){
	return view('modules/laravelpwa/offline');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/confirmacion', function () {
    return view('reservas.confirmacion');
});

Route::get('/user', [App\Http\Controllers\HomeController::class, 'getUser']);

Route::get('qrcode', function () {
    return view('qrcode');
});

Route::get('/insertar', function () {
    return view('insertar.index');
});

Route::get('/pdf', function () {
	
  $libros = Libro::all();
  $pdf = PDF::loadView('libros/pdf', compact('libros'));
  return $pdf->download('pruebapdf.pdf');
});

Route::get('/chart', [App\Http\Controllers\HighchartController::class, 'handleChart']);

Route::resource('/libros', App\Http\Controllers\LibroController::class);
Route::resource('/ReservasUsuario', App\Http\Controllers\ListaReservasUserController::class);
Route::resource('/usuarios', App\Http\Controllers\UserController::class);
Route::resource('/editoriales', App\Http\Controllers\EditorialController::class);
Route::resource('/reservas', App\Http\Controllers\ReservaController::class);
Route::resource('/insertarLibro', App\Http\Controllers\insertarLibroController::class);
Route::resource('/insertarEditorial', App\Http\Controllers\insertarEditorialController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/libro-usuario/{id}', [App\Http\Controllers\LibroUsuarioController::class, 'index'])->name('LibroUsuario');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


