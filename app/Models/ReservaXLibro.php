<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservaXLibro extends Model
{
    use HasFactory;
	
	public $timestamps = false;
	protected $table = 'ReservasXLibros';
	protected $fillable = ['id_libro', 'id_reserva'];
	
	
	 public function Libro()
    {
        return $this->belongsTo('App\Models\Libro', 'id_libro');
    }
	
	 public function Reserva()
    {
        return $this->belongsTo('App\Models\Reserva', 'id_reserva');
    }
}
