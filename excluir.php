<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];

    $sql = "DELETE FROM clientes WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Cliente excluído com sucesso!";
    } else {
        echo "Erro: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Excluir Cliente</title>
</head>
<body>
    <h1>Excluir Cliente</h1>
    <form method="POST" action="">
        <label>ID do Cliente:</label>
        <input type="text" name="id" required><br>
        <button type="submit">Excluir</button>
    </form>
</body>
<button onclick="window.location.href='index.php';">Voltar</button>
</html>
