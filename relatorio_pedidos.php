<?php
include 'sys/conexao.php';

justLog($__EMAIL__, $__TYPE__, 1);

header('Content-Type: text/csv; charset=utf-8');
header("Content-Disposition: attachment; filename*=UTF-8''relatorio_pedidos.csv");

$resultado = fopen("php://output", 'w');

$cabecalho = ['id', 'Cliente', 'Filial','Local','Itens', 'Status'];

fputcsv($resultado, $cabecalho, ';');

$query = mysqli_query($__CONEXAO__, "select * from pedidos");

// $arr = array();

while($dados = mysqli_fetch_array($query)){
    $id         = $dados["id"];
    $clienteid  = $dados["cliente"];
    $filial     = $dados["filial"];
    $local      = $dados["local"];
    $itens      = $dados["itens"];
    $status     = $dados["status"];
    
    echo $clienteid;
    
    
    $clienteQ = mysqli_query($__CONEXAO__, "select * from usuarios where id='$clienteid'");
    $assoc = mysqli_fetch_assoc($clienteQ);
    $cliente = $assoc["email"];
    

    $content = array(
        $id,
        $cliente,
        $filial,
        $local,
        $itens,
        $status,
    );

    // array_push($arr, $content);
    fputcsv($resultado, $content, ';');

}

// echo "<pre>";
// var_dump($arr);
// echo "</pre>";
