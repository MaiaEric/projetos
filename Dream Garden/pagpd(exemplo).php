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