<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Model\Usuario;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function criar(Request $rq){

    	// Valida os dados
    	$validar = $rq->validate([
    		'usuarios.nome' => 'required|max:80',
    		'usuarios.email' => 'required|email|max:50',
    		'usuarios.login' => 'required|max:10|unique:usuarios,login',
    		'usuarios.senha' => 'required|same:confirmSenha'
    	]);

    	// Inseri os dados e salvar no banco
    	# $novo_usuario = new Usuario()::create($rq->usuarios);
    	$novo_usuario = new Usuario($rq->usuarios);
    	// Transforma a senha em hash
    	$novo_usuario->senha = Hash::make($novo_usuario->senha);
    	$novo_usuario->save();
    	
    	$rq->session()->flash('message-type', 'alert-success');
    	$rq->session()->flash('message', 'Usuário criado com sucesso !');

    	return redirect('/');
    }

    public function entrar(Request $rq){

 		$usuario = Usuario::where('login', $rq->login)->first();

 		// Verifica se o usuário existe e compara a senha passada com a que está armazenada.
 		if ($usuario != null && Hash::check($rq->senha, $usuario->senha)) {

 			$rq->session()->put('usuario', $usuario);

 			return redirect()->action('ItemController@listar');
 		
 		} else {
 			
 			$rq->session()->flash('message-type', 'alert-danger');
 			$rq->session()->flash('message', 'Usuário ou senha inválidos!');

 			return redirect('/');
 		}	
    }

}
