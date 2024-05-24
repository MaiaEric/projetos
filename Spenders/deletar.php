<?php
// Conexão com o banco de dados MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "spenders";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Verifica se a ID foi passada via GET
if (isset($_GET['id'])) {
    // ID a ser deletada
    $id = $_GET['id'];

    // Prepara a query SQL para deletar o registro com a ID fornecida
    $sql = "DELETE FROM produtos WHERE idproduto = $id";

    // Executa a query
    if ($conn->query($sql) === TRUE) {
        echo "Registro deletado com sucesso.";
        header ('Location: admarea-produtos.php');
    } else {
        echo "Erro ao deletar registro: " . $conn->error;
    }
} else {
    echo "ID não fornecida.";
}

// Fecha a conexão com o banco de dados
$conn->close();
?>

