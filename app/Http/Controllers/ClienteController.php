<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    public function criar(Request $request) {
        $cliente = new Cliente;
        $cliente->name = $request->name;
        $cliente->cpf = $request->cpf;
        $cliente->email = $request->email;
       

        $cliente->save();
        return redirect('/listar_clientes');
    }

    public function formCriarCliente() {
        return view("cadastro_cliente");
    }

    public function listar() {
        $clientes = Cliente::all();

        return view("clientes", ["clientes"=>$clientes]);
    }
}
