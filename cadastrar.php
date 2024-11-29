<?php
include 'conexao.php';

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];

    // Insere os dados no banco
    $sql = "INSERT INTO clientes (nome, email, telefone, endereco) VALUES ('$nome', '$email', '$telefone', '$endereco')";
    if ($conn->query($sql) === TRUE) {
        
        echo "<script>alert('Cliente cadastrado com sucesso!'); window.location.href='cadastrar.php';</script>";
    } else {
   
        echo "<script>alert('Erro ao cadastrar cliente: " . $conn->error . "');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Cliente</title>
</head>
<body>
    <h1>Cadastrar Cliente</h1>
    <form method="POST" action="">
        <label>Nome:</label>
        <input type="text" name="nome" required><br>
        <label>Email:</label>
        <input type="email" name="email" required><br>
        <label>Telefone:</label>
        <input type="text" name="telefone" required><br>
        <label>Endereço:</label>
        <input type="text" name="endereco" required><br>
        <button type="submit">Cadastrar</button>
    </form>
</body>
<button onclick="window.location.href='index.php';">Voltar</button>
</html>
