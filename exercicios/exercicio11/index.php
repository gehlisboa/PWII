<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 11</title>
</head>
<body>

    <form action="index.php" method="get">

        <fieldset>
            <legend>Triângulo</legend>
            <label for="ladoA">Lado A:</label>
            <input type="text" name="ladoA" id="ladoA" placeholder="0" required>

            <br>
            <br>

            <label for="LadoB">Lado B:</label>
            <input type="text" name="LadoB" id="LadoB" placeholder="0" required>

            <br>
            <br>

            <label for="LadoC">Lado C:</label>
            <input type="text" name="LadoC" id="LadoC" placeholder="0" required>
            
            <br>
            <br>

            <input type="submit" name="Verificar" value="Verificar">
        </fieldset>
            
    </form>

    <?php
      

      if (isset($_GET['LadoA'])) {
        if (empty($_GET['LadoA'])) {
            echo 'É obrigatório informar os lados!';
            exit();
        }
    } else {
        exit();
    }

        $a = $_GET['LadoA'];
        $b = $_GET['LadoB'];
        $c = $_GET['LadoC'];
      
      
        if ($a == $b || $a == $c || $b == $c) {
            echo "Triângulo isósceles";

          }else if ($a <> $b || $b <> $c){
            echo "Triângulo escaleno";

          }else if ($a == $b && $b == $c){
            echo "Triângulo equilátero";

          }else{
            echo "Os valores informados não formam um triângulo.";
          }               
            
?>
        
    
</body>
</html>