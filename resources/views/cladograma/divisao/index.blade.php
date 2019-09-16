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
            <li><a href="{{ route('divisao.create') }}">registrar divisao</a></li>
        <ul>
        <h1>Tipos de divisões</h1>
        <table border="1">
            <thead>
                <th>divisão</th>
                <th>Edição</th>
            </thead>
            <tbody>
                @foreach($divisoes as $divisao)
                    <tr>
                        <td>{{ $divisao->divisao }}</td>
                        <td><a href="{{ route('divisao.edit', [ 'divisao' => $divisao->id ]) }}">editar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>