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


/*==================================================================*/

// Inicie a sessão (se já não estiver iniciada)


// Verifique se a variável de mensagem está definida na sessão
if (isset($_SESSION['mensagem'])) {
    echo '<div class="mensagem" style="margin-left:700px">' . $_SESSION['mensagem'] . '</div>';

    // Remova a mensagem da sessão para que ela não seja exibida novamente
    unset($_SESSION['mensagem']);
}


?>

<!DOCTYPE html>
<html lang="pt-br" >
<head>
  <meta charset="UTF-8">
  <title>SPENDERS - Home</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'><link rel="stylesheet" href="./navbar.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"><link rel="stylesheet" href="./logo.css">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="templatemo-style.css">
</head>
<body>
  <video autoplay muted loop id="background-video">
    <source src="PapelDeParede.mp4" type="video/mp4">
    <!-- Adicione outros formatos de vídeo como alternativas -->
    Your browser does not support the video tag.
</video>

  <!-- partial:index.partial.html -->
  <input type="radio" name="toggle" id="toggleOpen" value="toggleOpen">
  <input type="radio" name="toggle" id="toggleClose" value="toggleClose">
  <figure id="welcomeMessage" style="font-family: 'Poppins', sans-serif;">
    <figcaption>
      <h6>
        <label for="toggleOpen" title="Click to Open"></label>
        <label for="toggleClose" title="Click to Close">✖</label>
        <b>
          S
          <a href="" title="Go To Home">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
              <defs>
                <lineargradient id="svgGradient" x1="0" y1="0" x2="20" y2="0" gradientUnits="userSpaceOnUse">
                  <stop offset="0" stop-color="#00ffc3" />
                  <stop offset="0.09090909090909091" stop-color="#00fad9" />
                  <stop offset="0.18181818181818182" stop-color="#00f4f0" />
                  <stop offset="0.2727272727272727" stop-color="#00eeff" />
                  <stop offset="0.36363636363636365" stop-color="#00e6ff" />
                  <stop offset="0.4545454545454546" stop-color="#00dcff" />
                  <stop offset="0.5454545454545454" stop-color="#00d2ff" />
                  <stop offset="0.6363636363636364" stop-color="#00c5ff" />
                  <stop offset="0.7272727272727273" stop-color="#00b8ff" />
                  <stop offset="0.8181818181818182" stop-color="#6da8ff" />
                  <stop offset="0.9090909090909092" stop-color="#9f97ff" />
                  <stop offset="1" stop-color="#c285ff" />
                </lineargradient>
              </defs>
              <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
              <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
            </svg>
          </a>
        </b>
        <b>
          P
          <a href="" title="Additional Information">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
              <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.93 4.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
            </svg>
          </a>
        </b>
        <b>
          E
          <a href="" title="Go To Shop">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
              <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
            </svg>
          </a>
        </b>
        <b>
          N
          <a href="" title="Send an Email">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
              <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 4.697v4.974A4.491 4.491 0 0 0 12.5 8a4.49 4.49 0 0 0-1.965.45l-.338-.207L16 4.697Z" />
              <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 0 0 1 0v-1h1a.5.5 0 0 0 0-1h-1v-1a.5.5 0 0 0-.5-.5Z" />
            </svg>
          </a>
        </b>
        <b>
          D
          <a href="" title="Facebook">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
            </svg>
          </a>
        </b>
        <b>
          E
          <a href="" title="Instagram">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
            </svg>
          </a>
        </b>
        <b>
          R
          <a href="" title="LinkedIn">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
              <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
            </svg>
          </a>
        </b>
        <b>
          S
          <a href="" title="LinkedIn">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
              <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
            </svg>
          </a>
        </b>
      </h6>
    </figcaption>
  </figure>
  
<div id="nav-bar">
  <input id="nav-toggle" type="checkbox"/>
  <div id="nav-header"><a id="nav-title" target="_blank">Spenders</a>
    <label for="nav-toggle"><span id="nav-toggle-burger"></span></label>
    <hr/>
  </div>
  <div id="nav-content">
    <div class="nav-button"><i class="fas fa-home"></i><span>Pagina Principal</span></div>
    <div class="nav-button"><i class="fas fa-heart"></i><span>Favoritos</span></div>
    <div class="nav-button"><i class="fas fa-game-controller"></i><span>Pinned Items</span></div>
    <hr/>
    <div class="nav-button"><i class="fas fa-shopping-cart"></i><span>Trending</span></div>
    <div class="nav-button"><i class="fas fa-fire"></i><span>Challenges</span></div>
    <div class="nav-button"><i class="fas fa-magic"></i><span>Spark</span></div>
    <hr/>
    <div class="nav-button"><i class="fas fa-gem"></i><span>Codepen Pro</span></div>
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



<div class="container-fluid tm-container-content tm-mt-60">
  <div class="tm-video-item row mb-4" style="margin-left: 320px">
      <h2 class="col-1 tm-text-primary">
          Produtos
      </h2>
  </div>
  
  <div class="row tm-mb-90 tm-gallery">
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
      <div class="borda" style="flex-wrap: wrap">
      <?php
       if ($result->num_rows > 0) {
    // Exibe os resultados
    while ($row = $result->fetch_assoc()) {?>
                <figure class="effect-ming tm-video-item " style="height: 250px; width: 310px;">
                    <?php
                 echo '<img src="data:image/jpeg;base64,' . base64_encode($row["imagem"]) . '" class="img-fluid">'.'" class="img-fluid">';
            ?>
            

              <figcaption class="d-flex  justify-content-center">
                  <h2><?php echo $row['nomeproduto'] ?></h2>
                  <h2 class="tm-text-gray-light"><?php echo $row['precoproduto'] ?></h2>
                  <a href="produto.php?id=<?php echo $row['idproduto'] ?>">View more</a>
              </figcaption>                 
          </figure>
            
        <?php }
} else {
    echo "Nenhum resultado encontrado.";
} ?>
          </div>
      </div>      
  </div> <!-- row -->
</div> <!-- container-fluid, tm-container-content -->
</body>
</html>
