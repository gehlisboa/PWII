<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 7</title>
</head>
<body>

    <form action="index.php" method="get">

        <fieldset>
            <legend>Maior ou menor de idade?</legend>
            <label for="ano">Informe o ano em que você nasceu:</label>
            <input type="text" name="ano" id="ano" placeholder="0" required>

            <br>
            <br>

            <input type="submit" name="Verificar" value="Verificar">
        </fieldset>
            
    </form>

    <?php
        if (isset($_GET['ano'])) {
            if (empty($_GET['ano'])) {
                echo 'O ano é obrigatório!';
                exit();
            }
        } else {
            exit();
        }

        $ano= $_GET['ano'];

        if ($ano <= 2007){
            echo "Maior de idade.";

        }else{
            echo "Menor de idade.";
        }

    ?>
    
</body>
</html>