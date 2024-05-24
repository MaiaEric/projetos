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

$sql = "SELECT * FROM postagem";
$sql1 = "SELECT * FROM usuario WHERE idusuario = $idUsuario";

$result = mysqli_query($conn, $sql);
$result1 = mysqli_query($conn, $sql1);

/*==================================================================*/

// Inicie a sessão (se já não estiver iniciada)


// Verifique se a variável de mensagem está definida na sessão
if (isset($_SESSION['mensagem'])) {
    echo '<div class="mensagem" style="margin-left:700px">' . $_SESSION['mensagem'] . '</div>';

    // Remova a mensagem da sessão para que ela não seja exibida novamente
    unset($_SESSION['mensagem']);
}


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

                <div class="row tm-row">

                    <?php if (mysqli_num_rows($result) > 0) {

                        while ($row = mysqli_fetch_assoc($result)) { ?>

                            <article class="col-12 col-md-6 tm-post">
                                <a href="exibirpost.php?id=<?php echo $row['idpost'] ?>"
                                    class="effect-lily tm-post-link tm-pt-60">
                                    <div class="tm-post-link-inner">
                                        <img src=<?php echo $row['imagem'] ?> alt="Image" class="img-fluid">
                                    </div>
                                    <h3 class="position-absolute tm-new-badge" style="background-color: rgb(0, 204, 102)">
                                        Novidade</h3>
                                    <h2 class="tm-pt-30 tm-color-primary tm-post-title">
                                        <?php echo $row['titulo'] ?>
                                        </td>
                                    </h2>
                                    <p class="tm-pt-30">
                                        <p id="textoParcial">
                                            <?php
                                            $mensagem = $row['mensagem']; // Suponha que $row['mensagem'] contenha o texto.
                                            $comprimentoCorte = 125; // Defina o comprimento de corte desejado.
                                            $textoCortado = substr($mensagem, 0, $comprimentoCorte);

                                            // Verifique se o texto original é mais longo do que o texto cortado
                                            if (strlen($mensagem) > $comprimentoCorte) {
                                                $textoCortado .= "..."; // Adicione reticências no final
                                            }

                                            echo $textoCortado;
                                            ?>
                                        </p>
                                    </p>
                                </a>
                                <div class="d-flex justify-content-between tm-pt-45">
                                    <h4 class="tm-color-primary">
                                        <?php echo $row['categoria'] ?>
                                    </h4>
                                    <?php echo $row['nome'] ?>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between">

                                    <h5 class="tm-color-primary">Data:
                                        <?php echo $row['data'] ?>
                                    </h5>

                                </div>
                            </article>

                        <?php }

                    } else {
                        echo "Post vazio";

                    }

                    mysqli_close($conn);
                    ?>



                </div>
                <div class="row tm-row tm-mt-100 tm-mb-75">
                    <div class="tm-prev-next-wrapper">
                        <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next disabled tm-mr-20">Anterior</a>
                        <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next">Proximo</a>
                    </div>
                    <div class="tm-paging-wrapper">
                        <h5 class="d-inline-block mr-3">Pagina</h5>
                        <nav class="tm-paging-nav d-inline-block">
                            <ul>
                                <li class="tm-paging-item active">
                                    <a href="#" class="mb-2 tm-btn tm-paging-link">1</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <footer class="row tm-row">
                    <hr class="col-12">
                    <div class="col-md-6 col-12 tm-color-gray">
                        Feito por: <a rel="nofollow" class="tm-external-link">Eric Maia</a>
                    </div>

                </footer>
            </main>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/templatemo-script.js"></script>



    </body>
</php>