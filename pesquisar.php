<?php
include 'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Pesquisar Clientes</title>
</head>
<body>
    <h1>Pesquisar Clientes</h1>
    <form method="GET" action="">
        <label>Nome do Cliente:</label>
        <input type="text" name="pesquisa" required>
        <button type="submit">Pesquisar</button>
    </form>

    <?php
    if (isset($_GET['pesquisa'])) {
        $pesquisa = $conn->real_escape_string($_GET['pesquisa']);
        $sql = "SELECT * FROM clientes WHERE nome LIKE '%$pesquisa%'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<h2>Resultados:</h2>";
            echo "<table border='1'>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Endereço</th>
                    </tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['nome']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['telefone']}</td>
                        <td>{$row['endereco']}</td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "Nenhum cliente encontrado.";
        }
    }
    ?>
</body>
<button onclick="window.location.href='index.php';">Voltar</button>
</html>
