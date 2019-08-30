<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Guru</title>
        <meta name="viewport" content="width=device-width, inicial-scale=1">
        <meta charset="utf-8">
    </head>
    <body>
        <ul>
            <li><a href="{{ route('reino.index') }}">voltar</a></li>
        </ul>
        <h1>Editar Reino {{ $reino->reino }}</h1>
        <form method="post" action="{{ route('reino.update', ['reino' => $reino->id]) }}">
            @csrf()
            @method('PUT')

            <input type="text" name="reino" value="{{ $reino->reino }}" placeholder="reino"> <br>

            <input type="submit" value="editar"> 
        </form>
    </body>
</html>