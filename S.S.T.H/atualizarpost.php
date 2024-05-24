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

$idpost = $_POST['idpost'];
$nome = $_POST['nome'];
$titulo = $_POST['titulo'];
$data = $_POST['data'];
$mensagem = $_POST['mensagem'];
$categoria = $_POST['categoria'];
$imagem = $_POST['imagem'];



// Query SQL para atualizar os dados
$sql = "UPDATE postagem SET nome='$nome', titulo='$titulo', data='$data', mensagem='$mensagem', categoria='$categoria', imagem='$imagem' WHERE idpost='$idpost'";

if ($conn->query($sql) === TRUE) {
    echo "Informações atualizadas com sucesso!";
    header("Location: index.php");
} else {
    echo "Erro ao atualizar informações: " . $conn->error;
}

$conn->close();
?>
