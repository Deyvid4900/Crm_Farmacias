<?php
include("../lib/vendor/autoload.php");
include_once "../models/ClassFarmacia.php";

use \Models\Farmacia;

session_start();

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

    $id = $farmaciaObj->getIdFromNome($nomeFarmacia);
    $hash = $farmaciaObj->getHashPassFromNome($nomeFarmacia);

    if (
        $farmaciaObj->findName($nomeFarmaciaDesejada) &&
        $farmaciaObj->validatePass($senhaFarmaciaDesejada,$hash) &&
        $farmaciaObj->findAcessPass($codigoFarmaciaDesejada)
    ) {
        $registro = $farmaciaObj->getRegistroFromNome($nomeFarmacia);
        $email = $registro['emailFarmacia'];
        $telefoneFarmacia = $registro['numeroFarmacia'];
        // Login bem-sucedido
        $_SESSION['user_id'] = $id;
        $_SESSION['username'] = $farmaciaObj->getNomeFarmacia();
        $_SESSION['email'] = $email;
        $_SESSION['tell'] = $telefoneFarmacia;
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
