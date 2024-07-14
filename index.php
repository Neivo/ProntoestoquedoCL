<?php
include "sys/conexao.php";

if(!isset($_SESSION['email'])){
    header("Location: ./logar.php");    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
       <div id='main'>
       <div class="logo-container">
        <img id="logo" src="imagem/Marca_FIESC Fachadas.png" alt="Logo da Empresa" style="width: 500px; height: auto;">
    </div>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cadastrar Produtos -ProntoEstoque do CL</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src='js/produtos.js'></script>
    <script>const produtos = new Produtos(<?php echo $__TYPE__; ?>)</script>
    <link rel="stylesheet" href="style/main.css">
</head>
<body style="background-image: url('imagem/imagem_cl.jpeg'); background-size: cover; background-repeat: no-repeat;">
 
    <button id="logoutButton" onclick="window.location.href='./logout.php'">Logout</button>
    <!-- Botão do WhatsApp -->
<a href="https://wa.me/5548984777996?text=Ol%C3%A1%2C%20realizei%20um%20pedido%20no%20site%20Prontoestoque%2C%20favor%20verificar%20e%20enviar%20para%20minha%20regional" target="_blank" style="position: fixed; bottom: 20px; right: 20px;">
    <i class="fab fa-whatsapp" style="font-size: 50px; color: #25D366;"></i>
</a>
<!-- Fim do Botão do WhatsApp -->

    <div id='carrinhoDiv'></div>
    
    <?php if(requireLevel($__TYPE__, 1)){ ?>
    <div id="top">
      <div id='query'>
 <button onclick="selectDiv(0)" style="background-color: #6eb5ff; color: white;">Adicionar Item</button>
<button onclick="selectDiv(1)" style="background-color: #6eb5ff; color: white;">Aprovar usuários</button>
<button onclick="selectDiv(2)" style="background-color: #6eb5ff; color: white;">Admin usuários</button>
<button onclick="selectDiv(3)" style="background-color: #6eb5ff; color: white;">Admin pedidos</button>
<button onclick="selectDiv(4)" style="background-color: #6eb5ff; color: white;">Histórico de pedidos</button>

<a href='./relatorio_pedidos' style="background-color: #6eb5ff; color: white; text-decoration: none; padding: 10px 20px; border-radius: 4px;">Relatório pedidos</a>
<a href='./relatorio_itens' style="background-color: #6eb5ff; color: white; text-decoration: none; padding: 10px 20px; border-radius: 4px;">Relatório Itens</a>
 
         
        <div id="adicionarProdutos" class='select-div '>
            <form action="javascript:void(0)">
                <div class="input-div">
                    <p class="input-p">Nome</p>
                    <input type="text" id="nomereg" placeholder="Ex: Cadeira Giratória Ergonômica">
                </div>
                <div class="input-div">
                    <p class="input-p">Plaqueta / Lote</p>
                    <input type="text" id="plaquetareg" placeholder="Ex: 123456">
                </div>
                <div class="input-div">
                    <p class="input-p">Imagem</p>
                    <input type="file" accept='image/png, image/jpeg' id="imagemAdd" placeholder="Selecionar">
                </div>
                <div class="input-div" bis_skin_checked="1"> 
                    <div bis_skin_checked="1" style="display: flex; gap: 20px;">
                        <p class="input-p">Imobilizado</p>
                        <input type="checkbox" id="imobilizadoreg">
                    </div>
                </div>
                <div class="input-div">
                    <p class="input-p">Entidade</p>
                    <select id='entidadereg'>
                        <option value='todas'>todas</option>
                        <option value='iel'>IEL</option>
                        <option value='sesi'>SESI</option>
                        <option value='senai'>SENAI</option>
                        <option value='fiesc'>FIESC</option>
                    </select>
                </div>
                <div class="input-div">
                    <p class="input-p">Setor</p>
                    <select id="setorreg"></select>
                </div>
                <div class="input-div">
                    <p class="input-p">Descrição</p>
                    <input type="text" id="descricaoreg" placeholder="Ex: Cadeira giratória ergonômica com apoio lombar ajustável.">
                </div>
                <div class="input-div">
                    <p class="input-p">Quantidade</p>
                    <input type="number" id="quantidadereg" placeholder="Ex: 2">
                </div>
                <button onclick="sendItem()">Cadastrar</button>
            </form>
        </div>
        <div id="aprovarUsuarios" class='select-div'></div>
        <div id="deletarUsuarios" class='select-div'></div>
        <div id="aprovarPedidos" class='select-div'></div>
        <div id="antigosPedidos" class='select-div'></div>
        </div>
    </div>
    <?php } ?>
    
<div style="text-align: center;">
    <h1 style="font-family: sans-serif; color: #FFFFFF;">ProntoEstoque do CL</h1>

</div>
<button style='padding: 10px 30px; border: 1px solid #007BFF; color: #007BFF; background: #f0f8ff; border-radius: 5px; cursor: pointer;' onclick="carrinhoDiv.classList.toggle('active')">
    <i class="fas fa-shopping-cart"></i> Ver Carrinho
</button>




    <input id='searchBar' placeholder='Pesquisar..'>
    <select id='filterSelect'>
        <option value=''>Selecionar setor</option>
    </select>
    <div id="tabelaProdutos"></div>
    
    <?php if(requireLevel($__TYPE__, 1)){ ?><script src="js/getAdm.js"></script><?php } ?>
    <script src="js/func.js"></script>
</body>
</html>