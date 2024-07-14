<?php
include "sys/conexao.php";
cantLog($__EMAIL__);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='style/login.css'>
    <script src="js/func.js"></script>
    <title>Logar</title>
    <script src="js/func.js"></script>
</head>
<body>
    <div id='main'>
        <h1>Cadastrar</h1>
        <form action="javascript:void(0)">
            <input type="text" id="nome" placeholder="Nome para cadastro">
            <input type="text" id="email" placeholder="Email para cadastro">
            <input type="password" id="senha" placeholder="Senha">
            <button onclick="addNewData('user/register', {nome: nome.value, email: email.value, senha: senha.value})">Enviar</button>
        </form>
        <a href="./logar.php">Logar</a>
    </div>
</body>
</html>