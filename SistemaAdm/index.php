<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="imagens/favicon.ico">

    <title>Area Restrita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="POST" action="valida.php">
        <h2 class="form-signin-heading">Área Restrita</h2>
        <label for="inputEmail" class="sr-only">Usuário</label>
<input type="email" name="txt_usuario" id="inputEmail" class="form-control" placeholder="E-mail do Usuário" required autofocus>
<br>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="txt_senha" id="inputPassword" class="form-control" placeholder="Senha" required><br>
        <button class="btn btn-lg btn-info btn-block" type="submit">Acessar</button>
        
		<p class="text-center text-warning">
    <?php if(isset($_SESSION['tentativa'])){
        echo "Tentativa : ".$_SESSION['tentativa'];
      }?>
</p>
<p class="text-center text-danger">
  
<?php
if (isset($_SESSION['tentativa'>=3])){
  echo "Seu acesso foi bloqueado, otario";
}
?>
</p>
        <p class="text-center text-danger">
			<?php if(isset($_SESSION['loginErro'])){
				echo $_SESSION['loginErro'];
				unset ($_SESSION['loginErro']);
			}?>
		</p>
    
    <p class="text-center text-success">
			<?php if(isset($_SESSION['loginDeslogado'])){
				echo $_SESSION['loginDeslogado'];
				unset ($_SESSION['loginDeslogado']);

			}?>
		</p>
      </form>
    </div> <!-- /container -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>