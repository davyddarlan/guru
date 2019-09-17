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
            <li><a href="{{ route('subfamilia.create') }}">registrar subfamilia</a></li>
        <ul>
        <h1>Subfamilias</h1>
        <table border="1">
            <thead>
                <th>subfamilia</th>
                <th>Edição</th>
            </thead>
            <tbody>
                @foreach($subfamilias as $subfamilia)
                    <tr>
                        <td>{{ $subfamilia->subfamilia }}</td>
                        <td><a href="{{ route('subfamilia.edit', [ 'subfamilia' => $subfamilia->id ]) }}">editar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>