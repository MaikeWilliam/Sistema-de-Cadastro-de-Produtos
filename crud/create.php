<?php include '../database/db.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Produto</title>
    <link rel="stylesheet" href="../style/styles.css">
</head>
<body>
    <h1>Criar Novo Produto</h1>
    <form action="create_process.php" method="POST" enctype="multipart/form-data">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <label for="preco">Preço:</label>
        <input type="text" id="preco" name="preco" required>
        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao"></textarea>
        <label for="imagem">Imagem:</label>
        <input type="file" id="imagem" name="imagem">
        <button class="action-btn">Salvar Produto</button></a>
    </form>
    <a href="../index.php">Voltar</a>
</body>
</html>