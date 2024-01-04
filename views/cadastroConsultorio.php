<?php

use Models\Consultorio;
use Models\Lembrete;

session_start();
include("../lib/vendor/autoload.php");
\Classes\ClassLayout::setHeadDefault("Cadastro de prescrições");
if (!isset($_SESSION["username"])) {
    header('Location: /');
}
?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@300;400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../lib/css/headerStyles.css">
<link rel="stylesheet" href="../lib/css/sideBarStyles.css">
<link rel="stylesheet" href="../lib/css/homeStyles.css">
<link rel="stylesheet" href="../lib/css/formConsultorioStyle.css">
<style>
    @media print {

        #loader,
        #btnImprimir,
        #btnEnviar,
        #notificacaoDivi,
        #componentesDiv,
        #boxa {
            display: none;
        }

        .box {
            display: block;
        }

        .ladoEsquerdo {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 200px;
        }

        .FlexColum {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 200px;
            gap: 25px;
        }

        .antesFormb-bg {
            width: 765px;
            min-height: 350px;
            height: auto;
            border: 1px solid rgb(43, 43, 43);
            border-radius: 8px;
            margin: 40px auto;
            overflow: auto;
            box-shadow: none;
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





<?php include "../views/subViews/cadastroConsultorioForm.php" ?>
<div id="loader">
    <?php include "subViews/notificacaoExibi.php" ?>
    <?php include "subViews/alerta.php" ?>
</div>

<script>
    $("#btnImprimir").click((e) => {
        e.preventDefault();
        window.print()
    })
    const mySideBar = document.getElementById('mySidebar')

    function openNav() {
        mySideBar.style.width = '400px';
    }

    function closeNav() {
        mySideBar.style.width = '0';
    }
</script>
<script src='<?php echo DIRPAGE . "lib/JS/sideBar.js" ?>'></script>
<script src='<?php echo DIRPAGE . "lib/JS/ajaxCadastroConsultorio.js" ?>'></script>
<?php \classes\ClassLayout::setFooter(); ?>