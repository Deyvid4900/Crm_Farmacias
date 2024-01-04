<?php

include("../lib/vendor/autoload.php");
include_once "../models/ClassCliente.php";
include_once "../models/ClassEndereco.php";

use \Models\Endereco;
use \Models\Cliente;

session_start();
$arrayValoresId = explode(',', $_POST["ids"]);
$response='';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST["Excluir"] =='sim' ) {
    var_dump($arrayValoresId);

    foreach ($arrayValoresId as $key => $value) {
        $objEnderecp =new Endereco;
        $obj = new Cliente;
        if ($objEnderecp->delete($value)  && $obj->delete($value)) {
            $response .= "Cliente Excluido <br>";
            header('Location: /views/tabelaCliente.php');
        }else{
            $response .= "Erro ao Excluir Cliente <br>";
        }
    }
}elseif($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST["Excluir"] =='não'){
    
}
echo $response;
