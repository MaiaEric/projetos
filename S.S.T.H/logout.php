<?php
// Inicie a sessão (se já não estiver iniciada)
session_start();

// Destrua todas as variáveis de sessão
session_destroy();

// Redirecione o usuário de volta para a página de login ou outra página de sua escolha
header("Location: index.php");
exit;
?>