<?php

use Models\Consultorio;

include("../lib/vendor/autoload.php");
include_once "../models/ClassConsultorio.php";


session_start();
$arrayValoresId = explode(',', $_POST["ids"]);
$response='';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST["Excluir"] =='sim' ) {
    // var_dump($arrayValoresId);

    foreach ($arrayValoresId as $key => $value) {
        $obj = new Consultorio;
        if ($obj->delete($value)) {
            $response .= "Consulta Excluida <br>";
            header('Location: /views/administracao.php');
        }else{
            $response .= "Erro ao Excluir Consulta <br>";
        }
    }
}elseif($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST["Excluir"] =='não'){
    
}
echo $response;
