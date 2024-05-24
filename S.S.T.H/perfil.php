<?php
session_start();
if(isset($_SESSION['email'])) {
    // Usuário está logado
    $email = $_SESSION['email'];
	header("Location: configuracao.php");
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
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Stranger Stuff That Happens - Perfil</title>
	<link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-xtra-blog.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/login.css">
<!--
    
TemplateMo 553 Xtra Blog

https://templatemo.com/tm-553-xtra-blog

-->
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

	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
			<form class="login" action="login.php" method="post">
  <input type="email" name="email" placeholder="E-mail">
  <input type="password" id="senha" name="senha" placeholder="Senha">
  
  <button type="submit" name="Submit">Login</button> <div style="padding: 10px ;"id="mostrarSenha" type="button" onclick="mostrarOcultarSenha()">mostrar senha</div>					
  <div class="w-full text-center p-t-55">
						<span class="txt2">
							Não é um membro ?
						</span>

						<a href="cadastro.php" class="txt2 bo1">
							Cadastre-se
						</a>
					</div>
</form>
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
    </script>

</body>
</php>