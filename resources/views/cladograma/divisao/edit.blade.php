<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Guru</title>
        <meta name="viewport" content="width=device-width, inicial-scale=1">
        <meta charset="utf-8">
    </head>
    <body>
        <ul>
            <li><a href="{{ route('divisao.index') }}">voltar</a></li>
        </ul>
        <h1>Editar classe {{ $divisao->divisao }}</h1>
        <form method="post" action="{{ route('divisao.update', ['divisao' => $divisao->id]) }}">
            @csrf()
            @method('PUT')

            <input type="text" name="divisao" value="{{ $divisao->divisao }}" placeholder="divisao"> <br>

            <input type="submit" value="editar"> 
        </form>
    </body>
</html>