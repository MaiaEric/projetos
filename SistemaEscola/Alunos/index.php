<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "escola";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT NomeAluno, TurmaAluno, TurmaAluno, MensalidadeAluno, idaluno FROM aluno";

$result = mysqli_query($conn, $sql);

?>

<!doctype html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tabelas</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<header></header>
<body>

<div class="container">

<style>
     table,tr, td{
                  border:3px solid black;
                  border-collapse: collapse;
                  border-style: solid;

              }
              table{
                  width: 100%;
                               
              }  
    </style>
   <p class="p-2"></p>    
   <div class="jumbotron jumbotron-fluid">
            <div class="container" style="text-align:center;">
              <h1 class="display-4">Tabelas de alunos</h1>
            </div>
          </div>     
   <table style="font-size: 20px;" class="table table-hover">
    <p class="p-1"></p>
    <tr>
   
  
    <td style="background-color:white"><center>Nome do Aluno</center></td>
    <td style="background-color:white"><center>Turma do aluno</center></td>
    <td style="background-color:white"><center>Mensalidade</center></td>
    <td style="background-color:white"><center>id</center></td>
    
</tr>
    <?php if (mysqli_num_rows($result) > 0) {

   while($row = mysqli_fetch_assoc($result)) { ?>

        <td><?php echo $row['NomeAluno']; ?></td>
        <td><?php echo $row['TurmaAluno']; ?></td>
        <td><?php echo $row['MensalidadeAluno'] ?></td>
        <td><?php echo $row['idaluno'] ?></td>
       

    <!-- The Modal -->
  <div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <form action="envio(excluir).php" method="POST">
        <h4 class="modal-title">Deseja Excluir Aluno?</h4>
        </div>

      <!-- Modal body -->
      <div class="modal-body">
      <label style="color: red"><b>Informe o ID do Aluno para continuar</b></label>
      <p class="p-0.5"></p>
        <input type="text" name="id">
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      <center><button type="submit" class="btn btn-danger">Sim</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button></center>
      </div>

    </div>
  </div>
</div>
   </form>


</td>      
  </tr>
   







      <!-- FECHANDO O WHILE -->

        <?php }

    } else {
      echo "Lista Vazia, aguardando por informações";

    }

    mysqli_close($conn);
    ?> 
      </table> 
<center><a type="submit" href="editor.php" class="btn btn-dark">Atualizar</a>
<a button type="button" data-bs-toggle="modal" data-bs-target="#myModal" href="envio(excluir).php" class="btn btn-dark"> Excluir </a>
<a type="button" href="registrar.php" class="btn btn-dark"> Registrar </a></center>

</body>
</html>