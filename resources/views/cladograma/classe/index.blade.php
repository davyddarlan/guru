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
            <li><a href="{{ route('classe.create') }}">registrar classe</a></li>
        <ul>
        <h1>Tipos de classes</h1>
        <table border="1">
            <thead>
                <th>classe</th>
                <th>Edição</th>
            </thead>
            <tbody>
                @foreach($classes as $classe)
                    <tr>
                        <td>{{ $classe->classe }}</td>
                        <td><a href="{{ route('classe.edit', [ 'classe' => $classe->id ]) }}">editar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>