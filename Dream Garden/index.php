<?php
 session_start();
 ?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - Dream Garden</title>
    <link rel="icon" href="img/foto1.jpeg">
    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        
</head>
<header>
   <a href="login.html" style="text-decoration:none"><img src="icon/login1.png" width="30px" height="30px" align="right"></a>
<p class="p-2"></p> 
<div class="container text-center" style="width:80%">

<?php 
    if(isset($_SESSION['email'])){
    echo "Seja Bem vindo,". $_SESSION['nomeusuario'];
    }
?>

</div>
</header>
<body style="background-image: url('img/planodefundo.webp');">
<script src="script.js"></script>
    <img src="img/logo.png" style="width:55%;height:65%; align-content: center; margin-left: 25%;" >
<ul id="navlist"class="nav justify-content-center">
   <li class="nav-item">
    <a class="nav-link active" href="index.php" style="color: white;">Home</a>
  </li><br>
  <li class="nav-item">
    <a class="nav-link" href="galeria.html" style="color: white;">Galeria</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="quemsomos.html" style="color: white;">Quem somos</a>
  </li>
  <li class="nav-item">
    <a type="button" style="color: white;" data-bs-toggle="modal" data-bs-target="#exampleModal">Cadastro</a>
    </ul>
 <br>
<br>
<br>
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div style="background-color: black; color:white;">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">CADASTRO</h1>  
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>
                    <div class="modal-body" style="background-image: url('img/planodefundo.webp');">
                        <div class="modal-body">

<!--INÍCIO DO FORMULÁRIO-->
                            <form name="formCadastro" action="Envio.php" method="POST" id="formRegistro">
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="inputEmail4"><b>E-mail</b></label>

                                        <input type="email" name="emailCliente" class="form-control" id="inputEmail4" placeholder="E-mail">

                                    </div>
                                    <p class="p-0.5"></p>
                                    <div class="form-group">
                                        <label for="inputEmail4"><b>Nome</b></label>

                                        <input type="text" name="nomeCliente" class="form-control" id="inputEmail4" placeholder="Nome completo">

                                    </div>
                                        <p class="p-0.5"></p>
                                    <div class="form-group">
                                        <label for="inputPassword4"><b>Senha</b></label>

                                        <input type="password" name="senhaCliente" class="form-control" id="inputPassword4"
                                            placeholder="Senha">

                                    </div>
                                </div>
                                <p class="p-0.5"></p>    
                                <div class="form-group">
                                    <label for="inputAddress"><b>Endereço</b></label>

                                    <input type="text" name="enderecoCliente" class="form-control" id="inputAddress"
                                        placeholder="Endereço">

                                </div>
                                <p class="p-0.5"></p>
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="inputCity"><b>Cidade</b></label>

                                        <input type="text" name="cidadeCliente" class="form-control" id="inputCity" placeholder="Cidade">

                                    </div>
                                    <p class="p-0.5"></p>
                                    <div class="form-group">
                                        <label for="inputCEP"><b>CEP</b></label>

                                        <input type="text" name="cepCliente" class="form-control" placeholder="Codigo Postal" oninput="cep(this)" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputCEP"><b>CPF</b></label>
                                        <input type="text" name="cpfCliente" placeholder="Insira seu CPF" class="form-control" oninput="cpf(this)" required>

                                    </div>
                                </div>
                                <p class="p-0.5"></p>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">
                                            Salvar informações
                                        </label>
                                    </div>
                                </div>
                            
                                <button type="button" class="botao" data-bs-dismiss="modal">Fechar</button>
                                <button type="submit" class="botao">Cadastrar</button>
                            </form>
                        </div>
                    </div>
                    <div style="background-color: black;">
                        
                        <div class="modal-footer">
                            <p style="opacity:0%">-</p>
                        </div>
                </div>
                </div>
            </div>
    </div>        

