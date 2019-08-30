<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Guru</title>
        <meta name="viewport" content="width=device-width, inicial-scale=1">
        <meta charset="utf-8">
    </head>
    <body>
        <ul>
            <li><a href="{{ route('ordem.index') }}">voltar</a></li>
        </ul>
        <h1>Registrar Ordem</h1>
        <form method="post" action="{{ route('ordem.store') }}">
            @csrf()

            <input type="text" name="ordem" placeholder="ordem"> <br>

            <input type="submit" value="criar"> 
        </form>
    </body>
</html>