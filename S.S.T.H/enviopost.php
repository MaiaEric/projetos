<?php

session_start();
require_once("conexao.php");

// Verifica se a sessão 'id' está definida e não está vazia
if(isset($_SESSION['id']) && !empty($_SESSION['id'])) {
    $id_usuario = $_SESSION['id']; // Obtém o ID do usuário logado
} else {
    echo "ID de usuário inválido.";
    exit(); // Encerra o script
}

$nome = $_POST['nome'];
$titulo = $_POST['titulo'];
$data = $_POST['data'];
$mensagem = $_POST['mensagem'];
$imagem = $_POST["imagem"];
$categoria = $_POST["categoria"];

$objDb = new db();

$link = $objDb->conecta_mysqli();

$sql = "INSERT INTO postagem (nome, titulo, data, mensagem, imagem, categoria, idusuario) VALUES ('$nome', '$titulo', '$data', '$mensagem', '$imagem', '$categoria', '$id_usuario')";

if (mysqli_query($link, $sql)){
    echo "Postagem cadastrada com sucesso";
    header ('Location: index.php');
} else {
    echo "Erro ao cadastrar postagem: " . mysqli_error($link);
}

?>
