<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 5</title>
</head>
<body>

    <form action="index.php" method="get">

        <fieldset>
            <legend>Consoante ou Vogal?</legend>
            <label for="letra">Informe uma letra do alfabeto:</label>
            <input type="text" name="letra" id="letra">

            <br>
            <br>

            <input type="submit" name="Verificar" value="Verificar">
        </fieldset>
            
    </form>

    <?php
        if (isset($_GET['letra'])) {
            if (empty($_GET['letra'])) {
                echo 'A letra é obrigatória!';
                exit();
            }
        } else {
            exit();
        }

        $letra = strtolower($_GET['letra']); 
    

        if ($letra == 'b' || $letra =='c' || $letra =='d' || $letra =='f' || $letra =='g' || $letra =='h' || $letra =='j' || $letra =='k' ||
         $letra =='l' || $letra =='m' || $letra =='n' || $letra == 'p' || $letra == 'q'||  $letra =='r' || $letra =='s' || $letra == 't'|| 
          $letra == 'v'||  $letra =='w' || $letra =='x' || $letra == 'y' || $letra == 'z' ){
            echo "Essa letra é uma consoante.";

        }else if ($letra == 'a' || $letra == 'e' || $letra == 'i' || $letra == 'o' || $letra == 'u'){
            echo "Essa letra é uma vogal.";

        }else{
            echo "Letra inválida.";
        }

    ?>
    
</body>
</html>