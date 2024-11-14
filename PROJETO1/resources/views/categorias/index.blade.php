<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Listagem de Categorias</h1>
    {{session('mensagem')}}

    @if($categorias->isEmpty())
        <h3> Nenhuma categoria Cadastrada </h3>
    @else
    <table>
        <thead>
            <tr>
                <td>Nome</td>
                <td>Descrição</td>
                <td>Ações</td>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias as $categoria)
            <tr>
                <td>{{$categoria->nome}}</td>
                <td>{{$categoria->descricao}}</td>
                <form action="{{ route('categorias.destroy', $categoria->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Excluir">
                </form>
                <a href="{{ route('categorias.update', $categoria->id) }}">Editar</a>
                <a href="{{ route('categorias.show', $categoria->id )}}">Visualizar Detalhes</a>
            </tr> 
            @endforeach
        </tbody>
    </table>
    @endif   
</body>

</html>