<div class="container col-md-12 border border-light rounded-2 text-center text-break">
    <p class="p-2"></p>
    <br>
    <br>
<div style="margin-left:5px;" class="col-md-12">
    <div class="card-group">
<div class="card" style="background:none; border: none; margin-right: 10px;">
  <img class="card-img-top" src="img/aniversario_page.webp" alt="" style="border-radius: 10px;">
    <div class="card-img-overlay">
    <a href="pagamento15anos.html" style="text-decoration: none;"><h5 class="card-title text-white text-center">15 ANOS</h5></a>
</div>

  </div>
 <div class="card" style="background:none; border: none; margin-right: 10px;">
    <img class="card-img-top" src="img/casamento.webp" alt="" style="border-radius: 10px;">
    <div class="card-img-overlay">
  <a href="pagamentoCasamento.html" style="text-decoration: none;"><h5 class="card-title text-white text-center">CASAMENTOS</h5></a>
  </div>

  </div>
  <div class="card" style="background:none; border:none; margin-right: 10px;">
    <img class="card-img-top" src="img/festinha.webp" alt="" style="border-radius: 10px;">
    <div class="card-img-overlay">
    <a href="pagamentoAniversario.html" style="text-decoration: none;"><h5 class="card-title text-white text-center">ANIVERSÁRIOS INFANTIS</h5></a>
</div>
</div>
 </div>
</div>
 <p class="p-0.5"></p>
 <div  class="container col-12 text-center text-break" >
   <div class="col-md-12">
    <div class="card-group">
       <div class="card" style="background:none; border: none; margin-right: 10px;">
  <img class="card-img" src="img/casamento2.webp" alt="" style="border-radius: 10px;">

    <div class="card-img-overlay">
    <a href="pagamentoFloresta.html" style="text-decoration: none;"><h5 class="card-title text-white text-center">FESTAS EM GERAL</h5></a>
     
</div>
  </div>
  <div class="card" style="background:none; border: none; margin-right: 10px;">
    <img class="card-img" src="img/diadasbruxas.webp" alt="" style="border-radius: 10px;">
   
    <div class="card-img-overlay">
    <a href="pagamentoHallowen.html" style="text-decoration: none;"><h5 class="card-title text-white text-center">FESTAS TEMÁTICAS</h5></a>

  </div>

  </div>
  <div class="card" style="background:none; border: none;">
   <img class="card-img" src="img/natal.webp" alt="" style="border-radius: 10px;">
    <div class="card-img-overlay">
    <a href="pagamentoNatal.html" style="text-decoration: none;"><h5 class="card-title text-white text-center">NATAL</h5></a>
</div>

</div>
</div>
</div>
</div>
<p class="p-0.5"></p>
</div>
</div>
</div>
</div>
</div>
<footer id="rodapeprincipal">
<div style="margin-block-end:10%;"></div>
<br>
<a href="https://goo.gl/maps/HJVVsoCJbpBV1nmd8" target="blank" style="text-decoration: none; color: white;font-family: trebuchet ms;"><p style="color:white;">
</b>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235522.8923656957!2d-43.497125!3d-22.726561550000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x995d694889f955%3A0x23ff502568217834!2sNova%20Igua%C3%A7u%2C%20RJ!5e0!3m2!1spt-BR!2sbr!4v1675183413797!5m2!1spt-BR!2sbr" width="80px" height="50px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" align="center"></iframe>
<p>Localização</p>
<div>
<a href="https://instagram.com/dreamgarden204?igshid=YmMyMTA2M2Y="><img src="icon/insta1.png" align="center" style="margin-right: 3px;"></a> 
 <a href="https://twitter.com/RichardFilho9?t=fyY6hoOAGm2snOJnjjkilg&s=09"><img src="icon/twitter.png" align="center" style="margin-right: 3px;"></a>   
</div>
 <br>
 <br>                                                                                 
</div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>        
</div>

</body>
</html>
