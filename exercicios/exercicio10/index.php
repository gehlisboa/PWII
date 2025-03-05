<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 10</title>
</head>
<body>

    <form action="index.php" method="get">

        <fieldset>
            <legend>Login</legend>
            <label for="usuario">Usuário:</label>
            <input type="text" name="usuario" id="usuario">

            <br>
            <br>

            <label for="senha">Senha:</label>
            <input type="text" name="senha" id="senha">

            <br>
            <br>

            <input type="submit" name="Fazer login" value="Fazer login">
        </fieldset>
            
    </form>

    <?php

    if (isset($_GET['usuario'], $_GET['senha'])) {

    $usuario_correto = "Admin";
    $senha_correta = "123";

    $usuario = $_GET['usuario'];
    $senha = $_GET['senha'];

    if ($usuario === $usuario_correto && $senha === $senha_correta) {
    echo "Conectado com sucesso!";
    }else {
    echo "Acesso negado! Usuário ou senha incorretos!";
    }
   }
   
    ?>

            


  
    

