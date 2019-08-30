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
            <li><a href="{{ route('reino.create') }}">registrar reino</a></li>
        <ul>
        <h1>Tipos de reinos</h1>
        <table border="1">
            <thead>
                <th>Reino</th>
                <th>Edição</th>
            </thead>
            <tbody>
                @foreach($reinos as $reino)
                    <tr>
                        <td>{{ $reino->reino }}</td>
                        <td><a href="{{ route('reino.edit', [ 'reino' => $reino->id ]) }}">editar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>