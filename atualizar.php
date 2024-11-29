<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];

    $sql = "UPDATE clientes SET nome='$nome', email='$email', telefone='$telefone', endereco='$endereco' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Cliente atualizado com sucesso!";
    } else {
        echo "Erro: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Atualizar Cliente</title>
</head>
<body>
    <h1>Atualizar Cliente</h1>
    <form method="POST" action="">
        <label>ID do Cliente:</label>
        <input type="text" name="id" required><br>
        <label>Nome:</label>
        <input type="text" name="nome" required><br>
        <label>Email:</label>
        <input type="email" name="email" required><br>
        <label>Telefone:</label>
        <input type="text" name="telefone" required><br>
        <label>Endereço:</label>
        <input type="text" name="endereco" required><br>
        <button type="submit">Atualizar</button>
    </form>
</body>
<button onclick="window.location.href='index.php';">Voltar</button>
</html>
