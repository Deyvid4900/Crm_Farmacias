<?php

use Models\Consultorio;
use Models\Lembrete;

session_start();
include("../lib/vendor/autoload.php");

\Classes\ClassLayout::setHeadDefault("Home");
if (!isset($_SESSION["username"])) {
    header('Location: /');
}


?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@300;400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo DIRPAGE . "lib/css/headerStyles.css" ?>">
<link rel="stylesheet" href="<?php echo DIRPAGE . "lib/css/sideBarStyles.css" ?>">
<link rel="stylesheet" href="<?php echo DIRPAGE . "lib/css/homeStyles.css" ?>">
<link rel="stylesheet" href="<?php echo DIRPAGE . "lib/css/manualSide.css" ?>">

<?php


include_once("../models/ClassEvento.php");
include_once ("../models/ClassConsultorio.php");

include_once ("../models/ClassLembrete.php");
$obj=new Lembrete;
$lembretes = $obj->findNextWeekReminders($_SESSION['user_id']);

$consulta =new Consultorio;
$dataRetorno = $consulta->findAllDataRetorno($_SESSION['user_id']);
$evt = new \Models\Eventos;
$tempoRestanteFormatado = new \Models\Eventos;
$eventosProximos = $evt->getProximosEventosComTempoRestante($_SESSION["user_id"]);

\classes\ClassLayout::setHeaderComponente(count($eventosProximos), $_SESSION["username"],'',count($dataRetorno),count($lembretes));

?>

<!-- conteudo interno da pagina  -->

<div>

    <div class="titulo-Inicio">
        <div class="titulo">
            <h1>Como funciona</h1>
            <p>Principais funcionalidades de como o sistema funciona</p>
        </div>
    </div>
    <div class="imgExplicaçãoMkt">
        <div class="textEImgMkt">
            <h3>Marketing</h3>
            <img src="/img/marketing.png" alt="">
        </div>
    </div>
    <div class="paraExpDaImg">
        <div class="flexP">
            <p class="pUmExpImg">Como pode ser observado na imagem acima, ao clicar em Marketing e depois em Mensagem Livre será aberto um filtro de clientes onde será possivel filtrar clientes por nome, cpf, id, email e entre outros filtros, onde irá ser adicionado no conteúdo o filtro que você escolher. Caso não escolha nenhum filtro irá aparecer todos os clientes cadastrado no sistema</p>
        </div>
        <div class="flexP">
            <p class="pDoisExpImg">Logo após escolher o cliente desejado aparecerá um quadrado para selecionar o cliente ou pode marcar todos os clientes, e logo após qual forma deseja enviar sua mensagem se é por Email, Mensagem ou Whatsapp</p>
        </div>
    </div>

    <!-- lembrete -->
    <div class="lembrete-Bg">
        <div class="titLembrete">
            <h3>Lembrete</h3>
            <img src="/img/lembretes.png" alt="">
        </div>
    </div>
    <div class="textLembrete">
        <div class="flexP">
            <p class="textlembPUm">Clicando em lembrete será possível visualizar um campo de filtro, clicando em "Filtrar por:", é possível filtrar seu cliente já cadastrado no sistema por 'nome', 'cpf' e 'id', onde irá ser adicionado no conteúdo o filtro que você escolher. Caso não escolha nenhum filtro irá aparecer todos os clientes cadastrado no sistema </p>
        </div>
        <div class="flexP">
            <p class="textlembPDois">Abaixo é possível ser feita a escolha de 'com que frequência deseja enviar a mensagem ao seu cliente', isso deverá ser selecionado caso seu cleinte compre recorrentemente e também no caso se ele gostaria de ser avisado caso o remédio dele tenha chegado ou esteja perto de comprar novamente </p>
        </div>
    </div>

    <!-- serviços -->
    <div class="servicos-Bg">
        <div class="titServicos">
            <h3>Serviços</h3>
            <img src="/img/servicos.png" alt="">
        </div>
    </div>
    <div class="textServicos">
        <div class="flexP">
            <p class="textPServicos">Ao clicar em 'Serviços' abrirá um formulario de 'Declaração de Serviço Farmacêutico', ao atender um paciente é necessário preencher esse formulário comprovando todos os procedimentos e orientações realizadas pelo responsável técnico durante a prestação do serviço farmacêutico, onde será possível imprimir caso necessário para o paciente</p>
        </div>
    </div>




</div>



<?php include "subViews/notificacaoExibi.php" ?>


<script>

</script>
<script src='<?php echo DIRPAGE . "lib/JS/sideBar.js" ?>'></script>
<?php \classes\ClassLayout::setFooter(); ?>