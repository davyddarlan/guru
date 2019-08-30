<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Guru</title>
        <meta name="viewport" content="width=device-width, inicial-scale=1">
        <meta charset="utf-8">
    </head>
    <body>
        <ul>
            <li><a href="{{ route('galeria.index') }}">voltar</a></li>
        </ul>
        <h1>Registrar foto para a espécie: {{ $especie->nome_cientifico }}</h1>
        <form enctype="multipart/form-data" method="post" action="{{ route('galeria.store') }}">
            @csrf()

            <input type="text" name="titulo" placeholder="titulo"> <br>

            <textarea name="descricao"></textarea> <br>

            <input type="file" name="fotografia"> <br>

            <input type="submit" value="gravar"> 
        </form>
    </body>
</html>