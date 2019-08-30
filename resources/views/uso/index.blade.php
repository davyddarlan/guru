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
            <li><a href="{{ route('uso.create') }}">registrar uso</a></li>
        <ul>
        <h1>Tipos de usos</h1>
        <table border="1">
            <thead>
                <th>usos</th>
            </thead>
            <tbody>
                @foreach($usos as $uso)
                    <tr>
                        <td>{{ $uso->uso }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>