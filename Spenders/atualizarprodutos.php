<?php

require_once("conexao.php");

$idproduto = $_POST['idproduto'];
$nome = $_POST['nome'];
$preco = $_POST["preco"];
$quantidade = $_POST["quantidade"];
$fabricante = $_POST["fabricante"];
$disponivel = $_POST["disponivel"];

$objDb = new db();

$link = $objDb -> conecta_mysqli();

$sql = "UPDATE produtos SET nomeproduto='$nome', precoproduto='$preco', quantidadeproduto='$quantidade', fabricanteproduto='$fabricante', disponivel='$disponivel' WHERE idproduto='$idproduto'";


if (mysqli_query($link, $sql)){
	echo "Produto cadastrado com sucesso";
	header ('Location: admarea-produtos.php');
}

//imagens//

$conexao = new mysqli('localhost', 'root', '', 'spenders');

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

if (isset($_FILES['imagem']['name'])) {
    $nome_imagem = $_FILES['imagem']['name'];
    $dados_imagem = file_get_contents($_FILES['imagem']['tmp_name']);

    $stmt = $conexao->prepare("UPDATE produtos SET  imagem='?'");
    $stmt->bind_param("ss", $nome_imagem, $dados_imagem);
    $stmt->execute();
    $stmt->close();
}

$conexao->close();
exit();

if (mysqli_query($link, $sql)){
	echo "Postagem cadastrado com sucesso";
	header ('Location: index.php');
}
?>