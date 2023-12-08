<?php
use Models\Consultorio;

include("../lib/vendor/autoload.php");
include_once "../models/ClassConsultorio.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recebe os dados do formulário
    $id = $_POST['idFarmacia'];
    $nameFarm = $_POST['NameFarm'];
    $namePaciente = $_POST['namePaciente'];
    $prescrito = $_POST['prescrito'];
    $posologiaConsultorio = $_POST['posologiaConsultorio'];
    $date = $_POST['date'];
    $horaConsulta = $_POST['horaConsulta'];
    
    // Aqui você pode realizar qualquer lógica de processamento necessária
    // Por exemplo, salvar os dados em um banco de dados ou realizar outras operações

    $obj = new Consultorio;
    $obj->setNameFarm($nameFarm);
    $obj->setNamePaciente($namePaciente);
    $obj->setPrescrito($prescrito);
    $obj->setPosologiaConsultorio($posologiaConsultorio);
    $obj->setDate($date);
    $obj->setHoraConsulta($horaConsulta);

    // Verifica se a operação foi bem-sucedida
    if ($obj->insertConsultorio($id)) {
        $response = 'Dados inseridos no banco de dados';
    } else {
        $response = 'Dados não inseridos no banco de dados';
    }

} else {
    // Responde com erro se a requisição não for do tipo POST
    $response = "Erro: Método de requisição inválido.";
}

// Retorna a resposta ao cliente
echo $response;



