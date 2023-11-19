<?php
require_once '../config/config_Bd.php';
require_once '../Controller/controllerCrud.php';
require_once '../modules/farmaciaModule.php';


$nomeFarmacia = $_POST['nomeFarmacia'];
$senha = $_POST['senhaFarmacia'];
$codigo = $_POST['ID'];



$farmaciaObj = new Farmacia();


$farmaciaObj->setNomeFarmacia($nomeFarmacia);

$farmaciaObj->setSenhaFarmacia($senha);
$farmaciaObj->setCodigo($codigo);

$nomeFarmaciaDesejada = $nomeFarmacia;
$senhaFarmaciaDesejada = $senha;
$codigoFarmaciaDesejada = $codigo;

$farmaciaObj->findName($nomeFarmaciaDesejada);


if ($farmaciaObj->findName($nomeFarmaciaDesejada) != false) {
    if ($farmaciaObj->findPass($senhaFarmaciaDesejada) != false) {
        if ($farmaciaObj->findAcessPass($codigoFarmaciaDesejada) != false) {
            // login feito
            session_start();
            $_SESSION['user_id'] = $farmaciaObj->getCodigo();
            $_SESSION['username'] = $farmaciaObj->getNomeFarmacia();

            header('Location:../templates/Main/main.php');
        } else {
            echo "codigo incorreta";
        }
    } else {
        echo "senha incorreta";
    }
} else {
    echo 'Nome incorreto';
}
