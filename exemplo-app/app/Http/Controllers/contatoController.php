<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class contatoController extends Controller
{
    public function index()
    {
        $contatos = [
            (object)["nome"=>"Maria","tel"=>"123456789"],
            (object)["nome"=>"Pedro","tel"=>"987654321"]
        ];
        $contato = new Contato();
        $con = $contato->lista(); 
        dd($con->nome);

        return view('contato.index',compact('contatos'));
    }

    public function criar(Request $req)
    {
    dd($req['name']);
    return "Criar do Contato Controller.";
    }

    public function editar()
    {
    return "Editar do Contato Controller.";
    }
}
