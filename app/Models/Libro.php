<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Editorial;

class Libro extends Model
{
    use HasFactory;
	
	protected $primaryKey = 'id_libro';
	public $timestamps = false;
	protected $table = 'Libros';
	protected $fillable = ['nombre', 'observaciones', 'id_editorial', 'imagen'];
	
	
	 public function Editorial()
    {
        return $this->belongsTo('App\Models\Editorial', 'id_editorial');
    }
	
	public function ReservaXLibro()
    {
        return $this->hasMany('App\Models\ReservaXLibro', 'id_libro');
    }
}

