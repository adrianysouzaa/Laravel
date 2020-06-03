<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
    	$contatos = [
    		(object)["nome"=>"Maria", "tel"=>"65346656"],
    		(object)["nome"=>"Pedro", "tel"=>"84784578"]

    	];

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
