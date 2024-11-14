<html>
    <head>
        <title>Teste!</title>
    </head>

    <body>
        <h1>Essa é a pagina de teste :D</h1>
        <!-- Este é um comentário HTML -->
        {{--  Este é um comentário no Blade --}}

     
    @foreach($clientes  as  $cliente) 
        <p>{{$cliente}}</p>
    @endforeach

    </body>

</html>