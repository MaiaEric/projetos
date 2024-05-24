<?php
// Conecte-se ao banco de dados
$conexao = mysqli_connect("localhost", "root", "", "spenders");

// Recupere o ID do post da URL
$post_id = $_GET['id'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "spenders";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Consulta para obter os detalhes do post
$sql = "SELECT * FROM produtos WHERE idproduto = $post_id";
$resultado = mysqli_query($conexao, $sql);
$resultado2 = $conn->query("SELECT idproduto, nomeproduto, precoproduto, descricaoproduto, detalhesproduto, fabricanteproduto, imagem FROM produtos ORDER BY idproduto DESC LIMIT 1");

if ($post = mysqli_fetch_assoc($resultado)) {
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spenders - </title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="templatemo-style.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'><link rel="stylesheet" href="./navbar.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"><link rel="stylesheet" href="./logo.css">

<!--
    
TemplateMo 556 Catalog-Z

https://templatemo.com/tm-556-catalog-z

-->


</head>
<body>

    <div class="container-fluid tm-container-content tm-mt-60" >
        <div class="row mb-4">
            <h2 class="col-12 tm-text-primary"> <?php echo $post['nomeproduto'] ?></h2>
        </div>
        <?php
      if ($resultado2->num_rows > 0) {
    $row = $resultado2->fetch_assoc();
    $id = $row['idproduto'];
    $nome_imagem = $post['nomeproduto'];
    $dados_imagem = $post['imagem'];
    ?>
        <div class="row tm-mb-90">            
            <div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
            <?php
                  echo '<img src="data:image/jpeg;base64,' . base64_encode($dados_imagem) . '" alt="' . $nome_imagem . '" class="img-fluid">';
                } else {
                echo "Nenhuma imagem encontrada.";
            }
            ?>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                <div class="tm-bg-gray tm-video-details">
                    <p class="mb-4"> <?php echo $post['descricaoproduto'] ?></p>
                    <div class="text-center mb-5">
                        <a href="#" class="btn btn-primary tm-btn-big">Comprar</a>
                    </div>                    
                    <div class="mb-4 d-flex flex-wrap">
                        <div class="mr-4 mb-2">
                            <span class="tm-text-gray-dark">Detalhes: <?php echo $post['detalhesproduto'] ?></span><span class="tm-text-primary"></span>
                        </div>
                        <div class="mr-4 mb-2">
                            <span class="tm-text-gray-dark">Fabricante: <?php echo $post['fabricanteproduto'] ?></span><span class="tm-text-primary"></span>
                        </div>
                    </div>
                    <div class="mb-4">
                        <h3 class="tm-text-gray-dark mb-3"> Preço: <?php echo $post['precoproduto'] ?></h3>
                       </div>

                </div>
            </div>
        </div>

       
    </div> <!-- container-fluid, tm-container-content -->

    <?php } else {
  echo "Produto Vazio";

}


?>

    <footer class="tm-bg-gray pt-5 pb-3 tm-text-gray tm-footer">
        <div class="container-fluid tm-container-small">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12 px-5 mb-5">
                    <h3 class="tm-text-primary mb-4 tm-footer-title">Sobre</h3>
                    <p></p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-5 mb-5">
                    <h3 class="tm-text-primary mb-4 tm-footer-title">Nossas Redes Sociais</h3>
                    <ul class="tm-footer-links pl-0">
                        <li class="mb-2"><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Our Company</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-5 mb-5">
                    <ul class="tm-social-links d-flex justify-content-end pl-0 mb-5">
                        <li class="mb-2"><a href="https://facebook.com"></a></li>
                        <li class="mb-2"><a href="https://twitter.com"><i class="fab fa-twitter"></i></a></li>
                        <li class="mb-2"><a href="https://instagram.com"><i class="fab fa-instagram"></i></a></li>
                        <li class="mb-2"><a href="https://pinterest.com"><i class="fab fa-pinterest"></i></a></li>
                    </ul>
                    <a href="#" class="tm-text-gray text-right d-block mb-2">Terms of Use</a>
                    <a href="#" class="tm-text-gray text-right d-block">Privacy Policy</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-7 col-12 px-5 mb-3">
                    Copyright 2020 Catalog-Z Company. All rights reserved.
                </div>
                <div class="col-lg-4 col-md-5 col-12 px-5 text-right">
                    Designed by <a href="https://templatemo.com" class="tm-text-gray" rel="sponsored" target="_parent">TemplateMo</a>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="js/plugins.js"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>
</body>
</html>