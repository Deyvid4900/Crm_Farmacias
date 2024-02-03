<?php

use Models\Consultorio;
use Models\Lembrete;

session_start();
include("../lib/vendor/autoload.php");
\Classes\ClassLayout::setHeadDefault("Serviços Prestados");
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
<link rel="stylesheet" href="../lib/css/ImprimirServicosStyle.css">
<link rel="stylesheet" href="/lib/css/Alerta.css">
<style>
    @media print {

        #loader,
        #btnImprimir,
        #btnEnviar,
        #notificacaoDivi,
        #componentesDiv {
            display: none;
        }
        .bb{
            display: none;
        }
    }
</style>
<div id="componentesDiv">
    <?php
    include_once("../models/ClassEvento.php");
    include_once("../models/ClassConsultorio.php");
    include_once("../models/ClassLembrete.php");
    
    $obj = new Lembrete;
    $lembretes = $obj->findNextWeekReminders($_SESSION['user_id']);

    $consulta = new Consultorio;
    $dataRetorno = $consulta->findAllDataRetorno($_SESSION['user_id']);
    $evt = new \Models\Eventos;
    $tempoRestanteFormatado = new \Models\Eventos;
    $eventosProximos = $evt->getProximosEventosComTempoRestante($_SESSION["user_id"]);

    \classes\ClassLayout::setHeaderComponente(count($eventosProximos), $_SESSION["username"], '', count($dataRetorno), count($lembretes));
    \classes\ClassLayout::setSideComponente();
    ?>
</div>
<!-- conteudo interno da pagina  -->

<?php include_once "../views/subViews/alerta.php" ?>
<?php include_once "../views/subViews/cadastroServicosssForm.php" ?>


<div id="notificacaoDivi">
    <?php include_once "subViews/notificacaoExibi.php" ?>
</div>

<script>
    $('#btnImprimir').click(function(e) {
        e.preventDefault();
        window.print()
    });
    const mySideBar = document.getElementById('mySidebar')

    function openNav() {
        mySideBar.style.width = '400px';
    }

    function closeNav() {
        mySideBar.style.width = '0';
    }
</script>
<script src='<?php echo DIRPAGE . "lib/JS/sideBar.js" ?>'></script>
<script src='<?php echo DIRPAGE . "lib/JS/ajaxCadastroServicos.js" ?>'></script>
<?php \classes\ClassLayout::setFooter(); ?>