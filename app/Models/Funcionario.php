<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $table = 'funcionario';
	
	protected $fillable = [
		'nome',
		'cargo',
		'coren',
		'matricula',
		'centro_custo_id',
		'centro_custo',
		'tipo_plantao',
		'escala',
		'observacao',
		'created_at',
		'updated_at'
	];
}
