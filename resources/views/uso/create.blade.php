<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Guru</title>
        <meta name="viewport" content="width=device-width, inicial-scale=1">
        <meta charset="utf-8">
    </head>
    <body>
        <ul>
            <li><a href="{{ route('uso.index') }}">voltar</a></li>
        </ul>
        <h1>Registrar tipo de Uso</h1>
        <form method="post" action="{{ route('uso.store') }}">
            @csrf()

            <input type="text" name="uso" placeholder="tipo de uso"> <br>

            <input type="submit" value="criar"> 
        </form>
    </body>
</html>