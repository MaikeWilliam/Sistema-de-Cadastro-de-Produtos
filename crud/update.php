<?php include '../database/db.php'; ?>

<?php
$id = $_GET['id'];
$sql = "SELECT * FROM produtos WHERE id=$id";
$result = $conn->query($sql);
$produto = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Produto</title>
    <link rel="stylesheet" href="../style/styles.css">
</head>
<body>
    <h1>Atualizar Produto</h1>
    <form action="update_process.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $produto['id']; ?>">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?php echo $produto['nome']; ?>" required>
        <label for="preco">Preço:</label>
        <input type="text" id="preco" name="preco" value="<?php echo $produto['preco']; ?>" required>
        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao"><?php echo $produto['descricao']; ?></textarea>
        <label for="imagem">Imagem:</label>
        <input type="file" id="imagem" name="imagem">
        <img src="uploads/<?php echo $produto['imagem']; ?>" alt="Imagem" width="100">
        <button class="action-btn">Atualizar Produto</button></a>
    </form>
    <a href="../index.php">Voltar</a>
</body>
</html>