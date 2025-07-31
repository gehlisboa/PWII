<?php session_start(); ?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>
  <body>

    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-8">
                <form action="./question1.php" method="post">
                    <div class="mb-3">
                        <h1>O que Dom Pedro I gritou no dia da Indepêndencia?</h1>
                    </div>
                    <div class="mb-3">
                        <input type="radio" name="question1" id="question1" value="resp1"> 
                        <label for="question1">Indepêndencia ou morte</label>
                    </div>

                    <div class="mb-3">
                        <input type="radio" name="question1" id="question1" value="resp2"> 
                        <label for="question1">Ordem e progresso</label>
                    </div>

                    <div class="mb-3">
                        <input type="radio" name="question1" id="question1" value="resp3"> 
                        <label for="question1">Sou fã do oruam</label>
                    </div>

                    <div class="mb-3">
                        <input type="radio" name="question1" id="question1" value="resp4"> 
                        <label for="question1">Não gritou nada</label>
                    </div>
                    <button type="submit" class="btn btn-secondary">Verificar</button>
                </form>

                <?php
                if (isset($_POST['question1'])) {
                    if(empty($_POST['question1'])){
                        echo'<div class="alert alert-warning" role="alert">Favor escolher uma alternativa <div/>';
                    }

                   if(!empty($_POST['question1'])){
                    if ($_POST['question1'] == 'resp1') {
                        echo'<div class="alert alert-success" role="alert"> Você acertou! <a href="question2.php">Avançar<a/> <div/>';
                        // header('Location:')
                    }
                    if ($_POST['question1'] != 'resp1') {
                        echo'<div class="alert alert-warning" role="alert"> Você errou <div/>';
                    }   
                  }
                }
                ?>

            </div>
        </div>
     </div>
    
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>