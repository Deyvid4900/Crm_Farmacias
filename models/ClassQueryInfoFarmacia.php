<?php

use Models\EnderecoFarmacia;
use Models\Farmacia;

include_once '../models/ClassFarmacia.php';
include_once '../models/ClassEnderecoFarmacia.php';

include_once '../models/ClassConexao.php';

// Criando uma instância da classe Farmacia
$farmaciaModel = new Farmacia;
$enderecoFarmacia = new EnderecoFarmacia;
// Obtendo todos os registros de farmácias
$farmacias = $farmaciaModel->getRegistroFromNome($_SESSION["username"]);
$farmaciaId = $farmaciaModel->getIdFromNome($_SESSION["username"]);

$endereco = $enderecoFarmacia->find($farmaciaId);

if (!($endereco == '' || $endereco == null || $endereco == false)) {
    $farmacias = array_merge($farmacias, $endereco);
    $atualizar=true;
}else{
    $atualizar=false;
}

// Verificando se há resultados
if (!empty($farmacias)) {
    // Retornando os resultados como JSON
    
} else {
    echo "Nenhum resultado encontrado.";
}
