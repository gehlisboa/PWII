<?php
    include '../../config/connection.php';

    $stmt = $pdo->query('SELECT * FROM usuario');
    $usuarios = $stmt->fetchAll();
    
    // echo "<pre>";
    // echo var_dump($usuarios);
?>

<?php foreach ($usuarios as $indice => $user) { ?> 
    <p><strong>Nome: </strong><?php echo $user["username"]; ?></p>
    <a href="http://localhost/PWII/PDO_CRUD/public/usuario/delete.php?id= <?php echo $user['id']; ?>" >Remover</a>
    <a href="">Editar</a>
    <hr>
<?php } ?>



