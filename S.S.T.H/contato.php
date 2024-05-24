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
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-xtra-blog.css" rel="stylesheet">
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
    <div class="container-fluid">
        <main class="tm-main">
           
            <div class="row tm-row tm-mb-45">
                <div class="col-12">
                    <hr class="tm-hr-primary tm-mb-55">
                    <div class="gmap_canvas"> <!-- Google Map -->
                        <iframe width="100%" height="477" id="gmap_canvas"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3093.9375883238285!2d-43.452585235808904!3d-22.753035160985263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9967a99225f96f%3A0xec20bfc8ff090b46!2sSenac%20Nova%20Igua%C3%A7u!5e0!3m2!1spt-BR!2sbr!4v1693939114811!5m2!1spt-BR!2sbr"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
                </div>                
            </div>
            <div class="row tm-row tm-mb-120">
                <div class="col-12">
                    <h2 class="tm-color-primary tm-post-title tm-mb-60">Contate-nos</h2>
                </div>
                <div class="col-lg-7 tm-contact-left">
                    <form method="POST" action="" class="mb-5 ml-auto mr-0 tm-contact-form">                        
                        <div class="form-group row mb-4">
                            <label for="name" class="col-sm-3 col-form-label text-right tm-color-primary">Nome</label>
                            <div class="col-sm-9">
                                <input disabled class="form-control mr-0 ml-auto" name="name" id="name" type="text" required>                            
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="email" class="col-sm-3 col-form-label text-right tm-color-primary">E-mail</label>
                            <div class="col-sm-9">
                                <input disabled class="form-control mr-0 ml-auto" name="email" id="email" type="email" required>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="subject" class="col-sm-3 col-form-label text-right tm-color-primary">Assunto</label>
                            <div class="col-sm-9">
                                <input disabled class="form-control mr-0 ml-auto" name="subject" id="subject" type="text" required>
                            </div>
                        </div>
                        <div class="form-group row mb-5">
                            <label for="message" class="col-sm-3 col-form-label text-right tm-color-primary">Mensagem</label>
                            <div class="col-sm-9">
                                <textarea disabled class="form-control mr-0 ml-auto" name="message" id="message" rows="8" required></textarea>                                
                            </div>
                        </div>
                        <div class="form-group row text-right">
                            <div class="col-12">
                                <button class="tm-btn tm-btn-primary tm-btn-small">Enviar</button>                        
                            </div>                            
                        </div>                                
                    </form>
                </div>
                <div class="col-lg-5 tm-contact-right">
                    <span class="d-block">
                        Tel:
                        <a href="https://api.whatsapp.com/send?phone=5521979555210&text=Ol%C3%A1,%20bom%20dia/boa%20tarde/boa%20noite!" class="tm-color-gray">(21) 97955-5210</a>
                    </span>
                    <span class="mb-4 d-block">
                        Email:
                        <a href="mailto:info@company.com" class="tm-color-gray">erica36silva@gmail.com</a>
                    </span>
                    <ul class="tm-social-links">
                        <li class="mb-2">
                            <a href="https://www.youtube.com/channel/UC2s3RNfrZ1N_Rd_UPxOBPzA" class="d-flex align-items-center justify-content-center">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="https://www.instagram.com/ericmaia_c_e_silva?igsh=N2FtNG13MTk2ZXJ1" class="d-flex align-items-center justify-content-center mr-0">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>      
            <footer class="row tm-row">
                <div class="col-md-6 col-12 tm-color-gray">
                    Feito por: <a rel="nofollow" target="_parent"
                        class="tm-external-link">Eric Maia</a>
                </div>

            </footer>
        </main>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/templatemo-script.js"></script>
</body>
</php>