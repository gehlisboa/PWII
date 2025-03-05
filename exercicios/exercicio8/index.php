<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 8</title>
</head>
<body>

    <form action="index.php" method="get">

        <fieldset>
            <legend>Bônus</legend>
            <label for="nome">Nome do vendedor:</label>
            <input type="text" name="nome" id="nome" placeholder="0" required>

            <br>
            <br>

            <label for="vendas">Valor das vendas:</label>
            <input type="text" name="vendas" id="vendas" placeholder="0" required>


            <input type="submit" name="Calcular" value="Calcular">
        </fieldset>
            
    </form>

    <?php
  
 
     if (isset($_GET['nome'], $_GET['vendas'])) {

     $nome = $_GET['nome'];
     $vendas = $_GET['vendas'];
     $bonus = 0;

    if ($vendas > 5000) {
      $bonus = $vendas * 0.10;

    }else if ($vendas > 2000) {
      $bonus = $vendas * 0.20;

    }else if ($vendas > 1000) {
      $bonus = $vendas * 0.30;
   }
   echo "$nome irá receber um bônus de R$$bonus";
   }
?>
   
</body>
</html>