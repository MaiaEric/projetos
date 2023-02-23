<?php

// Connect to database
$db = mysqli_connect("localhost", "root", "", "escola");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$id = $_POST['id'];

$result = mysqli_query($db, "SELECT * FROM aluno WHERE idaluno = $id"); 
$data = mysqli_fetch_assoc($result);

  $nomeAluno = $_POST['NomeAluno'];
  $turma = $_POST['TurmaAluno'];
  $mensalidade = $_POST['Mensalidade'];
 

  mysqli_query ($db,"UPDATE aluno SET NomeAluno = '$nomeAluno', TurmaAluno = '$turma', MensalidadeAluno = '$mensalidade' WHERE idaluno = $id");

  // Redirect to homepage
  header("Location: index.php");
  exit();

?>