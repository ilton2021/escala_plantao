<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CentroCusto extends Model
{
    protected $table = 'centro_custo';
	
	protected $fillable = [
		'descricao',
		'created_at',
		'updated_at'
	];
}
