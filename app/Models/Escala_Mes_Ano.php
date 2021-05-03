<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escala_Mes_Ano extends Model
{
    protected $table = 'escala_mes_ano';
	
	protected $fillable = [
		'mes',
		'ano',
		'centro_custo',
		'created_at',
		'updated_at'
	];
}
