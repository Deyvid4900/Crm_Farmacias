<?php

use Models\Servicos;

include("../lib/vendor/autoload.php");
include_once "../models/ClassServicos.php";


session_start();
$arrayValoresId = explode(',', $_POST["ids"]);
$response='';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST["Excluir"] =='sim' ) {
    // var_dump($arrayValoresId);

    foreach ($arrayValoresId as $key => $value) {
        $obj = new Servicos;
        if ($obj->deleteServico($value)) {
            $response .= "Serviço Excluida <br>";
            header('Location: /views/administracaoServicos.php');
        }else{
            $response .= "Erro ao Excluir Serviço <br>";
        }
    }
}elseif($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST["Excluir"] =='não'){
    
}
echo $response;
