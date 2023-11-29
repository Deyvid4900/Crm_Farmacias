<?php
include("../lib/vendor/autoload.php");
use \Models\Farmacia;


session_start();
include_once "../models/ClassFarmacia.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nomeFarmacia = $_POST['nomeFarmacia'] ?? '';
    $senha = $_POST['senhaFarmacia'] ?? '';
    $codigo = $_POST['ID'] ?? '';

    $farmaciaObj = new Farmacia;

    $farmaciaObj->setNomeFarmacia($nomeFarmacia);
    $farmaciaObj->setSenhaFarmacia($senha);
    $farmaciaObj->setCodigo($codigo);

    $nomeFarmaciaDesejada = $nomeFarmacia;
    $senhaFarmaciaDesejada = $senha;
    $codigoFarmaciaDesejada = $codigo;

    if ($farmaciaObj->findName($nomeFarmaciaDesejada) &&
        $farmaciaObj->findPass($senhaFarmaciaDesejada) &&
        $farmaciaObj->findAcessPass($codigoFarmaciaDesejada)
    ) {
        // Login bem-sucedido
        $_SESSION['user_id'] = $farmaciaObj->getCodigo();
        $_SESSION['username'] = $farmaciaObj->getNomeFarmacia();
        header('Location: /views/home.php');
        exit();
    } else {
        $mensagemErro = 'Credenciais inválidas.';

        if (!$farmaciaObj->findName($nomeFarmaciaDesejada)) {
            $mensagemErro = 'Nome incorreto.';
        } elseif (!$farmaciaObj->findPass($senhaFarmaciaDesejada)) {
            $mensagemErro = 'Senha incorreta.';
        } elseif (!$farmaciaObj->findAcessPass($codigoFarmaciaDesejada)) {
            $mensagemErro = 'Código incorreto.';
        }

        echo $mensagemErro;
    }
} else {
    echo 'Método não permitido.';
}
?>
