<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<table border 1px black>
  <tr>
    <th>Nome</th>
    <th>Descrição</th>
    <th>Preço</th>
    <th>Ações</th>
  </tr>
  @foreach ($produtos as $produto)
  <tr>
    <td>{{$produto->nome}}</td>
    <td>{{$produto->descricao}} </td>
    <td>{{$produto->preco}}</td>
    <td>

    <form method="post"  action="/deletar_produto/{{$produto->id}}">
      @csrf 
      {{  method_field ("DELETE")  }}
      <input type="submit" value ="delete produto">
      </form>
      <a href="/editar_produto/{{$produto->id}}">editar</a>
    </td>
   </tr>
@endforeach
</table>

</body>
</html>