<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ssth";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Receber dados do formulário
$nome = $_POST['nome'];
$novo_email = $_POST['novo_email'];
$nova_senha = $_POST['nova_senha'];

// Query SQL para atualizar os dados
$sql = "UPDATE usuario SET email='$novo_email', senha='$nova_senha' WHERE nome='$nome'";

if ($conn->query($sql) === TRUE) {
    echo "Informações atualizadas com sucesso!";
    header("Location: index.php");
} else {
    echo "Erro ao atualizar informações: " . $conn->error;
}

$conn->close();
?>
