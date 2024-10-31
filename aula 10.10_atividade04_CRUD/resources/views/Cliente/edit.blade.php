<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{url('editarCliente/' .$cliente->id)}}" method="post">
        @csrf
        @method('PUT')
        Nome: <input type="text" name="nome" value="{{$cliente->nome }}">
        Cpf: <input type="text" name="cpf" value="{{$cliente->cpf }}">
        Telefone: <input type="text" name="telefone" value="{{$cliente->telefone }}">
        E-mail: <input type="text" name="email" value="{{$cliente->email }}">
        <input type="submit" value="Atualizar">
    </form>
</body>
</html>