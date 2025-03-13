<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>

    <form action="index.php" method="get">
        <fieldset>
            <legend>Calculadora Científica</legend>
            <label for="valor1">Valor 1</label>
            <input type="number" name="valor1" id="valor1" placeholder="0" require>

            <br>
            <br>

            <label for="valor2">valor 2:</label>
            <input type="number" name="valor2" id="valor2" placeholder="0" require>

            <br>
            <br>

            <input type="submit" value="Calcular">
        </fieldset>
    </form>

<?php
    if(isset($_GET['valor1'])){
        if(empty($_GET['valor1'])){
            echo '<br>Valor 1 obrogatório';
        }

    }else{
        exit();
    }
    if(isset($_GET['valor2'])){
        if(empty($_GET['valor2'])){
            echo 'Valor 2 obrigatório';
        }
    }else{
        exit();
    }

    echo $_GET['valor1'] + $_GET['valor2'];

?>
</body>
</html>