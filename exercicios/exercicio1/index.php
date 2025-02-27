<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>

    <form action="index.php" method="get">

        <fieldset>
            <legend>Situação do Aluno</legend>
            <label for="nota">Nota:</label>
            <input type="text" name="nota" id="nota" placeholder="0" required>
         
            <br> 
            <br>

            <input type="submit" name="resultado" value="Resultado">
        </fieldset>
            
    </form>

    <?php
        if (isset($_GET['nota'])) {
            if (empty($_GET['nota'])) {
                echo 'A nota é obrigatório!';
                exit();
            }
        } else {
            exit();
        }
        
        $nota= $_GET['nota'];

        if ($nota <6 ){
            echo "Você foi reprovado.";

        }else if ($nota >=6 && $nota <=7){
            echo "Você está de recuperação.";

        }else{
            echo "Você foi aprovado.";
        }
           
             
        
       
    ?>
    
</body>
</html>