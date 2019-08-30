<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Guru</title>
        <meta name="viewport" content="width=device-width, inicial-scale=1">
        <meta charset="utf-8">
    </head>
    <body>
        <ul>
            <li><a href="{{ route('marcador.index') }}">voltar</a></li>
        </ul>
        <h1>Registrar marcador</h1>
        <form method="post" action="{{ route('marcador.store') }}">
            @csrf()

            <input type="text" name="marcador" placeholder="marcador"> <br>

            <textarea name="descricao"></textarea> <br>

            <input type="submit" value="criar"> 
        </form>
    </body>
</html>