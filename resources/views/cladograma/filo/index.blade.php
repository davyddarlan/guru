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
            <li><a href="{{ route('filo.create') }}">registrar filo</a></li>
        <ul>
        <h1>Tipos de Filos</h1>
        <table border="1">
            <thead>
                <th>filo</th>
                <th>Edição</th>
            </thead>
            <tbody>
                @foreach($filos as $filo)
                    <tr>
                        <td>{{ $filo->filo }}</td>
                        <td><a href="{{ route('filo.edit', [ 'filo' => $filo->id ]) }}">editar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>