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
            <li><a href="{{ route('subclasse.create') }}">registrar subclasse</a></li>
        <ul>
        <h1>Tipos de subclasse</h1>
        <table border="1">
            <thead>
                <th>subclasse</th>
                <th>Edição</th>
            </thead>
            <tbody>
                @foreach($subclasses as $subclasse)
                    <tr>
                        <td>{{ $subclasse->subclasse }}</td>
                        <td><a href="{{ route('subclasse.edit', [ 'subclasse' => $subclasse->id ]) }}">editar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>