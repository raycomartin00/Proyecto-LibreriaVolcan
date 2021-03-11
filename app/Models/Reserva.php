<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
	
	protected $primaryKey = 'id_reserva';
	public $timestamps = false;
	protected $table = 'Reservas';
	protected $fillable = ['id_users', 'fecha_reserva', 'fecha_aviso', 'fecha_recoge', 'observaciones'];
	
	public function ReservaXLibro()
    {
        return $this->hasMany('App\Models\ReservaXLibro', 'id_reserva');
    }
	
	
	 public function user()
    {
        return $this->belongsTo(User::class);
    }
}


