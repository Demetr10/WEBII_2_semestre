<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <!-- Formulário de Cadastrar Cliente -->
    <h1>Cadastrar Cliente</h1>
    <form action="/cadastrarCliente" method="post">
        @csrf
        <p>{{ session('mensagem') }}</p>
        Nome: <input type="text" name="nome" required>
        Cpf: <input type="text" name="cpf" required>
        Telefone: <input type="text" name="telefone" required>
        E-mail: <input type="email" name="email" required>
        <input type="submit" value="CADASTRAR">
    </form>
    <a href="listarCliente">Listar</a>
</body>
</html>
