<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar cliente</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body><div class Conteiner>
    <form action="/criar_cliente" method="post" class div1>
        @csrf
        <label for="name">Nome</label>
        <input type="text" name="name">

        <label for="cpf">CPF</label>
        <input type="text" name="cpf">

        <label for="email">Email</label>
        <input type="text" name="email">

        <input type="submit" value="Salvar">
    </form>
    </div>
</body>
</html>