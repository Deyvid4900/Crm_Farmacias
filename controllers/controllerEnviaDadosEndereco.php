<?php
include_once("../lib/vendor/autoload.php");
include_once "../models/ClassCliente.php";


use \Models\Cliente;
session_start();
// Aqui você pode fazer qualquer processamento necessário com os dados recebidos via AJAX
$contador = 0;
$todosEnderecos = array();
$objCliente = new Cliente;
$obj = new Cliente;
// $todosClientes = $objCliente->findAllByFarmaciaId($_SESSION['user_id']);
$todosEnderecos[] = $obj->findAllAdressWithClientName($_SESSION['user_id']);

// Exemplo: obtendo um parâmetro chamado 'parametro' da requisição GET


// Exemplo de resposta JSON


// Convertendo a resposta para JSON
echo json_encode($todosEnderecos);
