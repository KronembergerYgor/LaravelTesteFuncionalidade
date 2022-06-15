<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contato;

class ContatoController extends Controller
{
    public function index()
    {

        $contatos = [
            (object)["nome"=>"Ygor","tel"=>"6564773"],
            (object)["nome"=>"Jade","tel"=>"6444444"],
            (object)["nome"=>"Yuri","tel"=>"6444564"]
        ];

        $contato = new Contato();
        $con = $contato->lista();

        return view('contato.index',compact('contatos'));
    }
    public function criar(Request $req)
    {
        dd($req->all());
        return "Esse é o Criar do ContatoController";
    }
    public function editar()
    {
        return "Esse é o Editar do ContatoController";
    }
}
