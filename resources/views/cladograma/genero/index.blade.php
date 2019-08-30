<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Guru</title>
        <meta name="viewport" content="width=device-width, inicial-scale=1">
        <meta charset="utf-8">
    </head>
    <body>  
        <ul>
            <li><a href="{{ route('especie.index') }}">especies</a></li>
            <li><a href="{{ route('genero.create') }}">registrar genero</a></li>
        <ul>
        <h1>Tipos de Genero</h1>
        <table border="1">
            <thead>
                <th>genero</th>
                <th>Edição</th>
            </thead>
            <tbody>
                @foreach($generos as $genero)
                    <tr>
                        <td>{{ $genero->genero }}</td>
                        <td><a href="{{ route('genero.edit', [ 'genero' => $genero->id ]) }}">editar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>