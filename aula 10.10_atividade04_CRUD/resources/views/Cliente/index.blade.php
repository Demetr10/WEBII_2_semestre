    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista de Clientes</title>
        <script src="{{ asset('js/filters.js') }}"></script>
    </head>
    <body>
        
    <h1>Lista de Clientes</h1>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
            <tr> 
                <td>{{ $cliente->nome }}</td>
                <td>{{ $cliente->cpf }}</td>
                <td>{{ $cliente->telefone }}</td>
                <td>{{ $cliente->email }}</td>
                <td>
                    <form action="deletarCliente/{{$cliente->id}}" method="POST" onsubmit="return confirm('CERTEZA?');">
                    
                        @csrf
                        @method('DELETE')
                        <button type="submit">Deletar</button>
                    </form>
                </td>
                <td>
                    <a href="">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    </body>
    </html>