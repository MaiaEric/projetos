<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $modelo = $_POST["modelo"];
    $ano = $_POST["ano"];
    $celular = $_POST["celular"];
    $numero = "552196790521";
    
    $mensagemWhatsApp = "Olá, Marccos. Me chamo $nome e gostaria de fazer um seguro para o meu veículo, o modelo é $modelo, do ano $ano. Meu número para contato é $celular.";;
    
    // Crie o link do WhatsApp com os parâmetros apropriados
    $linkWhatsApp = "https://api.whatsapp.com/send?phone=$numero&text=" . urlencode($mensagemWhatsApp);
    
    // Redirecione o usuário para o link do WhatsApp
    header("Location: $linkWhatsApp");
    exit;
}
?>
