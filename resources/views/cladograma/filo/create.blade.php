<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Guru</title>
        <meta name="viewport" content="width=device-width, inicial-scale=1">
        <meta charset="utf-8">
    </head>
    <body>
        <ul>
            <li><a href="{{ route('filo.index') }}">voltar</a></li>
        </ul>
        <h1>Registrar filo</h1>
        <form method="post" action="{{ route('filo.store') }}">
            @csrf()

            <input type="text" name="filo" placeholder="filo"> <br>

            <input type="submit" value="criar"> 
        </form>
    </body>
</html>