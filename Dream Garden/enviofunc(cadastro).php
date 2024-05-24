<?php

require_once("conexao.php");

$NomeFunc=$_POST["Nome"];
$SobrenomeFunc=$_POST["Sobrenome"];
$CargoFunc=$_POST["Cargo"];
$SalarioFunc=$_POST["Salário"];
$EnderecoFunc=$_POST["Endereço"];
$CidadeFunc=$_POST["Cidade"];
$CepFunc=$_POST["CEP"];
$CpfFunc=$_POST["CPF"];

$objDb=new db();
$link=$objDb -> conecta_mysqli();

$sql = "insert into funcionario(NomeFunc,SobrenomeFunc,CargoFunc,SalarioFunc,EnderecoFunc,CidadeFunc,CepFunc,CpfFunc,idfuncionario) values 
('$NomeFunc', '$SobrenomeFunc', '$CargoFunc', '$SalarioFunc', '$EnderecoFunc', '$CidadeFunc','$CepFunc','$CpfFunc','NULL')";
        if(mysqli_query($link, $sql)){
          header('location:admfuncionario.php');
          echo  "<script>alert('Usuário cadastrado com Sucesso!');</script>";
        } else{
          header('location:admfuncionario.php');
          echo "<script>alert('Erro ao registrar o usuário');</script>";
        }
?>