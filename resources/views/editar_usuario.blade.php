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
    <form action="/editar_usuario/{{$user->id}}" method="post" class div1>
        @csrf
        {{ method_field("PUT")}}
        <label for="name">Nome</label>
        <input type="text" name="name" value="{{$user->name}}">

        <label for="cpf">CPF</label>
        <input type="text" name="cpf" value="{{$user->cpf}}">
        
        <label for="email">Email</label>
        <input type="text" name="email" value="{{$user->email}}">

        <input type="submit" value="Salvar">
    </form>
    </div>
</body>
</html>