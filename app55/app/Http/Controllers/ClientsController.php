<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function cadastrar(){
        $nome = 'Nicolas';
        $idade = 20;
        return view('admin.cliente.cadastrar', compact('nome', 'idade'));
    }
    public function excluir(){

    }
    public function editar(){

    }
}
