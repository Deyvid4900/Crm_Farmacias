<?php

use Models\Consultorio;

include("../lib/vendor/autoload.php");
include_once "../models/ClassConsultorio.php";


session_start();
const FILTERS = [
    'int' => FILTER_SANITIZE_NUMBER_INT,
    'string' => FILTER_SANITIZE_STRING,
    'email' => FILTER_SANITIZE_EMAIL,
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    $obj = new Consultorio;
    $obj->setNameFarm($_POST['NameFarm']);
    $obj->setNamePaciente($_POST['namePaciente']);
    $obj->setPrescrito($_POST['prescrito']);
    $obj->setDate($_POST['dataRetorno']);
    $obj->setPosologiaConsultorio(($_POST['posologiaConsultorio']));
    
    if ($obj->update($_POST['idConsulta'])) {
        $response = 'Dados Atualizados no banco de dados';
        header('Location: /views/Administracao.php');
    } else {
        $response = 'Dados não Atualizados no banco de dados';
    }

} else {
    // Responde com erro se a requisição não for do tipo POST
    $response = "Erro: Método de requisição inválido.";
}

// Retorna a resposta ao cliente
echo $response;
