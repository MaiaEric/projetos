<?php

session_start();
require_once("conexao.php");

$email = $_POST['email'];
$senha = $_POST['senha'];

// Defina uma variável de mensagem de sucesso
$_SESSION['mensagem'] = "Login bem-sucedido!";

$objDb = new db();
$link = $objDb->conecta_mysqli();

$verifica = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
$resultado = mysqli_query($link, $verifica);

if (mysqli_num_rows($resultado) > 0) {
    $row = mysqli_fetch_assoc($resultado);
    $_SESSION['id'] = $row['idusuario'];
    $_SESSION['nome'] = $row['nome'];
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;

    header('Location: index.php');
} else {
    unset($_SESSION['id']);
    unset($_SESSION['nome']);
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: perfil.php');
}
