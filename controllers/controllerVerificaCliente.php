<?php

use Models\Cliente;
// Incluindo o autoload e iniciando a sessão
session_start();
include_once("../lib/vendor/autoload.php");
include_once("../models/ClassCliente.php");

// Função para retornar uma resposta JSON
function sendResponse($data, $statusCode = 200, $message = '')
{
    header('Content-Type: application/json');
    http_response_code($statusCode);
    echo json_encode(['data' => $data, 'message' => $message]);
    exit();
}

// Verificando se o método HTTP é POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    sendResponse($data, 405, 'Método não permitido');
}

// Obtendo o corpo da requisição
$json = file_get_contents('php://input');

// Decodificando o JSON
$data = json_decode($json, true);

// Verificando se o JSON foi decodificado com sucesso
if ($data === null) {
    sendResponse($data, 400, 'Erro: JSON inválido');
}
$obj = new Cliente;

// Extraindo os dados do array associativo
$nome = $data['nome'] ?? '';
$dataNasc = $data['dataNasc'] ?? '';
$cell = $data['cell'] ?? '';
$cpf = $data['cpf'] ?? '';
$sexo = $data['sexo'] ?? '';
$email = $data['email'] ?? '';

// Criando uma nova instância do Cliente
$obj->setNome($nome);
$obj->setCpf($cpf);
$obj->setDataNasc($dataNasc);
$obj->setCelular1($cell);
$obj->setSexo($sexo);


// Buscando clientes semelhantes
try{
    $result = $obj->findClienteSemelhante($obj->getNome(),$_SESSION['user_id']);
} catch (Exception $e) {
    sendResponse($result, 510, 'Não foi possivel encontrar cliente semelhante');
}


// // Verificando se há clientes semelhantes
if (!empty($result)) {
    // Envie a resposta com os clientes semelhantes encontrados
    sendResponse($result, 200, 'Clientes semelhantes encontrados');
} else {
    try {
        // Configurando os dados do novo cliente
        $obj->setNome($nome);
        $obj->setCpf($cpf);
        $obj->setDataNasc($dataNasc);
        $obj->setCelular1($cell);
        $obj->setSexo($sexo);
        $obj->setEstadoCivil("");
        $obj->setProfissao("");
        $obj->setFaixaSalarial("");
        $obj->setEscolaridade("");
        $obj->setReligiao("");
        $obj->setTimeFut("");
        $obj->setRaca("");
        $obj->setInfoAdic("");
        $obj->setCelular2("");
        $obj->setTelFixo("");

        if (!empty($email)) {
            $obj->setEmail($email);
        }
    


        $obj->insertSimple($_SESSION['user_id']);

        // Envie a resposta indicando que o cliente foi inserido com sucesso
        sendResponse($data, 201, 'Cliente inserido com sucesso');
    } catch (Exception $e) {
        // Envie a resposta indicando que houve um erro ao inserir o cliente
        sendResponse($data, 500, 'Erro ao inserir o cliente: ' . $e->getMessage());
    }
}
