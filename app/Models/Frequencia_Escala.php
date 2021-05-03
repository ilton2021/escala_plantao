<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frequencia_Escala extends Model
{
    protected $table = 'frequencia_escala';
	
	protected $fillable = [
		'escala_id',
		'funcionario_id',
		'centro_custo_id',
		'centro_custo',
		'dia1',
		'dia2',
		'dia3',
		'dia4',
		'dia5',
		'dia6',
		'dia7',
		'dia8',
		'dia9',
		'dia10',
		'dia11',
		'dia12',
		'dia13',
		'dia14',
		'dia15',
		'dia16',
		'dia17',
		'dia18',
		'dia19',
		'dia20',
		'dia21',
		'dia22',
		'dia23',
		'dia24',
		'dia25',
		'dia26',
		'dia27',
		'dia28',
		'dia29',
		'dia30',
		'dia31'
	];
}