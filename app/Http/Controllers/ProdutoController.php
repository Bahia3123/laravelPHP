<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{

    public function criar(Request $request) {
        $produto = new Produto;
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;
       

        $produto->save();
        return redirect('/listar_produtos');
    }

    public function formCriarProduto() {
        return view("cadastro_produto");
    }

    public function listar() {
        $produtos = Produto::all();

        return view("produtos", ["produtos"=>$produtos]);
    }

    public function deletar($id) {
        $produto = new Produto;
        $produto-> find ($id)->delete();
        return redirect('/listar_produtos');

}

public function formEditarProduto($id){
    $produto = produto::find($id);
    return view ('editar_produto', ["produto"=> $produto]);
}

public function editar(Request $request){

    produto::where('id', $request->id)-> update([
        'nome'=>$request->nome,
        'descricao'=>$request->descricao,
        'preco'=>$request->preco,
    
    ]);
    return redirect('/listar_produtos');

}

}