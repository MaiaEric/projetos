<?php

session_start();
require_once("conexao.php");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ssth";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Certifique-se de tratar a entrada do usuário para evitar injeção de SQL
$idUsuario = isset($_SESSION['id']) ? $_SESSION['id'] : 0;
$idUsuario = mysqli_real_escape_string($conn, $idUsuario);

$sql1 = "SELECT * FROM usuario WHERE idusuario = $idUsuario";

$result1 = mysqli_query($conn, $sql1);

?>

<!DOCTYPE php>
<php lang="pt-br">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stranger Stuff That Happens</title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!-- https://fonts.google.com/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-xtra-blog.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link href="css/config.css" rel="stylesheet">
  </head>

  <body>
    <header class="tm-header" id="tm-header">
      <div class="tm-header-wrapper">
        <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="tm-site-header">
          <div class="mb-3 mx-auto tm-site-logo"><i class="fas fa-times fa-user"></i></div>
          <h1 class="text-center">Stranger Stuff That Happens</h1>
        </div>
        <nav class="tm-nav" id="tm-nav">
          <ul>
            <li class="tm-nav-item"><a href="index.php" class="tm-nav-link">
                <i class="fas fa-home"></i>
                Pagina Inicial
              </a></li>
            <li class="tm-nav-item"><a href="post.php" class="tm-nav-link">
                <i class="fas fa-pen"></i>
                Postagem
              </a></li>
            <li class="tm-nav-item"><a href="perfil.php" class="tm-nav-link">
                <i class="fas fa-users"></i>
                Perfil
              </a></li>
            <li class="tm-nav-item"><a href="contato.php" class="tm-nav-link">
                <i class="far fa-comments"></i>
                Contate-nos
              </a></li>
          </ul>
        </nav>
        <div class="tm-mb-65">
          <a rel="nofollow" href="" class="tm-social-link">
            <i class="fab fa-instagram tm-social-icon"></i>
          </a>
        </div>
        <p class="tm-mb-80 pr-5 text-white">
          Descrição do Site
        </p>
      </div>
    </header>
    <div class="container-fluid">
      <main class="tm-main">
        <div class="container">
          <!-- Hover #2 -->
          <div class="box-2">
            <a href="logout.php">
              <div class="btn btn-two">
                Sair
              </div>
            </a>
          </div>

          <!-- Botão para abrir o modal -->
          <button onclick="openModal()" class="button-36" role="button">Visualizar Informações</button><br><br>
          <button onclick="window.location.href='seusposts.php'" class="button-36" role="button">Editar Seus posts</button><br><br>
          <button onclick="openModal1()" class="button-36" role="button">Editar Informações</button>
          <!-- O modal -->
          <div id="myModal" class="modal">
            <div class="modal-container">
              <span class="close" onclick="closeModal()">&times;</span>

              <?php if (mysqli_num_rows($result1) > 0) {
                while ($row = mysqli_fetch_assoc($result1)) { ?>

                  <h3>Nome de Usuario</h3>
                  <?php echo $row['nome'] ?>

                  <h3>Email do Usuario</h3>
                  <?php echo $row['email'] ?>

                  <h3>Senha do Usuario</h3>
                  <?php echo $row['senha'] ?>

                <?php }
              } else {
                echo "Usuário vazio";
              } ?>

            </div>
          </div>

          <!-- O modal -->
          <div id="myModal1" class="modal">

            <!-- Conteúdo do modal -->
            <div class="modal-container">
              <div class="limiter">
                <div class="container-login100">
                  <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
                    <form class="login" action="atualizarperfil.php" method="post">
                      <input type="text" name="nome" placeholder="Seu Nome de usuario">
                      <input type="email" name="novo_email" placeholder="Novo email">
                      <input type="password" id="senha" name="nova_senha" placeholder="Nova Senha">

                      <button type="submit" name="Submit">Editar</button>
                      <div style="padding: 10px ;" id="mostrarSenha" type="button" onclick="mostrarOcultarSenha()">
                        mostrar senha</div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    </main>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/templatemo-script.js"></script>

    <script>
      function mostrarOcultarSenha() {
        var senhaInput = document.getElementById("senha");
        var mostrarSenhaButton = document.getElementById("mostrarSenha");

        if (senhaInput.type === "password") {
          senhaInput.type = "text";
          mostrarSenhaButton.textContent = "Ocultar Senha";
        } else {
          senhaInput.type = "password";
          mostrarSenhaButton.textContent = "Mostrar Senha";
        }
      }

      // Função para abrir o modal
      function openModal() {
        document.getElementById("myModal").style.display = "block";
      }

      // Função para fechar o modal
      function closeModal() {
        document.getElementById("myModal").style.display = "none";
      }

      // Fecha o modal ao clicar fora da área do conteúdo
      window.onclick = function (event) {
        var modal = document.getElementById("myModal");
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }

      /*Edição de dados*/

      // Função para abrir o modal
      function openModal1() {
        document.getElementById("myModal1").style.display = "block";
      }

      // Fecha o modal ao clicar fora da área do conteúdo
      window.onclick = function (event) {
        var modal = document.getElementById("myModal1");
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }
    </script>

    <style>
      /* Estilos para o modal */
      .modal {
        display: none;
        /* Inicialmente oculto */
        position: fixed;
        /* Fixa a posição em relação à janela de visualização */
        z-index: 1;
        /* Coloca o modal acima de todo o conteúdo */
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        /* Adiciona rolagem quando necessário */
        background-color: rgba(0, 0, 0, 0.4);
        /* Fundo preto com transparência */
      }



      /* Estilos para o container do conteúdo */
      .modal-container {
        animation-name: zoomIn;
        /* Adiciona a animação de zoom in */
        animation-duration: 0.6s;

        width: 400px;
        /* Largura do container */
        height: 400px;
        /* Altura do container */
        margin: 15% auto;
        /* Centraliza o container na página */
        padding: 20px;
        /* Espaçamento interno */
        border: 1px solid #ddd;
        /* Borda para visualização */
        border-radius: 10px;
        /* Bordas arredondadas */
        background-color: #fff;
        /* Fundo branco */
      }

      /* Animação de zoom in */
      @keyframes zoomIn {
        from {
          transform: scale(0);
        }

        to {
          transform: scale(1);
        }
      }

      .button-36 {
        background-image: linear-gradient(92.88deg, #455EB5 9.16%, #5643CC 43.89%, #673FD7 64.72%);
        border-radius: 8px;
        border-style: none;
        box-sizing: border-box;
        color: #FFFFFF;
        cursor: pointer;
        flex-shrink: 0;
        font-family: "Inter UI", "SF Pro Display", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
        font-size: 16px;
        font-weight: 500;
        height: 4rem;
        padding: 0 1.6rem;
        text-align: center;
        text-shadow: rgba(0, 0, 0, 0.25) 0 3px 8px;
        transition: all .5s;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
      }

      .button-36:hover {
        box-shadow: rgba(80, 63, 205, 0.5) 0 1px 30px;
        transition-duration: .1s;
      }

      @media (min-width: 768px) {
        .button-36 {
          padding: 0 2.6rem;
        }
      }

      .btn-two {
        color: #FFF;
        transition: all 0.5s;
        position: relative;
      }

      .btn-two span {
        z-index: 1;
        width: 10%;
        height: 10%;
        margin-left: 520px;
      }

      .btn-two::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 20%;
        height: 20%;
        z-index: 1;
        transition: all 0.5s;
        border: 1px solid rgb(255, 0, 0);
        background-color: rgb(255, 0, 0);
        margin-left: 220px;
      }

      .btn-two::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 20%;
        height: 20%;
        z-index: 1;
        transition: all 0.5s;
        border: 1px solid rgb(255, 0, 0);
        background-color: rgb(255, 0, 0);
        margin-left: 220px;
      }

      .btn-two:hover::before {
        transform: rotate(-45deg);
        background-color: rgb(255, 255, 255);
      }

      .btn-two:hover::after {
        transform: rotate(45deg);
        background-color: rgb(255, 255, 255);
      }
    </style>

  </body>
</php>