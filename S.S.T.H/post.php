<?php
session_start();
if(isset($_SESSION['email'])) {
    // Usuário está logado
    $email = $_SESSION['email'];
} else {
    // Usuário não está logado, redirecionar para a página de login
    header("Location: bloqueio.php");
    exit;
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
    <title>Stranger Stuff That Happens - Postagem</title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!-- https://fonts.google.com/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-xtra-blog.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

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

            <div class="container_form">

                <h1>Faça sua postagem aqui</h1>

                <form class="form" action="enviopost.php" method="post">

                    <div class="form_grupo">
                        <label for="nome" class="form_label">Nome</label>
                        <input type="text" name="nome" class="form_input" id="nome" placeholder="Nome" required>
                    </div>

                    <div class="form_grupo">
                        <label for="e-mail" class="form_label">Titulo</label>
                        <input type="text" name="titulo" class="form_input" id="email" placeholder="Titulo" required>
                    </div>

                    <div class="form_grupo">
                        <label for="datanascimento" class="form_label">Data do Acontecimento</label>
                        <input type="text" id="data" name="data" placeholder="Data do Acontecimento" maxlength="8"
                            class="form_input" id="data" oninput="mascara(this,'data')" required>
                    </div>

                    <div class="form_grupo">

                        <label for="categoria" class="text">Categoria</label> <br> <br>
                        <select name="categoria" id="categoria" class="dropdown" required>

                            <option selected disabled class="form_select_option" value="">Selecione um Categoria
                            </option>
                            <option value="Sobrenatural" class="form_select_option">Sobrenatural</option>
                            <option value="Bizarro" class="form_select_option">Bizarro</option>
                            <option value="Cripitidio" class="form_select_option">Cripitidio</option>
                            <option value="Aleatorio" class="form_select_option">Aleatorio</option>

                        </select>
                        <br><br>

                        <select id="imagem" class="dropdown" name="imagem">
                            <option selected disabled class="form_select_option" value="">Selecione uma Imagem para seu post
                            </option>
                            <option value="Sobrenatural.jpg" class="form_select_option">Sobrenatural</option>
                            <option value="Bizarro.jpg" class="form_select_option">Bizarro</option>
                            <option value="Cripitidio.jpg" class="form_select_option">Cripitidio</option>
                            <option value="Aleatorio.webp" class="form_select_option">Aleatorio</option>
<br>
                            
                        </select>
                        <img id="imagemExibida" src="" style="height: 200px ; padding: 50px;"  >
                    </div>


                    <div class="form_message">

                        <label for="messagem" class="form_message_label"> Digite aqui sua mensagem:</label>
                        <textarea name="mensagem" id="messagem" cols="30" rows="3" class="form_input message_input"
                            required></textarea>

                    </div>

                    <div class="submit">

                        <input type="hidden" name="acao" value="enviar">
                        <button type="submit" name="Submit" class="submit_btn">Enviar</button>

                    </div>
                </form>

            </div>
            <!--container_form-->

            <!--Finaliza Formulário-->
            <footer class="row tm-row">
                <div class="col-md-6 col-12 tm-color-gray">
                    Feito por: <a rel="nofollow" target="_parent"
                        class="tm-external-link">Eric Maia</a>
                </div>

            </footer>
        </main>
    </div>
    <script>
        function mascara(input, tipo) {
     
            var valor = input.value.replace(/\D/g, '');

            if (tipo === 'data' && valor.length <= 8) {
                valor = valor.replace(/(\d{2})(\d{2})(\d{4})/, '$1/$2/$3');

            }
            input.value = valor;

        } 

    // Obtém o elemento select e a imagem exibida
    const imagem = document.getElementById('imagem');
    const imagemExibida = document.getElementById('imagemExibida');

    // Adiciona um ouvinte de evento para detectar quando a opção é alterada
    imagem.addEventListener('change', function() {
        // Obtém o valor da opção selecionada
        const opcaoSelecionada = imagem.value;

        // Define o atributo 'src' da imagem para o valor da opção selecionada
        imagemExibida.src = opcaoSelecionada;
    });

    // Define a imagem inicial com base na opção padrão selecionada
    const opcaoInicial = imagem.value;
    imagemExibida.src = no;
</script>
    <script src="js/jquery.min.js"></script>
    <script src="./js/templatemo-script.js"></script>
</body>

</php>