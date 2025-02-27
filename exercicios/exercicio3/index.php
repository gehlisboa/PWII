<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
</head>
<body>

    <form action="index.php" method="get">

        <fieldset>
            <legend>Número</legend>
            <label for="numero">Informe um número:</label>
            <input type="text" name="numero" id="numero" placeholder="0" required>

            <br>
            <br>

            <input type="submit" name="Verificar" value="Verificar">
        </fieldset>
            
    </form>

    <?php
        if (isset($_GET['numero'])) {
            if (empty($_GET['numero'])) {
                echo 'O número é obrigatório!';
                exit();
            }
        } else {
            exit();
        }

        $numero= $_GET['numero'];

        if ($numero > 100 ){
            echo "O número é maior que 100.";
        }else if ($numero <=0 && $numero < 100){
            echo "O número é menor que 100.";

        }else{
            echo "O número é igual a 100.";
        }

    ?>
    
</body>
</html>