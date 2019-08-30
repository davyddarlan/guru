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
        <h1>Editar Ordem {{ $ordem->ordem }}</h1>
        <form method="post" action="{{ route('ordem.update', ['ordem' => $ordem->id]) }}">
            @csrf()
            @method('PUT')

            <input type="text" name="ordem" value="{{ $ordem->ordem }}" placeholder="ordem"> <br>

            <input type="submit" value="editar"> 
        </form>
    </body>
</html>