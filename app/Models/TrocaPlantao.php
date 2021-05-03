<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrocaPlantao extends Model
{
    protected $table = 'permuta';
	
	protected $fillable = [
		'colaborador',
		'substituto',
		'gestor',
		'escala_id',
		'dia',
		'mes_ano',
		'created_at',
		'updated_at'
	];
}
