<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use GuzzleHttp\Client;

Route::get('/', function () {
	$cliente = new Client([
		'base_uri' => 'http://localhost/api/',
		'timeout' => 2.0
	]);
	$res =  $cliente->get('livros/all');
    return view('livro.listar', [
    	'livros' => json_decode($res->getBody())
    ]);
});

Route::get('/novo', function() {
    return view('livro.novo');
});

Route::post('/livro/salvar', 'LivroController@salvar');