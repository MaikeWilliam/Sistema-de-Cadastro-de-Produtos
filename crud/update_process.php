<?php include '../database/db.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];

// Processa o upload da imagem
if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0) {
    $imagem = $_FILES['imagem']['name'];
    move_uploaded_file($_FILES['imagem']['tmp_name'], 'uploads/' . $imagem);
    $sql = "UPDATE produtos SET nome='$nome', preco='$preco', descricao='$descricao', imagem='$imagem' WHERE id=$id";
} else {
    $sql = "UPDATE produtos SET nome='$nome', preco='$preco', descricao='$descricao' WHERE id=$id";
}

if ($conn->query($sql) === TRUE) {
    echo "Produto atualizado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>