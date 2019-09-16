<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Guru</title>
        <meta name="viewport" content="width=device-width, inicial-scale=1">
        <meta charset="utf-8">
    </head>
    <body>
        <ul>
            <li><a href="{{ route('subclasse.index') }}">voltar</a></li>
        </ul>
        <h1>Editar subclasse {{ $subclasse->subclasse }}</h1>
        <form method="post" action="{{ route('subclasse.update', ['subclasse' => $subclasse->id]) }}">
            @csrf()
            @method('PUT')

            <input type="text" name="subclasse" value="{{ $subclasse->subclasse }}" placeholder="subclasse"> <br>

            <input type="submit" value="editar"> 
        </form>
    </body>
</html>