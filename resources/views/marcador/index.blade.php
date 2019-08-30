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
            <li><a href="{{ route('marcador.create') }}">registrar marcador</a></li>
        <ul>
        <h1>Tipos de marcadores</h1>
        <table border="1">
            <thead>
                <th>marcaodr</th>
                <th>descricao</th>
                <th>Edição</th>
            </thead>
            <tbody>
                @foreach($marcadores as $marcador)
                    <tr>
                        <td>{{ $marcador->marcador }}</td>
                        <td>{{ $marcador->descricao }}</td>
                        <td><a href="{{ route('marcador.edit', [ 'marcador' => $marcador->id ]) }}">editar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>