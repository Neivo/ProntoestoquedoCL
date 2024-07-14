<?php
include 'sys/conexao.php';

justLog($__EMAIL__, $__TYPE__, 1);

header('Content-Type: text/csv; charset=utf-8');
header("Content-Disposition: attachment; filename*=UTF-8''relatorio_itens.csv");

$resultado = fopen("php://output", 'w');

$cabecalho = ['id', 'nome', 'plaqueta','entidade','setor', 'filial', 'local', 'descricao', 'imobilizado', 'quantidade'];

fputcsv($resultado, $cabecalho, ';');

$query = mysqli_query($__CONEXAO__, "select * from produtos");

// $arr = array();

while($dados = mysqli_fetch_array($query)){
    $id         = $dados["id"];
    $nome  = $dados["nome"];
    $plaqueta     = $dados["plaqueta"];
    $entidade      = $dados["entidade"];
    $setor      = $dados["setor"];
    $filial     = $dados["filial"];
    $local     = $dados["local"];
    $descricao     = $dados["descricao"];
    $imobilizado     = $dados["imobilizado"];
    $quantidade     = $dados["quantidade"];


    $content = array(
        $id,
        $nome,
        $plaqueta,
        $entidade,
        $setor,
        $filial,
        $local,
        $descricao,
        $imobilizado,
        $quantidade,
    );

    // array_push($arr, $content);
    fputcsv($resultado, $content, ';');

}

// echo "<pre>";
// var_dump($arr);
// echo "</pre>";
