<?php

require_once("conexao.php");

$NomeAluno=$_POST["NomeAluno"];
$TurmaAluno=$_POST["TurmaAluno"];
$mensalidade=$_POST["Mensalidade"];

$objDb=new db();
$link=$objDb -> conecta_mysqli();

$up = mysql_query("UPDATE escola SET NomeAluno ='$NomeAluno',TurmaAluno='$TurmaAluno',Mensalidade='$mensalidade' WHERE NomeAluno='$NomeAluno'");

if(mysql_affected_rows() > 0){
  echo "Sucesso: Atualizado corretamente!";
}else{
  echo "Aviso: Não foi atualizado!";
};