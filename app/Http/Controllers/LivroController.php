<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Livro;
use GuzzleHttp\Client;

class LivroController extends Controller {
    //

    public function listarTodos() {
    	$livros = Livro::orderBy('titulo')->get();
    	return response()->json($livros, 200);
    }

    public function criar(Request $req){
    	
    	$dados_livro = $req->json()->all();
    	$livro = new Livro($dados_livro);
    	$livro->save();

    	return response()->json([
    		'message' => "Livro criado com sucesso !"
    	], 200);
    }

    public function salvar(Request $rq) {
    	$client = new Client([
    		'base_uri' => 'http://localhost/api/',
    		'timeout' => 3
    	]);

    	$res = $client->post('livros/criar', [
    		'json' => $rq->livros
    	]);

    	// Se status for 200 que dizer que requisição funcionou.
    	if ($res->getStatusCode() == 200) 
    		return redirect('/');
    	// Se não volta para o formulário.
    	return redirect('/novo'); 
    }
}
