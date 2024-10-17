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
  @foreach ($vendedores as $vendedor)
  <tr>
    <td>{{$vendedor->nome}}</td>
    <td>{{$vendedor->matricula}} </td>
    <td>{{$vendedor->comissao}}</td>
    <td>

    <form method="post"  action="/deletar_vendedor/{{$vendedor->id}}">
      @csrf 
      {{  method_field ("DELETE")  }}
      <input type="submit" value ="Matar Vendedor">
      </form>
      <a href="/editar_vendedor/{{$vendedor->id}}">editar</a>
    </td>
   </tr>
@endforeach
</table>

</body>
</html>