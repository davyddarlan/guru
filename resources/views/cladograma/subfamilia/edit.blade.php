<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Guru</title>
        <meta name="viewport" content="width=device-width, inicial-scale=1">
        <meta charset="utf-8">
    </head>
    <body>
        <ul>
            <li><a href="{{ route('subfamilia.index') }}">voltar</a></li>
        </ul>
        <h1>Editar subfamilia {{ $subfamilia->subfamilia }}</h1>
        <form method="post" action="{{ route('subfamilia.update', ['subfamilia' => $subfamilia->id]) }}">
            @csrf()
            @method('PUT')

            <input type="text" name="subfamilia" value="{{ $subfamilia->subfamilia }}" placeholder="subfamilia"> <br>

            <input type="submit" value="editar"> 
        </form>
    </body>
</html>