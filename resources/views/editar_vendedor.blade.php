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
    <form action="/editar_vendedor/{{$vendedor->id}}" method="post" class div1>
        @csrf
        {{ method_field("PUT")}}
        <label for="name">Nome</label>
        <input type="text" name="nome" value="{{$vendedor->nome}}">
        
        <label for="nome">Nome</label>
        <input type="text" name="matricula" value="{{$vendedor->matricula}}">
        
        <label for="email">Email</label>
        <input type="text" name="comissao" value="{{$vendedor->comissao}}">

        <input type="submit" value="Salvar">
    </form>
    </div>
</body>
</html>