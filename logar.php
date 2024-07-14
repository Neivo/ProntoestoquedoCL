<?php
include "sys/conexao.php";
cantLog($__EMAIL__);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel='stylesheet' href='style/login.css'>
    <title>Classificados do CL FIESC</title>
    <script src="js/func.js"></script>
</head>
<body style="background-image: url('imagem/imagem_cl.jpeg'); background-size: cover; background-repeat: no-repeat;">
    <div id='main'>
    <img id="logo" src="imagem/Marca_FIESC Fachadas.png" alt="Logo da Empresa" style="width: 300px; height: auto;">
  <a href="https://wa.me/5548984777996?text=Sua%20mensagem%20aqui" target="_blank" style="position: fixed; bottom: 20px; right: 20px;">
        <i class="fab fa-whatsapp" style="font-size: 50px; color: #25D366;"></i>
    </a>
        <div style="text-align: center;">
<h1 style="font-family: Arial, sans-serif; color: #ffffff; font-size: 36px; font-weight: bold; text-align: center;">ProntoEstoque do CL</h1>


</div>
        <form>
            <input type="text" id="email" placeholder="Digite seu email...">
            <input type="password" id="senha" placeholder="Senha">
            <button id="btnEntrar">Entrar</button>
        </form>
    
        <a href="./registrar.php">Registrar</a>
    </div>

    <script>
        document.getElementById('btnEntrar').addEventListener('click', function() {
            var email = document.getElementById('email').value;
            var senha = document.getElementById('senha').value;
            addNewData('user/login', { email: email, senha: senha });
        });
    </script>
</body>
</html>
