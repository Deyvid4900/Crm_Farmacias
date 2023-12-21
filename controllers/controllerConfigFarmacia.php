<?php

use Models\Farmacia;

include("../lib/vendor/autoload.php");
include_once "../models/ClassFarmacia.php";

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    $obj = new Farmacia;
    $controle = [];


    function obterCamposFormulario()
    {
        $camposFormulario = [];

        foreach ($_POST as $nomeCampo => $valorCampo) {
            // Verifica se o campo tem um valor definido
            if (!empty($valorCampo)) {
                // Adiciona o campo ao array
                $camposFormulario[$nomeCampo] = $valorCampo;
            }
        }

        return $camposFormulario;
    }

    $camposAlterados = obterCamposFormulario();


    foreach ($camposAlterados as $key => $value) {
        if ($key == "nomeFarmacia") {
            $obj->setNomeFarmacia($_POST['nomeFarmacia']);
            $controle[] = $key;
        }
        if ($key == "cnpjFarmacia") {
            $obj->setCnpjFarmacia($_POST['cnpjFarmacia']);
            $controle[] = $key;
        }
        if ($key == "emailFarmacia") {
            $obj->setEmailFarmacia($_POST['emailFarmacia']);
            $controle[] = $key;
        }
        if ($key == "razaoSocial") {
            $obj->setRazaoSocial($_POST['razaoSocial']);
            $controle[] = $key;
        }
        if ($key == "numeroFarmacia") {
            $obj->setNumeroFarmacia($_POST['numeroFarmacia']);
            $controle[] = $key;
        }
        if ($key == "telefoneFarmacia") {
            $obj->setTelefoneFarmacia($_POST['telefoneFarmacia']);
            $controle[] = $key;
        }
        if ($key == "dataCriacaoFarmacia") {
            $obj->setDataCriacaoFarmacia($_POST['dataCriacaoFarmacia']);
            $controle[] = $key;
        }
        if ($key == "senhaEmail") {
            $obj->setSenhaEmail($_POST['senhaEmail']);
            $controle[] = $key;
        }
    }
    


    if ($obj->update($_SESSION['user_id'],$controle)) {
        $response = 'Dados Atualizados!';
    } else {
        $response = 'Não foi possivel atualizar os dados';
    }
} else {
    // Responde com erro se a requisição não for do tipo POST
    $response = "Erro: Método de requisição inválido.";
}

// Retorna a resposta ao cliente
echo $response;
