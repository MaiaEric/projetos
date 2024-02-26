<link rel="stylesheet" type="text/css" href="css/style.css">

<div class="container">
  <div class="brand-logo"></div>
  <div class="brand-title">formulario de serviço</div>
  <form method="post" action="envio.php">
  <div class="inputs">
  <form method="post" action="envio.php">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        
        <label for="modelo">Modelo do seu veiculo:</label>
        <input id="modelo" name="modelo" required></input>
        
        <label for="ano">Ano</label>
        <input type="text" id="ano" name="ano" required>

        <label for="celular">Nº de celular</label>
        <input type="text" id="celular" name="celular" required>
        
        <button type="submit" value="Enviar Mensagem no WhatsApp">Enviar</buttton>
    </form>
  </div>
  <a href="index.php">Voltar para o Inicio</a>
</div>