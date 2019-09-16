<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Guru</title>
        <meta name="viewport" content="width=device-width, inicial-scale=1">
        <meta charset="utf-8">
    </head>
    <body>
        <ul>
            <li><a href="{{ route('classe.index') }}">voltar</a></li>
        </ul>
        <h1>Editar classe {{ $classe->classe }}</h1>
        <form method="post" action="{{ route('classe.update', ['classe' => $classe->id]) }}">
            @csrf()
            @method('PUT')

            <input type="text" name="classe" value="{{ $classe->classe }}" placeholder="classe"> <br>

            <input type="submit" value="editar"> 
        </form>
    </body>
</html>