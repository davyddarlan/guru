<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Guru</title>
        <meta name="viewport" content="width=device-width, inicial-scale=1">
        <meta charset="utf-8">
    </head>
    <body>
        <a href="{{ route('especie.show', [ 'especie' => $especie->codigo_internacional_especie ]) }}">voltar</a>
        <h1>Editar Espécie: {{ $especie->nome_cientifico }}</h1>
        <form method="post" action="{{ route('especie.update', [ 'especie' => $especie->codigo_internacional_especie ]) }}">
            @csrf()
            @method('PUT')

            <input type="text" name="nome_cientifico" value="{{ $especie->nome_cientifico }}" placeholder="nome científico"> <br>

            <input type="text" name="descobridor" value="{{ $especie->descobridor }}" placeholder="descobridor"> <br>

            <input type="date" name="data_descoberta" value="{{ $especie->data_descoberta }}" placeholder="data da descoberta"> <br>

            <select name="estado_conservacao">
                <option value="lc">lc</option>
                <option value="nc">nc</option>
                <option value="vu">vu</option>
                <option value="en">en</option>
                <option value="cr">cr</option>
                <option value="ew">ew</option>
                <option value="ex">ex</option>
            </select> 
            
            <br>

            <input type="text" name="codigo_internacional_especie" value="{{ $especie->codigo_internacional_especie }}" placeholder="código internacional da espécie"> <br>

            <input type="submit" value="criar"> 
        </form>
    </body>
</html>