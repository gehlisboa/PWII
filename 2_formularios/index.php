<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <fieldset>
            <legend>Informações do Personagem</legend>

            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="Nome do Personagem" required>

            <br>

            <label for="poder">Poder</label>
            <input type="text" name="poder" id="poder" placeholder="Nome do Personagem" required>

            <br>

            <input type="submit" value="Enviar">

        </fieldset>
    </form>

    <?php
    // if(isset($_GET['nome'])) {
    //     if(empty($_GET['nome'])) {
    //         echo 'Nome obrigatório';
    //     } else {
    //         echo $_GET['nome'];
        
    ?>
</body>
</html>