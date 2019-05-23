<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Livro;

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
}
