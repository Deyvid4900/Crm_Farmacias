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
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@300;400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../lib/css/headerStyles.css">
<link rel="stylesheet" href="../lib/css/sideBarStyles.css">
<link rel="stylesheet" href="../lib/css/homeStyles.css">

<!-- <link rel="stylesheet" href="../lib/css/formServicosStyle.css"> -->
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

<!-- conteudo interno da pagina  -->


<?php include "subViews/notificacaoExibi.php" ?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script src='<?php echo DIRPAGE . "lib/JS/grafos1.js" ?>'></script>
<divs style="width: calc(100% - 90px);float: right;">
    <table class="columns">
        <tr style="display: flex;flex-wrap: wrap;">
            
            <div id="spinner"></div>
            <div id="mensagem" style="display: none;text-align: center;">Recebendo Dados
            </div>
            
            <td >
                <div id="Sarah_chart_div" style="border: 1px solid #ccc;" ></div>
            </td>
            <td>
                <div id="Anthony_chart_div" style="border: 1px solid #ccc"></div>
            </td>
            <td>
                <div id="Salario_chart_div" style="border: 1px solid #ccc"></div>
            </td>
        </tr>
    </table>
</divs>

</script>
<script src='<?php echo DIRPAGE . "lib/JS/sideBar.js" ?>'></script>
<?php \classes\ClassLayout::setFooter(); ?>