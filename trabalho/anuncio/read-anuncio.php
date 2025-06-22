<?php
   include '../includes/header.php';
   include '../includes/menu.php';
   include '../config/connection.php';

    $stmt = $pdo->query('SELECT * FROM anuncios');
    $anuncios = $stmt->fetchAll();
?>

<?php foreach ($anuncios as $indice => $anuncio) { ?> 
    <p><strong>ID:</strong> <?= $anuncio["id"] ?></p>
    <p><strong>Título:</strong> <?= $anuncio["titulo_anuncio"] ?></p>
    <p><strong>Descrição:</strong> <?= $anuncio["descricao_anuncio"] ?></p>
    <p><strong>Data:</strong> <?= $anuncio["data_publicacao"] ?></p>
    <p><strong>Marca:</strong> <?= $anuncio["marca_veiculo"] ?></p>
    <p><strong>Modelo:</strong> <?= $anuncio["modelo_veiculo"] ?></p>
    <p><strong>Ano:</strong> <?= $anuncio["ano_veiculo"] ?></p>
    <p><strong>Cor:</strong> <?= $anuncio["cor_veiculo"] ?></p>
    <p><strong>Placa:</strong> <?= $anuncio["placa_veiculo"] ?></p>
    <p><strong>Proprietário:</strong> <?= $anuncio["nome_proprietario"] ?></p>
    <p><strong>Telefone:</strong> <?= $anuncio["telefone_proprietario"] ?></p>

    <a href="update-anuncio.php?id=<?= $anuncio['id']; ?>" class="btn btn-sm btn-warning">Editar</a>
    <a href="delete-anuncio.php?id=<?= $anuncio['id']; ?>" class="btn btn-sm btn-danger">Remover</a>
<?php } ?>

<?php include '../includes/footer.php'; ?>




