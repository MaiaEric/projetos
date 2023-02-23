<?php

require_once("conexao.php");

$email=$_POST["emailCliente"];
$nomeusuario=$_POST["nomeCliente"];
$senhausuario=$_POST["senhaCliente"];
$enderecousuario=$_POST["enderecoCliente"];
$cidadeusuario=$_POST["cidadeCliente"];
$cepusuario=$_POST["cepCliente"];

$objDb=new db();
$link=$objDb -> conecta_mysqli();

$sql = "insert into cliente(idCliente,email,nomeusuario,senhausuario,enderecousuario,cidadeusuario,cepusuario,cpfusuario) values 
('NULL','$email', '$nomeusuario', '$senhausuario', '$enderecousuario', '$cidadeusuario', '$cepusuario','$cpfusuario')";
        if(mysqli_query($link, $sql)){
          header('location:index.php');
          echo  "<script>alert('Usuário cadastrado com Sucesso!');</script>";
        } else{
          header('location:index.php');
          echo "<script>alert('Erro ao registrar o usuário');</script>";
        }
?>