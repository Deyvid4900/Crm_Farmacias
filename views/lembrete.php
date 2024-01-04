<?php

use Models\Consultorio;
use Models\Lembrete;

session_start();
include("../lib/vendor/autoload.php");
\Classes\ClassLayout::setHeadDefault("Lembretes");
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
<link rel="stylesheet" href="<?php echo DIRPAGE . "lib/css/diasContado.css" ?>">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
<?php
include_once("../models/ClassEvento.php");
include_once("../models/ClassConsultorio.php");
include_once("../models/ClassLembrete.php");
$consulta = new Consultorio;
$dataRetorno = $consulta->findAllDataRetorno($_SESSION['user_id']);
$evt = new \Models\Eventos;
$tempoRestanteFormatado = new \Models\Eventos;
$obj=new Lembrete;
$lembretes = $obj->findNextWeekReminders($_SESSION['user_id']);
$eventosProximos = $evt->getProximosEventosComTempoRestante($_SESSION["user_id"]);

\classes\ClassLayout::setHeaderComponente(count($eventosProximos), $_SESSION["username"], '', count($dataRetorno),count($lembretes));
\classes\ClassLayout::setSideComponente();
?>
<!-- conteudo interno da pagina  -->

<?php include "subViews/alerta.php" ?>
<?php



if (isset($_POST['conteudoPesquisa'])) {

    include_once "../lib/vendor/autoload.php";
}



?>
<link rel="stylesheet" href="../lib/css/lembrete.css">

<!-- class ativo mostra o form -->
<section class="formInit-bg aala ativo" id="b">
    <div class="form-bg">
        <h1>Lembrete</h1>
        <div>
            <div id="styleForm">
                <form id='formLembrete' method="post" >
                    <div class="formBox">
                        <div>
                            <label for="">Nome Lembrete:</label><br>
                            <input type="text" name="nomeLembrete">
                        </div>
                        <div>
                            <label for="">Descrição:</label><br>
                            <input type="text" name="descLembrete">
                        </div>
                        <div style="text-align: end;">
                            <label for="">Data a se Lembrar:</label><br>
                            <input type="date" style="width: 120px;" name="dataLembrete">
                        </div>
                        <div style="text-align: end;">
                            <label for="">Hora a se Lembrar:</label><br>
                            <input type="time" style="width: 70px;" name="horaLembrete">
                        </div>
                    </div>
                    <div style="width: 100%; display: flex; justify-content: end; padding-right: 20px;">
                        <button type="submit">Salvar Lembrete</button>
                    </div>
                    <div class="cs-loader" id="loader">
                        <div class="cs-loader-inner">
                            <label>●</label>
                            <label>●</label>
                            <label>●</label>
                            <label>●</label>
                            <label>●</label>
                            <label>●</label>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include "subViews/notificacaoExibi.php" ?>

<script>
    const mySideBar = document.getElementById('mySidebar')

    function openNav() {
        mySideBar.style.width = '400px';
    }

    function closeNav() {
        mySideBar.style.width = '0';
    }
</script>
<script src='<?php echo DIRPAGE . "lib/JS/sideBar.js" ?>'></script>
<script src='<?php echo DIRPAGE . "lib/JS/ajaxLembrete.js" ?>'></script>
<?php \classes\ClassLayout::setFooter(); ?>