<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Guru</title>
        <meta name="viewport" content="width=device-width, inicial-scale=1">
        <meta charset="utf-8">
    </head>
    <body>
        <ul>
            <li><a href="{{ route('especie.create') }}">registrar espécie</a></li>
        </ul>
        <h1>Página Inicial: Espécie</h1>
        <table border="1">
            <thead>
                <th>Nome</th>
            </thead>
            <tbody>
                @foreach($especies as $especie)
                    <tr>
                        <td><a href="{{ route('especie.show', [ 'especie' => $especie->codigo_internacional_especie ]) }}">{{ $especie->nome_cientifico }}</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>