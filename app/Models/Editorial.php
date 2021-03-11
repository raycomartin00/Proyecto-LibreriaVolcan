<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Libro;

class Editorial extends Model
{
    use HasFactory;
	
	protected $primaryKey = 'id_editorial';
	public $timestamps = false;
	protected $table = 'Editoriales';
	protected $fillable = ['nombre', 'direccion', 'cod_postal', 'telefono', 'persona_encargada', 'observaciones'];
	
	public function Libros()
    {
        return $this->hasMany('App\Models\Libro', 'id_libro');
    }
}
