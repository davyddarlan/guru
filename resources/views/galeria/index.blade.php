<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Guru</title>
        <meta name="viewport" content="width=device-width, inicial-scale=1">
        <meta charset="utf-8">
    </head>
    <body>  
        <ul>
            <li><a href="{{ route('especie.index') }}">voltar</a></li>
            <li><a href="{{ route('galeria.create') }}">adicionar foto à galeria</a></li>
        <ul>
        <h1>Lista de foto da espécie: {{ $especie->nome_cientifico }}</h1>
        <table border="1">
            <thead>
                <th>titulo</th>
                <th>descricao</th>
                <th>foto</th>
            </thead>
            <tbody>
                @foreach($especie->galerias as $galeria)
                    <tr>
                        <td>{{ $galeria->titulo }}</td>
                        <td>{{ $galeria->descricao }}</td>
                        <td>
                            <img src="{{ asset('repositorio/' . $galeria->localizacao) }}">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>