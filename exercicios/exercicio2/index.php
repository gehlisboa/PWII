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
            <legend>Voto</legend>
            <label for="idade">Informe sua idade:</label>
            <input type="text" name="idade" id="idade" placeholder="0" required>

            <br>
            <br>

            <input type="submit" name="Verificar" value="Verificar">
        </fieldset>
            
    </form>

    <?php
        if (isset($_GET['idade'])) {
            if (empty($_GET['idade'])) {
                echo 'A idade é obrigatória!';
                exit();
            }
        } else {
            exit();
        }

        $idade= $_GET['idade'];

        if ($idade >=18 && $idade <=70){
            echo "Voto obrigatório.";

        }else if ($idade >=0 && $idade <=15){
            echo "Voto não permitido.";

        }else{
            echo "Voto permitido, mas não obrigatório.";
        }

    ?>
    
</body>
</html>