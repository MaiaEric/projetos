<?php

require_once("conexao.php");
$conexao = new mysqli('localhost', 'root', '', 'spenders');

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}
$nome= $_POST ['nome'];
$preco = $_POST['preco'];
$quantidade = $_POST["quantidade"];
$fabricante = $_POST["fabricante"];
$disponivel = $_POST["disponivel"];
$detalhes = $_POST["detalhes"];
$descricao = $_POST["descricao"];

if (isset($_FILES['imagem']['name'])) {
    
    $dados_imagem = file_get_contents($_FILES['imagem']['tmp_name']);
    $stmt = $conexao->prepare("INSERT INTO produtos (nomeproduto, precoproduto, quantidadeproduto, fabricanteproduto, disponivel,detalhesproduto, descricaoproduto,imagem) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $nome, $preco, $quantidade, $fabricante, $disponivel, $detalhes, $descricao, $dados_imagem);
    $stmt->execute();
    $stmt->close();
}

$conexao->close();
exit();

if (mysqli_query($link, $sql)){
	echo "Postagem cadastrado com sucesso";
	header ('Location: admarea-produtos.php');
}
?>

