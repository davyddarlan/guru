<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Guru</title>
        <meta name="viewport" content="width=device-width, inicial-scale=1">
        <meta charset="utf-8">
    </head>
    <body>  
        <ul>
            <li><a href="{{ route('nome-popular.create') }}">criar nome popular</a></li>
            <li><a href="{{ route('especie.index') }}">voltar</a></li>
        <ul>
        <h1>Nomes Populares da Espécie: {{ $especie->nome_cientifico }}</h1>
        <table border="1">
            <thead>
                <th>Nome Popular</th>
            </thead>
            <tbody>
                @foreach($nomes_populares as $nome_popular)
                    <tr>
                        <td>{{ $nome_popular->nome_popular }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>