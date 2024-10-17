<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar produto</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body><div class Conteiner>
    <form action="/criar_produto" method="post" class div1>
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome">

        <label for="descricao">Descrição</label>
        <input type="text" name="descricao">

        <label for="preco">Preço</label>
        <input type="text" name="preco">

        <input type="submit" value="Salvar">
    </form>
    </div>
</body>
</html>

