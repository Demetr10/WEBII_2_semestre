<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Cleinte</title>
</head>
<body>
    <form action="/cadastrarCliente" method="post">
        @csrf
            <P>{{session('mensagem')}} </P>
                Nome: <input type="text" name="nome">
                Cpf: <input type="text" name="cpf">
                Telefone: <input type="text" telefone="telefone">
                E-mail: <input type="text" name="ce-mail">
                <input type="button " value="CADASTRAR">
    </form>
        <a href="read"> Listar</a>
</body>
</html>