<?php

use Models\EnderecoFarmacia;
use Models\Farmacia;

include_once("../lib/vendor/autoload.php");
include_once "../models/ClassFarmacia.php";
include_once "../models/ClassEnderecoFarmacia.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    $obj = new Farmacia;
    $objEndereco = new EnderecoFarmacia;
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
        if ($key == "logradouro") {
            $objEndereco->setLogradouro($_POST['logradouro']);
            $controle[] = $key;
        }
        if ($key == "numeroCasa") {
            $objEndereco->setNumeroCasa($_POST['numeroCasa']);
            $controle[] = $key;
        }
        if ($key == "bairro") {
            $objEndereco->setBairro($_POST['bairro']);
            $controle[] = $key;
        }
        if ($key == "complemento") {
            $objEndereco->setComplemento($_POST['complemento']);
            $controle[] = $key;
        }
        if ($key == "cidade") {
            $objEndereco->setCidade($_POST['cidade']);
            $controle[] = $key;
        }
        if ($key == "uf") {
            $objEndereco->setUf($_POST['uf']);
            $controle[] = $key;
        }
        if ($key == "referencia") {
            $objEndereco->setReferencia($_POST['referencia']);
            $controle[] = $key;
        }

    }



    if ($obj->update($_SESSION['user_id'], $controle)) {
        if ($objEndereco->update($_SESSION['user_id'])) {
               $response = 'Dados Atualizados!';    
        }        
    } else {
        $response = 'Não foi possivel atualizar os dados';
    }
} else {
    // Responde com erro se a requisição não for do tipo POST
    $response = "Erro: Método de requisição inválido.";
}

// Retorna a resposta ao cliente
echo $response;
