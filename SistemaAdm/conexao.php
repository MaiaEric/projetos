<?php
     $host="localhost";
     $usuario="root";
     $senha="";
     $database="sistema";

//Criar a conexão
    $conn = mysqli_connect("localhost", $usuario, $senha, $database);
    if(!$conn){
        die("Falha na conexão: " . mysqli_connect_error());
    }else{
        // echo "Conexão realizada com sucesso";
    }