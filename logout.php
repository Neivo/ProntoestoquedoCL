<?php
session_start();
session_destroy();
header("Location: logar.php"); // Redireciona para a página de login
exit;
?>
