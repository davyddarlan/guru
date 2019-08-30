<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Guru</title>
        <meta name="viewport" content="width=device-width, inicial-scale=1">
        <meta charset="utf-8">
    </head>
    <body>
        <ul>
            <li><a href="{{ route('genero.index') }}">voltar</a></li>
        </ul>
        <h1>Registrar genero</h1>
        <form method="post" action="{{ route('genero.store') }}">
            @csrf()

            <input type="text" name="genero" placeholder="genero"> <br>

            <input type="submit" value="criar"> 
        </form>
    </body>
</html>