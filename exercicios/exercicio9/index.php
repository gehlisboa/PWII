<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>
<body>

    <form action="index.php" method="get">

        <fieldset>
            <legend>Ordem crescente</legend>
            <label for="n1">Informe um número:</label>
            <input type="text" name="n1" id="n1" placeholder="0" required>

            <br>
            <br>

            <label for="n2">Informe um segundo número:</label>
            <input type="text" name="n2" id="n2" placeholder="0" required>

            <br>
            <br>

            <label for="n3">Informe um terceiro número:</label>
            <input type="text" name="n3" id="n3" placeholder="0" required>

            <input type="submit" name="Verificar" value="Verificar">
        </fieldset>
            
    </form>

    <?php
       $n1 = $_GET['n1'];
       $n2 = $_GET['n2'];
       $n3 = $_GET['n3'];
   
       if ($n1 > $n2) { $aux = $n1; $n1 = $n2; $n2 = $aux; }
       if ($n2 > $n3) { $aux = $n2; $n2 = $n3; $n3 = $aux; }
       if ($n1 > $n2) { $aux = $n1; $n1 = $n2; $n2 = $aux; }
   
       echo "$n1, $n2, $n3";
   ?>
    
</body>
</html>