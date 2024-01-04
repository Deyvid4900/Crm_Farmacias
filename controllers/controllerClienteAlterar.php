<?php
include("../lib/vendor/autoload.php");
include_once "../models/ClassCliente.php";
include_once "../models/ClassEndereco.php";

use \Models\Cliente;
use \Models\Endereco;

session_start();
const FILTERS = [
    'int' => FILTER_SANITIZE_NUMBER_INT,
    'string' => FILTER_SANITIZE_STRING,
    'email' => FILTER_SANITIZE_EMAIL,
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    $cliente = new Cliente;
    $cliente->setNome($_POST['nome']);
    $cliente->setSexo($_POST['sexo']);
    $cliente->setEstadoCivil($_POST['estadoCivil']);
    $cliente->setDataNasc($_POST['dataNasc']);
    $cliente->setProfissao($_POST['profissao']);
    $cliente->setFaixaSalarial($_POST['faixaSalarial']);
    $cliente->setCpf($_POST['cpf']);
    $cliente->setEscolaridade($_POST['escolaridade']);
    $cliente->setReligiao($_POST['religiao']);
    $cliente->setTimeFut($_POST['timeFut']);
    $cliente->setRaca($_POST['raca']);
    $cliente->setInfoAdic($_POST['infoAdic']);
    $cliente->setCelular1($_POST['celular1']);
    $cliente->setCelular2($_POST['celular2']);
    $cliente->setTelFixo($_POST['telFixo']);
    $cliente->setEmail($_POST['email']);

    var_dump($_POST);
    $respostaCliente = $cliente->update($_POST['cliente_id']);


    $endereco = new Endereco;
    $endereco->setLogradouro($_POST['logradouro']);
    $endereco->setNumeroCasa($_POST['numeroCasa']);
    $endereco->setBairro($_POST['bairro']);
    $endereco->setComplemento($_POST['complemento']);
    $endereco->setCidade($_POST['cidade']);
    $endereco->setUf($_POST['uf']);
    $endereco->setReferencia($_POST['referencia']);


    $respostaEndereco = $endereco->update($_POST['cliente_id']);



    if ($respostaCliente == true && $respostaEndereco == true) {
        $response = 'Dados inseridos no banco de dados';
        header('Location: /views/tabelaCliente.php');
    } else {
        $response = 'Dados não inseridos no banco de dados';
    }

} else {
    // Responde com erro se a requisição não for do tipo POST
    $response = "Erro: Método de requisição inválido.";
}

// Retorna a resposta ao cliente
echo $response;
