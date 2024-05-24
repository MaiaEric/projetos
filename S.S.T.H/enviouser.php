<?php

require_once("conexao.php");

$iduser = $_POST['iduser'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$objDb = new db();

$link = $objDb -> conecta_mysqli();

$sql = "insert into usuario(nome, email, senha) VALUES ('$nome','$email','$senha')";


if (mysqli_query($link, $sql)){
	echo "Usuario cadastrado com sucesso";
	header ('Location: perfil.php');
}


?>