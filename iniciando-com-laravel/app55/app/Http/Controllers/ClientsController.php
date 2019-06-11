<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientsController extends Controller
{
    public function listar(){
        $clients = Client::all();
        return view('admin.cliente.list', compact('clients'));
    }

    public function formCadastrar(){
        return view('admin.cliente.create');
    }

    public function cadastrar(Request $request){
        /*
            $nome = 'Nicolas';
            $idade = 20;
            return view('admin.cliente.cadastrar', compact('nome', 'idade'));
        */
        $client = new Client();
        $client->name = $request->name;
        $client->email = $request->email;
        $client->save();
        return \redirect()->to('/admin/client');
    }

    public function formEditar($id){
        $client = Client::find($id);
        if (!$client) {
            \abort(404);
        }
        return view('admin.cliente.edit', \compact('client'));
    }

    public function editar(Request $request, $id){
        /*
            $nome = 'Nicolas';
            $idade = 20;
            return view('admin.cliente.cadastrar', compact('nome', 'idade'));
        */
        $client = Client::find($id);
        if (!$client) {
            \abort(404);
        }
        $client->name = $request->name;
        $client->email = $request->email;
        $client->save();
        return \redirect()->to('/admin/client');
    }

    public function excluir(Request $request, $id){
        $client = Client::find($id);
        if (!$client) {
            \abort(404);
        }
        $client->delete();
        return \redirect()->to('/admin/client');
    }
}
