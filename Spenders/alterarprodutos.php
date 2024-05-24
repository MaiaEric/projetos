

<!DOCTYPE html>
<html lang="pt-br" >
<head>
  <meta charset="UTF-8">
  <title>Alterar dados do produto</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'><link rel="stylesheet" href="./navbar.css">
   <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="templatemo-style.css">
</head>
<body>
  <video autoplay muted loop id="background-video">
    <source src="Live  Wallpaper 4K Hypnotic Neon Tunnel.mp4" type="video/mp4">
    <!-- Adicione outros formatos de vídeo como alternativas -->
    Your browser does not support the video tag.
</video>

 
  
<div id="nav-bar">
  <input id="nav-toggle" type="checkbox"/>
  <div id="nav-header"><a id="nav-title" target="_blank">Administrattivo da Spenders</a>
    <label for="nav-toggle"><span id="nav-toggle-burger"></span></label>
    <hr/>
  </div>
  <div id="nav-content">
    <div class="nav-button"><i class="fas fa-home"></i><span>Produtos</span></div>
    <div class="nav-button"><i class="fas fa-heart"></i><span>Usuarios</span></div>
    <div class="nav-button"><i class="fas fa-game-controller"></i><span>Mensaggens</span></div>
    <hr/>
    <div class="nav-button"><i class="fas fa-shopping-cart"></i><span>Perdil do ADM</span></div>
    <div id="nav-content-highlight"></div>
  </div>
  <div id="nav-footer">
    <div id="nav-footer-heading">
      <div id="nav-footer-avatar"><img src=""/></div>
      <div id="nav-footer-titlebox"><a id="nav-footer-title" href="">Perfil</a><span id="nav-footer-subtitle">Usuario</span></div>
    </div>
  </div>
</div>
<!-- partial -->


<div class="borda" style="height: auto; width: 560px; margin-right: 20px; margin-top: 50px">
<form class="form" action="atualizarprodutos.php" method="post">
      
      <div class="input-box">
          <label>Nome do produto</label>
          <input type="text" name="nome" placeholder="Digite o nome do produto" required="" >
      </div>
      
      <div class="column">
      
          <div class="input-box">
            <label>Preço</label>
            <input type="text" name="preco" placeholder="Digite o preço" required="" >
          </div>
      
          <div class="input-box">
            <label>Quantidade</label>
            <input type="text" name="quantidade" placeholder="Digite a quantidade do produto" required="">
          </div>
      
      </div>
      
      <div class="input-box">
          <label>Fabricante</label>
          <input type="text" name="fabricante" placeholder="Digite o fabricante" required="" >
      </div>
      <div class="gender-box">
      
        <label>Disponivel</label>
        
        <select name="disponivel" id="disponivel" class="dropdown" required>


<option value="Sim" class="form_select_option">Sim</option>
<option value="Não" class="form_select_option">Não</option>

</select>

<div class="input-box">
            <label>Informe o ID do Produto para confirmar</label>
            <input type="text" name="idproduto" required="" >
          </div>

      </div><br>
    

      <button>Enviar Dados</button>
      
      <div class="lado-B" id="imagem" name="imagem">
            <div class="molde">
            <form method="post" enctype="multipart/form-data">
            <label>Selecione uma imagem</label><br>
        <input type="file" name="imagem" id="imagem">
    </form>
            </div>
        </div>
    </form>

</div><!--container-form-->
</div>

<style>

.container-form {

position: relative;
max-width: 500px;
width: 100%;
margin: auto;
background: #FFF;
padding: 25px;
border-radius: 8px;
box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);

}

.container-form .title-form {
font-size: 1.2em;
color: #000;
font-weight: 600;
text-align: center;
}

.container-form .form {
margin-top: 15px;
}

.form .input-box {
width: 100%;
margin-top: 10px;
}

.input-box label {
color: #000;
}

.form :where(.input-box input, .select-box) {

position: relative;
height: 35px;
width: 100%;
outline: none;
font-size: 1rem;
color: #333;
margin-top: 5px;
border: 1px solid #A4E3F0;
border-radius: 6px;
padding: 0 15px;
background: #E9F8FB;

}

.input-box input:focus {
box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
}

.form :where(.input-box textarea) {

position: relative;
height: 100px;
width: 100%;
outline: none;
font-size: 1rem;
color: #333;
margin-top: 5px;
border: 1px solid #A4E3F0;
border-radius: 6px;
padding: 10px;
background: #E9F8FB;

}

.input-box textarea:focus {
box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
}

.form .column {
display: flex;
column-gap: 15px;
}

.form .gender-box {
margin-top: 10px;
}

.form :where(.gender-option, .gender) {
display: flex;
align-items: center;
column-gap: 50px;
flex-wrap: wrap;
}

.form .gender {
column-gap: 5px;
}

.gender input {

accent-color: #007CFF;
float: left;
width: 15px;
height: 15px;

}

.form :where(.gender input,.gender textarea, .gender label) {
cursor: pointer;
}

.gender label {
color: #000;
}

.address :where(input, .select-box) {
margin-top: 10px;
}

.select-box select {
height: 100%;
width: 100%;
outline: none;
border: none;
color: #808080;
font-size: 1em;
background: #e9f8fb;
}

.form button {
height: 40px;
width: 100%;
color: #ffffff;
font-size: 1rem;
font-weight: 400;
margin-top: 15px;
border: none;
border-radius: 6px;
cursor: pointer;
transition: all 0.2s ease;
background: #007cff;
}

.form button:hover {
background: #28D1F2;
}

/*Anti-span*/
.naoexibir { display:none; }
</style>
</body>
</html>
