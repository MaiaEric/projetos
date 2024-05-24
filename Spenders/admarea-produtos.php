<?php

session_start();
require_once("conexao.php");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "spenders";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM produtos";

$result = mysqli_query($conn, $sql);
$resultado = $conn->query("SELECT idproduto, nomeproduto, precoproduto, imagem FROM produtos ORDER BY idproduto DESC LIMIT 1");



/*==================================================================*/
?>

<!DOCTYPE html>
<html lang="pt-br" >
<head>
  <meta charset="UTF-8">
  <title>Administrativo - Home</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'><link rel="stylesheet" href="./navbar.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"><link rel="stylesheet" href="./logo.css">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="templatemo-style.css">
</head>
<body>
  <video autoplay muted loop id="background-video">
    <source src="Live  Wallpaper 4K Hypnotic Neon Tunnel.mp4" type="video/mp4">
    <!-- Adicione outros formatos de vídeo como alternativas -->
    Your browser does not support the video tag.
</video>

  
<div id="nav-bar">
  <input id="nav-toggle" type="checkbox"/>
  <div id="nav-header"><a id="nav-title" target="_blank">Administrattivo da Spenders</a>
    <label for="nav-toggle"><span id="nav-toggle-burger"></span></label>
    <hr/>
  </div>
  <div id="nav-content">
    <div class="nav-button"><i class="fas fa-home"></i><span>Produtos</span></div>
    <div class="nav-button"><i class="fas fa-heart"></i><span>Usuarios</span></div>
    <div class="nav-button"><i class="fas fa-game-controller"></i><span>Mensagens</span></div>
    <div class="nav-button"><i class="fas fa-game-controller"></i><span>Pedidos</span></div>
    <hr/>
    <div class="nav-button"><i class="fas fa-shopping-cart"></i><span>Perfil do ADM</span></div>
    <div id="nav-content-highlight"></div>
  </div>
  <div id="nav-footer">
    <div id="nav-footer-heading">
      <div id="nav-footer-avatar"><img src=""/></div>
      <div id="nav-footer-titlebox"><a id="nav-footer-title" href="">Perfil</a><span id="nav-footer-subtitle">Usuario</span></div>
    </div>
  </div>
</div>
<!-- partial -->


<div class="borda" style="height: auto; width: auto; margin-right: 20px">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome do Produto</th>
      <th scope="col">Valor do produto</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Disponivel</th>
      <th scope="col">Fabricante</th>
      <th scope="col">ID</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"> <a href="adicionarprodutos.php"><button type="button" class="btn btn-success">+</button></a></th>
    </tr>
  </thead>
  <tbody>

  <?php if (mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
      <th scope="row"></th>
      <td><?php echo $row['nomeproduto'] ?></td>
      <td><?php echo $row['precoproduto'] ?></td>
      <td><?php echo $row['quantidadeproduto'] ?></td>
      <td><?php echo $row['disponivel'] ?></td>
      <td><?php echo $row['fabricanteproduto'] ?></td>
      <td><?php echo $row['idproduto'] ?></td>
      <td><a href="deletar.php?id=<?php echo $row['idproduto'] ?>"><button  type="button" class="btn btn-danger button">Deletar</button></a></td>
      <td><a href="alterarprodutos.php?id=<?php echo $row['idproduto'] ?>"> <button  type="button" class="btn btn-success">Alterar</button></a></td>
    </tr>
    <?php }
            
          } else {
            echo "Tabela Vazia";
          
          }
          
          mysqli_close($conn);
          ?> 
  </tbody>
</table>
</div>
<style>

.button {
  text-decoration: none;
  cursor: pointer;
  
}
.button:hover {
  background: #5363;
  transition: all 0.3s ease-out;
}

.overlay {
  position: fixed;
  top: 2;
  bottom: 0;
  left: 0;
  right: 0;
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}
</style>

</body>
</html>
