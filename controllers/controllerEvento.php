<?php
include("../lib/vendor/autoload.php");
include_once "../models/ClassEvento.php";
use \Models\Eventos;
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obter os dados do formulário
    $nomeEvento = $_POST['nomeEvento'] ?? '';
    $dataEvento = $_POST['dataEvento'] ?? '';
    $descricaoEvento = $_POST['desc'] ?? '';
    $horaEvento = $_POST['horaEvento'] ?? ''; // Corrigido
    $tipoEvento = $_POST['tipoEvento'] ?? ''; // Corrigido

    // Criar uma instância da classe Eventos
    $eventoObj = new Eventos;

    // Definir os dados do evento
    $eventoObj->setNomeEvento($nomeEvento);
    $eventoObj->setDataEvento($dataEvento);
    $eventoObj->setDescricaoEvento($descricaoEvento);
    $eventoObj->setHoraEvento($horaEvento); // Adicionado
    $eventoObj->setTipoEvento($tipoEvento); // Adicionado

    // Chamar o método insert() para adicionar o evento ao banco de dados
    $resultado = $eventoObj->insert($_SESSION['user_id']);

    // Verificar se a inserção foi bem-sucedida
    if ($resultado) {
        $response =  'Dados inseridos com sucesso';
    } else {
        $response = 'Falha ao inserir o evento';
    }
} else {
    echo 'Método não permitido.';
}
echo $response;
