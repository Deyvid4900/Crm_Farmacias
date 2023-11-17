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

$resultado = $farmaciaObj->findName($nomeFarmaciaDesejada);


if ($resultado != false) {
    echo 'ok' ;
}else{
   echo 'deu ruim' ;
}
// // Verifique se a consulta retornou resultados
// if ($resultado) {
//     // Faça algo com os resultados, por exemplo, imprima os dados
//     echo "ID: " . $resultado[0] . "<br>";
//     echo "Nome da Farmácia: " . $resultado['nomeFarmacia'] . "<br>";
//     // Adicione mais campos conforme necessário
// } else {
//     // Se não houver resultados, exiba uma mensagem ou execute a lógica desejada
//     echo "Nenhuma farmácia encontrada com o nome: $nomeFarmaciaDesejada";
// }


