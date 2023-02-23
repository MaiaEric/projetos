<?php

require_once("conexao.php");

$nome=$_POST["NomeProduto"];
$catproduto=$_POST["categoriaproduto"];
$datproduto=$_POST["datacadastro"];
$valorproduto=$_POST["valorproduto"];
$descproduto=$_POST["descricaoproduto"];


$objDb=new db();
$link=$objDb -> conecta_mysqli();

$sql = "insert into produto(nomeProduto,categoria, idFornecedor, idProduto,dtCadastro,valorproduto,DescrProduto) values 
('$nome', '$catproduto','NULL', 'NULL','$datproduto', '$valorproduto', '$descproduto')";
        if(mysqli_query($link, $sql)){
          header('location:admproduto.html');
          echo  "Produto cadastrado com Sucesso!";
        } else{
          header('location:admproduto.html');
          echo "Erro ao cadastrar o produto!";
        }
?>