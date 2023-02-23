<?php

session_start();
require_once("conexao.php");
$login = $_POST['login'];
$senha = $_POST['senha'];
$nomeusuario = $_POST['nomeusuario'];


$objDb=new db();
$link=$objDb -> conecta_mysqli();

$verifica = ("SELECT * FROM cliente WHERE email = '$login' AND senhausuario = '$senha' AND nomeusuario = '$nomeusuario'");


$resultado = mysqli_query($link, $verifica);


if(mysqli_num_rows($resultado) > 0 )
{
$_SESSION['email'] = $login;
$_SESSION['senhausuario'] = $senha;
$_SESSION['nomeusuario'] = $nomeusuario;
header('Location:index.php');
}
else{
  unset ($_SESSION['email']);
  unset ($_SESSION['senhausuario']);
  unset ($_SESSION['nomeusuario']);
  header('Location:login.html');

  }
?>