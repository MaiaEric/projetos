<?php

// Conectar ao banco de dados
$conn = mysqli_connect("localhost", "root", "", "escola");

// Verificar conexão
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}


// ID do item a ser excluído
$id = $_POST['id'];

// Validar o ID
if (!is_numeric($id) || $id <= 0) {
    die("ID inválido.");
}

// Excluir item do banco de dados
$sql = "DELETE FROM aluno WHERE idaluno = $id";

if (mysqli_query($conn, $sql)) {
    echo "Item excluído com sucesso.";
    header('location:index.php');
} else {
    echo "Erro ao excluir item: " . mysqli_error($conn);
}

// Fechar conexão com o banco de dados
mysqli_close($conn);

?>