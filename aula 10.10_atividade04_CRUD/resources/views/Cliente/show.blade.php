<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Cliente</title>
</head>
<body>
    <h1>Detalhes do Cliente</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if ($cliente)
        <p><strong>ID:</strong> {{ $cliente->id }}</p>
        <p><strong>Nome:</strong> {{ $cliente->nome }}</p>
        <p><strong>CPF:</strong> {{ $cliente->cpf }}</p>
        <p><strong>Telefone:</strong> {{ $cliente->telefone }}</p>
        <p><strong>Email:</strong> {{ $cliente->email }}</p>
        <br>
        <a href="{{ url('editarCliente/' . $cliente->id) }}">Editar</a>
        <form action="{{ url('deletarCliente/' . $cliente->id) }}" method="post" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Deletar</button>
        </form>
        <br><br>
        <a href="{{ url('listarCliente') }}">Voltar</a>
    @else
        <p>Cliente não encontrado.</p>
        <a href="{{ url('listarCliente') }}">Voltar</a>
    @endif
</body>
</html>
