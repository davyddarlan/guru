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
        </ul>
        <h1>Criar Espécie</h1>
        <form method="post" action="{{ route('especie.store') }}">
            @csrf()

            <input type="text" name="nome_cientifico" placeholder="nome científico"> <br>

            <input type="text" name="descobridor" placeholder="descobridor"> <br>

            <input type="date" name="data_descoberta" placeholder="data da descoberta"> <br>

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

            <input type="text" name="codigo_internacional_especie" placeholder="código internacional da espécie"> <br>

            <input type="submit" value="criar"> 
        </form>
    </body>
</html>