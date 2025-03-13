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
            <legend>Informações do Personagem</legend>
            <label for="Nome">Nome</label>
            <input type="text" name="Nome" id="Nome" placeholder="Nome">

            <br>
            <br>

            <label for="poder">Poder:</label>
            <input type="text" name="poder" id="poder" placeholder="Poder">

            <br>
            <br>

            <input type="submit" value="Enviar">
        </fieldset>
    </form>

<?php
    if(isset($_GET['Nome'])){
        if(empty($_GET['Nome'])){
            echo 'Nome obrogatório';
        }else{
            echo $_GET['Nome'];
        }
    

    }
    if(isset($_GET['poder'])){
        if(empty($_GET['poder'])){
            echo 'Poder obrigatório';
        }else
        echo $_GET['poder'];

    }

?>
</body>
</html>