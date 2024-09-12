<?php include '../database/db.php'; 

$id = $_GET['id'];

// Primeiro, obtém o nome da imagem para deletar
$sql = "SELECT imagem FROM produtos WHERE id=$id";
$result = $conn->query($sql);
$produto = $result->fetch_assoc();
$imagem = $produto['imagem'];

$sql = "DELETE FROM produtos WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    // Deleta a imagem do diretório
    if ($imagem) {
        unlink('uploads/' . $imagem);
    }
    echo "Produto deletado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>