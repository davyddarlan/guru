<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Guru</title>
        <meta name="viewport" content="width=device-width, inicial-scale=1">
        <meta charset="utf-8">
    </head>
    <body>
        <ul>
            <li><a href="{{ route('nome-popular.index') }}">voltar</a></li>
        </ul>
        <h1>Criar nome popular da especie: {{ $especie->nome_cientifico }}</h1>
        <form method="post" action="{{ route('nome-popular.store') }}">
            @csrf()

            <input type="text" name="nome_popular" placeholder="nome popular"> <br>

            <input type="submit" value="criar"> 
        </form>
    </body>
</html>