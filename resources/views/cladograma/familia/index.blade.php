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
            <li><a href="{{ route('familia.create') }}">registrar familia</a></li>
        <ul>
        <h1>Tipos de familia</h1>
        <table border="1">
            <thead>
                <th>Ordem</th>
                <th>Edição</th>
            </thead>
            <tbody>
                @foreach($familias as $familia)
                    <tr>
                        <td>{{ $familia->familia }}</td>
                        <td><a href="{{ route('familia.edit', [ 'familia' => $familia->id ]) }}">editar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>