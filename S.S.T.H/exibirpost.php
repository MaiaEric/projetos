<?php
// Conecte-se ao banco de dados
$conexao = mysqli_connect("localhost", "root", "", "ssth");

// Recupere o ID do post da URL
$post_id = $_GET['id'];

// Consulta para obter os detalhes do post
$sql = "SELECT * FROM postagem WHERE idpost = $post_id";
$resultado = mysqli_query($conexao, $sql);

if ($post = mysqli_fetch_assoc($resultado)) {
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
                    <li class="tm-nav-item active"><a href="index.php" class="tm-nav-link">
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
            <div class="row tm-row">
                <div class="col-12">
                    <form method="GET" class="form-inline tm-mb-80 tm-search-form">                
                        <input class="form-control tm-search-input" name="query" type="text" placeholder="Search..." aria-label="Search">
                        <button class="tm-search-button" type="submit">
                            <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                        </button>                                
                    </form>
                </div>                
            </div>            
            <div>

<article class="col-12 col-md-6 tm-post">
                    <div class=>
                        <div>
                            <img style="widht: 200px; height: 200px;" src="<?php echo $post['imagem'] ?>" alt="Image">                            
                        </div>
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title"><?php echo $post['titulo'] ?></h2><br>
                        <h4 class="tm-color-primary"><?php echo $post['categoria'] ?></h4>
                        <p style="color:black">
                    <?php echo $post['mensagem'] ?>
                    </p>
</div>                    
                    <div class="d-flex justify-content-between tm-pt-45">
                        
                        <?php echo $post['nome'] ?>
                        
                        <h5 class="tm-color-primary">Data:<?php echo $post['data'] ?></h5>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
         
                    </div>
                </article>

                <?php } else {
  echo "Post vazio";

}


?>

<script src="js/jquery.min.js"></script>
    <script src="js/templatemo-script.js"></script>
</body>
</php>
    <?php
?>
