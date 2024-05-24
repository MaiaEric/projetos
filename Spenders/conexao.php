<?php

class db{
    private $host="localhost";
    private $usuario="root";
    private $senha="";
    private $database="spenders";

    public function conecta_mysqli(){
        $con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

        mysqli_set_charset($con, "utf8");

        if(mysqli_connect_errno()){
            echo "Erro ao tentar conexão com banco de dados." .mysql_connect_error();
        }
        return $con;
    }
}
?>