<?php

require_once("conexao.php");

$nome = $_POST['NomeAluno'];
$turma = $_POST['TurmaAluno'];
$mensalidade = $_POST['Mensalidade'];

$objDb = new db();

$link = $objDb -> conecta_mysqli();

$sql = "insert into aluno(NomeAluno, TurmaAluno, MensalidadeAluno) VALUES ('$nome','$turma','$mensalidade')";

if (mysqli_query($link, $sql)){
	echo "Aluno cadastrado com sucesso";
	header ('Location: index.php');
}else{
	echo 'Erro Ao Cadastrar Aluno..';
}
?>