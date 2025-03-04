<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 6</title>
</head>
<body>

    <form action="index.php" method="get">

        <fieldset>
            <legend>Valores</legend>
            <label for="valor1">Informe um valor:</label>
            <input type="text" name="valor1" id="valor1" placeholder="0" required>

            <br>
            <br>

            <label for="valor2">Informe um segundo valor:</label>
            <input type="text" name="valor2" id="valor2" placeholder="0" required>

            <br>
            <br>

            <input type="submit" name="Verificar" value="Verificar">
        </fieldset>
            
    </form>

    <?php

        if (isset($_GET['valor1'])) {
        if (empty($_GET['valor1'])) {
            echo 'o valor1 é obrigatório!';
            exit();
           }
        } else {
            exit();
        }

        if (isset($_GET['valor2'])) {
            if (empty($_GET['valor2'])) {
                echo 'o valor2 é obrigatório!';
                exit();
               }
            } else {
                exit();
            }

            $valor1 = $_GET['valor1'];
            $valor2 = $_GET['valor2'];
        
            if ($valor1 > $valor2) {
                echo "O maior valor é: $valor1";

            }else if ($valor2 > $valor1) {
                echo "O maior valor é: $valor2";

            } else {
                echo "Os dois valores são iguais.";
            }
    ?>

            


  
    

