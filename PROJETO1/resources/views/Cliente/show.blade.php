<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente - Detalhes</title>
</head>
<body>
    <h1>Detalhes do Cliente</h1>

    <p>Nome: {{$cliente->nome }}</p>
    <p>CPF: {{$cliente-> }}</p>
    <p>Telefone: {{$cliente->telefone }}</p>
    <p>E-mail: {{$cliente->email}}</p>

    <form action="deletarCliente/{{ $cliente->id_cliente }}" method="POST" onsubmit="return confirm('TEM CERTEZA');">
        
        @csrf
        @method('DELETE')

                <button type="submit">Deletar</button>
    </form>
            <a href="editarCliente/{{$cliente->id}}">Editar</a>
</body>
</html>