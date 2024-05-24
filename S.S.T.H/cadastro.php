<?php
session_start();

// Verifica se a mensagem de bloqueio está definida
if (isset($_SESSION['blocked_message'])) {
    echo $_SESSION['blocked_message'];
    unset($_SESSION['blocked_message']); // Limpa a mensagem após exibi-la
}
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
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-xtra-blog.css" rel="stylesheet">
    <link href="css/styleCadastro.css" rel="stylesheet">


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
                    <h6 class="text-center">
                    <?php if (mysqli_num_rows($result1) > 0) {
                while ($row = mysqli_fetch_assoc($result1)) { ?>
                  <?php echo $row['nome'] ?>
                <?php }
              } else {
                echo "Usuário vazio";
              } ?>
                    </h6>
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
            <!-- Search form -->
  

    <div class="container-fluid">
        <main class="tm-main">
            <!-- Search form --> 
	<div class="login-box">
  <h2>Faça seu cadastro e caia de cabeça na estranheza</h2>
  <form action="enviouser.php" method="post">
  <div class="user-box">
      <input type="text" name="nome">
      <label>Nome de usuario</label>
    </div>
    <div class="user-box">
      <input type="email" name="email">
      <label>E-mail</label>
    </div>
    <div class="user-box">
      <input type="password" name="senha">
      <label>Senha</label>
    </div>
    <button type="submit" name="Submit" class="submit_btn">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Cadastrar
</button>
  </form>
</div>
        </main>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/templatemo-script.js"></script>
</body>
</php>