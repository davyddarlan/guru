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
        <h1>Editar marcador {{ $marcador->marcador }}</h1>
        <form method="post" action="{{ route('marcador.update', ['marcador' => $marcador->id]) }}">
            @csrf()
            @method('PUT')

            <input type="text" name="marcador" value="{{ $marcador->marcador }}" placeholder="marcador"> <br>

            <textarea name="descricao">{{ $marcador->descricao }}</textarea> <br>

            <input type="submit" value="editar"> 
        </form>
    </body>
</html>