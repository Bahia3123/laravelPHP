<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar vendedor</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class Conteiner>
    <form action="/criar_vendedor" method="post" class div1>
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome">

        <label for="matricula">Matricula</label>
        <input type="text" name="matricula">

        <label for="comissao">Comissão</label>
        <input type="text" name="comissao">

        <input type="submit" value="Salvar">
    </form>
    </div>
</body>
</html>