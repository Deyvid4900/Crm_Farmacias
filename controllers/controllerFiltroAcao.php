<?php
include("../lib/vendor/autoload.php");
include_once "../models/ClassFiltro.php";

use Models\Filtros;

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obter os dados do formulário
    $input = $_POST['conteudoPesquisa'] ?? '';
    $filtro = $_POST['filtro'] ?? '';

    $FiltroObj = new Filtros;
    $resultado = $FiltroObj->buscarValoresSemelhantes($input, $filtro, $_SESSION['user_id']);

    // Verificar se a inserção foi bem-sucedida
    if ($resultado) {


        echo json_encode($resultado);
    } else {

        echo "nenhum resultado obtido";
    }
} else {
    echo 'Método não permitido.';
}
