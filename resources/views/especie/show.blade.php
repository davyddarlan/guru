<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Guru</title>
        <meta name="viewport" content="width=device-width, inicial-scale=1">
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Espécie: {{ $especie->nome_cientifico }}</h1>
        <ul>
            <li> <a href="{{ route('especie.index') }}">lista de espécies</a></li>
            <li> <a href="{{ route('nome-popular.index') }}">nomes populares</a></li>
            <li><a href="{{ route('especie.edit', [ 'especie' => $especie->codigo_internacional_especie ]) }}">Editar</a></li>
            <li>
                <form action="{{ route('especie.destroy', [ 'especie' => $especie->codigo_internacional_especie ]) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="apagar">
                </form>
            </li>
        </ul>
        <table border="1">
            <thead>
                <th>Nome</th>
                <th>Descobridor</th>
                <th>Data da Descoberta</th>
                <th>Estado de Conservacao</th>
                <th>Código Internacional</th>
            </thead>
            <tbody>
                <tr>
                    <td>
                        {{ $especie->nome_cientifico }}
                    </td>
                    <td>
                        {{ $especie->descobridor }}
                    </td>
                    <td>
                        {{ $especie->data_descoberta }}
                    </td>
                    <td>
                        {{ $especie->estado_conservacao }}
                    </td>
                    <td>
                        {{ $especie->codigo_internacional_especie }}
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>