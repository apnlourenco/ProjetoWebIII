<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
</head>
<body>
    <form action="{{ route('categorias.store') }}" method="post">
        @csrf
        {{session('mensagem')}}
        <p>Nome: <input type="text" name="nome"></p> 
        <p>Descrição: <textarea name="descricao"> </textarea></p>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>