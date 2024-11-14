<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/estilo.css">
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
    <div id="cabecalho">
        <img id="logo" src="/img/logo.webp" alt="">
    </div>
    <div id="navegacao">
        <ul id="menu">
            <li><a href="/">Home</a></li>
            <li><a href="#">Historia</a></li>
            <li><a href="/galeria">Galeria</a></li>
            <li><a href="/faleconosco">Fale Conosco</a></li>
        </ul>
    </div>

    @yield('conteudo')

    <div id="rodape"
          Borcelle Confeitaria<br>
          Rua dos Pioneiros, 1453, Uvaranas - Ponta Grossa/PR<br>
          Telefone: (42) 3241-4938<br>
          Whatsapp: (42) 99875-3823<br>
          E-mail: contato@borcelleconfeitaria.com.br<br>
          <a href="https://youtube.com"><img class="icones" src="https://imagepng.org/wp-content/uploads/2017/09/youtube-play-icone.png"></a>
          <a href="https://facebook.com"><img class="icones" src="https://imagepng.org/wp-content/uploads/2017/09/facebook-icone-icon.png"></a>
          <a href="https://instagram.com"><img class="icones" src="https://imagepng.org/wp-content/uploads/2017/08/instagram-icone-icon-1.png"></a>
    </div>
</body>
</html>