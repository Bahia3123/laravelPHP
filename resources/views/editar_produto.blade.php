<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
</head>
<body>
<div class Conteiner>
    <form action="/editar_produto/{{$produto->id}}" method="post" class div1>
        @csrf
        {{ method_field("PUT")}}
        <label for="name">Nome</label>
        <input type="text" name="nome" value="{{$produto->nome}}">

        <label for="descricao">Descrição</label>
        <input type="text" name="descricao" value="{{$produto->descricao}}">
        
        <label for="preco">Preço</label>
        <input type="text" name="preco" value="{{$produto->preco}}">
        
        <input type="submit" value="Salvar">
    </form>
    </div>
</body>
</html>