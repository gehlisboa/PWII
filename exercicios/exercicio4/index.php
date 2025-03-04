<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4</title>
</head>
<body>

    <form action="index.php" method="get">

        <fieldset>
            <legend>Mês</legend>
            <label for="mes">Informe um mês do ano:</label>
            <input type="text" name="mes" id="mes">

            <br>
            <br>

            <input type="submit" name="Verificar" value="Verificar">
        </fieldset>
            
    </form>

    <?php
                if (isset($_GET['mes'])) {
                $mes = strtolower($_GET['mes']); 
            
                if ($mes == "janeiro" || $mes == "fevereiro" || $mes == "março" || 
                    $mes == "abril" || $mes == "maio" || $mes == "junho") {
                    echo "Esse mês faz parte do primeiro semestre.";

                }else if ($mes == "julho" || $mes == "agosto" || $mes == "setembro" ||
                          $mes == "outubro" || $mes == "novembro" || $mes == "dezembro") {
                    echo "Esse mês faz parte do segundo semestre.";

                }else {
                    echo "Esse mês é inválido.";
                }
              } 
        
?>
            

    
</body>
</html>