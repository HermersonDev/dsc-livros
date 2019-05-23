<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
	protected $fillable = [
		'nome',
		'login',
		'senha',
		'email'
	];   
}
