<?php 
include '../config/connection.php';
include '../includes/header.php';
include '../includes/menu.php';

$id = $_GET['id'] ?? null;

if (!$id) {
    echo "O id é obrigatório!!!";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Recebe dados do POST
    $id = $_POST['id'];
    $titulo = $_POST['titulo_anuncio'];
    $descricao = $_POST['descricao_anuncio'];
    $data = $_POST['data_publicacao'];
    $marca = $_POST['marca_veiculo'];
    $modelo = $_POST['modelo_veiculo'];
    $ano = $_POST['ano_veiculo'];
    $cor = $_POST['cor_veiculo'];
    $placa = $_POST['placa_veiculo'];
    $proprietario = $_POST['nome_proprietario'];
    $telefone = $_POST['telefone_proprietario'];

    // Atualiza no banco
    $stmt = $pdo->prepare('
        UPDATE anuncios SET 
            titulo_anuncio = :titulo, 
            descricao_anuncio = :descricao, 
            data_publicacao = :data, 
            marca_veiculo = :marca, 
            modelo_veiculo = :modelo, 
            ano_veiculo = :ano, 
            cor_veiculo = :cor, 
            placa_veiculo = :placa, 
            nome_proprietario = :proprietario, 
            telefone_proprietario = :telefone 
        WHERE id = :id
    ');
    $stmt->execute([
        ':id' => $id,
        ':titulo' => $titulo,
        ':descricao' => $descricao,
        ':data' => $data,
        ':marca' => $marca,
        ':modelo' => $modelo,
        ':ano' => $ano,
        ':cor' => $cor,
        ':placa' => $placa,
        ':proprietario' => $proprietario,
        ':telefone' => $telefone,
    ]);

    header("Location: read-anuncio.php");
    exit();
}

// Se for GET, busca os dados do anúncio
$stmt = $pdo->prepare('SELECT * FROM anuncios WHERE id = :id');
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$anuncio = $stmt->fetch();

if (!$anuncio) {
    echo "Anúncio não encontrado.";
    exit();
}
?>

<form action="" method="POST">
    <input type="hidden" name="id" value="<?= $anuncio['id'] ?>">

    <label>Título:</label><br>
    <input type="text" name="titulo_anuncio" value="<?= $anuncio['titulo_anuncio'] ?>"><br>

    <label>Descrição:</label><br>
    <input type="text" name="descricao_anuncio" value="<?= $anuncio['descricao_anuncio'] ?>"><br>

    <label>Data:</label><br>
    <input type="date" name="data_publicacao" value="<?= $anuncio['data_publicacao'] ?>"><br>

    <label>Marca:</label><br>
    <input type="text" name="marca_veiculo" value="<?= $anuncio['marca_veiculo'] ?>"><br>

    <label>Modelo:</label><br>
    <input type="text" name="modelo_veiculo" value="<?= $anuncio['modelo_veiculo'] ?>"><br>

    <label>Ano:</label><br>
    <input type="number" name="ano_veiculo" value="<?= $anuncio['ano_veiculo'] ?>"><br>

    <label>Cor:</label><br>
    <input type="text" name="cor_veiculo" value="<?= $anuncio['cor_veiculo'] ?>"><br>

    <label>Placa:</label><br>
    <input type="text" name="placa_veiculo" value="<?= $anuncio['placa_veiculo'] ?>"><br>

    <label>Proprietário:</label><br>
    <input type="text" name="nome_proprietario" value="<?= $anuncio['nome_proprietario'] ?>"><br>

    <label>Telefone:</label><br>
    <input type="text" name="telefone_proprietario" value="<?= $anuncio['telefone_proprietario'] ?>"><br><br>

    <button type="submit">Atualizar</button>
</form>

<?php include '../includes/footer.php'; ?>
