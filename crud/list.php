<?php include '../database/db.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Produtos</title>
    <link rel="stylesheet" href="../style/styles.css">
</head>
<body>
    <h1>Produtos Cadastrados</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Descrição</th>
            <th>Imagem</th>
            <th>Ações</th>
        </tr>
        <?php
        $sql = "SELECT * FROM produtos";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $preco_formatado = number_format($row['preco'], 0, ',', '.');

                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['nome'] . "</td>";
                echo "<td>" . "R$" . $preco_formatado . "</td>";
                echo "<td>" . $row['descricao'] . "</td>";
                echo "<td><img src='uploads/" . $row['imagem'] . "' alt='Imagem' width='100'></td>";
                echo "<td>
                    <a href='update.php?id=" . $row['id'] . "'><button class='action-btn'>Editar</button></a>  
                    <a href='delete.php?id=" . $row['id'] . "'><button class='action-btn delete-btn'>Excluir</button></a>
                     </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>Nenhum produto encontrado</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <a href="create.php"><button class="action-btn">Adicionar Novo Produto</button></a>
</body>
</html>