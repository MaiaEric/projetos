<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Compra Finalizada - Dream Garden</title>
    <link rel="icon" href="img/foto1.jpeg">
    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<div id="navlist">
    <a href="index.php" style="text-decoration:none;color: white;font-family: times new roman;">Home</a>
    </div>
<div class="text-center container" style="width:80%">
    <img src="img/13_Sem_Título_20221018133625-removebg-preview.png" class="rounded" style="border-radius:25px; width:100%;height:100%">
</div>
<div style="margin-top: 30px;" style="max-width: 20px;">
    </head>
    <body style="background-image: url(img/planodefundo.webp); color: black; font-size: 20px;">

        
        <?php
$charset = mysql_set_charset('utf8');
error_reporting(0);
// Conexão com o banco de dados
$conn = @mysql_connect("localhost", "root", "") or die ("Problemas na conexão.");
$db = @mysql_select_db("sgl", $conn) or die ("Problemas na conexão");

// Seleciona todos os usuários
$sql = mysql_query("SELECT * FROM produto");
// Exibe as informações de cada produto

    $conexao = mysqli_connect("127.0.0.1", "root", "", "sgl");
    $dados = mysqli_query($conexao, "SELECT * FROM produto");


      //conexão com o banco de dados
        mysql_connect("localhost","root","");
        mysql_select_db("sgl" );

    //verifica a página atual caso seja informada na URL, senão atribui como 1ª página
        $pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;

    //seleciona todos os itens da tabela
        $cmd = "select * from produto";
        $produto = mysql_query($cmd);

    //conta o total de itens
        $total = mysql_num_rows($produto);

    //seta a quantidade de itens por página, neste caso, 2 itens
        $registros = 9;

    //calcula o número de páginas arredondando o resultado para cima
        $numPaginas = ceil($total/$registros);

    //variavel para calcular o início da visualização com base na página atual
        $inicio = ($registros*$pagina)-$registros;

    //seleciona os itens por página
        $cmd = "select * from produto limit $inicio,$registros";
        $produtos = mysqli_query($cmd);
        $total = mysqli_num_rows($produto);

  while ($produto = mysqli_fetch_array($dados)):

?>

    <div class="container">
    <div class="box">

    <!-- Exibe Imagem da array por ID -->
    <figcaption> <img src="MenuFuncionarioLogado/CadastraProduto/fotos/<?php echo $produto['foto']?>" /> </figcaption>

    <!-- Exibe Nome do produto -->
    <figcaption>Nome: <?= $produto["nome"] ?> </figcaption>

    <!-- Exibe Nome do produto -->
    <figcaption>Preço: <?= $produto["preco"] ?></figcaption>

    <!-- Exibe Descrição do produto -->
    <figcaption>Descrição do Produto: <?= $produto["descricao"] ?></figcaption>

    <!-- Exibe Código do produto -->
    <figcaption>Código do Produto: <?= $produto["id"] ?></figcaption>

    <!-- início Botão -->
    <a href="PreviaCompra/carrinho.php?acao=add&id=<?= $produto["id"] ?>">
      <figure>
        <img src="img/Faça_Pedido1.gif">
      </figure>
    </a>
    <!-- fim Botão -->

    </div>
    </div>

    <?php

    //exibe a paginação
        for($i = 1; $i < $numPaginas + 1; $i++) 
        {
             echo "<a href='Cardapio.php?pagina=$i'>".$i."</a> ";
        }
        ?>

  <?php endwhile;?>


            <div class="footer" style="background-color:black; height: 170px; padding: 20px; text-align: center; ">
        <a href="https://goo.gl/maps/HJVVsoCJbpBV1nmd8" target="blank" style="text-decoration: none; color: white;font-family: trebuchet ms;"><p style="color:white; font-family: trebuchet-ms;">Nova Iguaçu - RJ <br>
    11-111-111<br></a></p></b>
    <a href="https://instagram.com/dreamgarden204?igshid=YmMyMTA2M2Y="><img src="icon/insta1.png" align="center" style="margin-right: 3px;"></a> 
    <a href="https://twitter.com/RichardFilho9?t=fyY6hoOAGm2snOJnjjkilg&s=09"><img src="icon/twitter.png" align="center" style="margin-right: 3px;"></a> 
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
 </div>       
</body>
</html>