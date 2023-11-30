<?php
include("../lib/vendor/autoload.php");
include_once "../models/ClassFiltro.php";
use \Models\Filtro;
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obter os dados do formulário
    $input = $_POST['conteudoPesquisa'] ?? '';
    $filtro = $_POST['filtro'] ?? '';
    
    $FiltroObj = new Filtro;
    $resultado = $FiltroObj->buscarValoresSemelhantes($input,$filtro);


    // if (isset($input)) {
        
    // }else{
    //     $FiltroObj = new Filtro;
    //     $resultado = $FiltroObj->buscarAll($filtro);
    // }


    
    // Verificar se a inserção foi bem-sucedida
    if ($resultado) {
        var_dump($resultado);
    } else {
        
        echo 'Falha ao inserir o evento.';
    }
} else {
    echo 'Método não permitido.';
}
?>
