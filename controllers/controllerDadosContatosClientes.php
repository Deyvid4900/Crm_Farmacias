<?php
include_once("../lib/vendor/autoload.php");
include_once "../models/ClassCliente.php";

session_start();
use \Models\Cliente;

// Aqui você pode fazer qualquer processamento necessário com os dados recebidos via AJAX

$objCliente = new Cliente;

$todosClientes = $objCliente->findAllByFarmaciaId($_SESSION['user_id']);


// Exemplo: obtendo um parâmetro chamado 'parametro' da requisição GET


// Exemplo de resposta JSON


// Convertendo a resposta para JSON
echo json_encode($todosClientes);
