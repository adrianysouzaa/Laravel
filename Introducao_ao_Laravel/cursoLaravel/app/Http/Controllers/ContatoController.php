<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Contato;

class ContatoController extends Controller
{
    public function index()
    {
    	$contatos = [
    		(object)["nome"=>"Maria", "tel"=>"65346656"],
    		(object)["nome"=>"Pedro", "tel"=>"84784578"]

    	];

        $contato = new Contato();
        $con = $contato->lista();
        dd($con->nome);

    	return view('contato.index', compact('contatos'));
    }

     public function criar(Request $req)
    {
    	dd($req->all());
    	return "Esse é o criar do contato ContatoController";
    }

     public function editar()
    {
    	return "Esse é o editar do contato ContatoController";
    }
}
