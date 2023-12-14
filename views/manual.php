<?php
session_start();
include_once("../lib/vendor/autoload.php");

 \Classes\ClassLayout::setHeadDefault("Manual"); 
 if (!isset($_SESSION["username"]) ) {
    header('Location: /');
}


?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@300;400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo DIRPAGE . "lib/CSS/headerStyles.css" ?>">
<link rel="stylesheet" href="<?php echo DIRPAGE . "lib/CSS/sideBarStyles.css" ?>">
<link rel="stylesheet" href="<?php echo DIRPAGE . "lib/CSS/manualSide.css" ?>">
<?php 


include_once ("../models/ClassEvento.php");
$evt=new \Models\Eventos;
$tempoRestanteFormatado=new \Models\Eventos;
$eventosProximos = $evt->getProximosEventosComTempoRestante($_SESSION["user_id"]);

\classes\ClassLayout::setHeaderComponente($_SESSION["username"],'',count($eventosProximos)); 
// \classes\ClassLayout::setSideComponente();
?>

<!-- conteudo interno da pagina  -->

<section>
    <div class="titulo-Inicio">
        <div class="titulo">
            <h1>Como funciona</h1>
    
            <p>Principais funcionalidades de como o sistema funciona</p>
        </div>
    </div>
    <div>

    </div>
</section>
<?php include "subViews/notificacaoExibi.php" ?>

<script src='<?php echo DIRPAGE . "lib/JS/sideBar.js" ?>'></script>
<?php \classes\ClassLayout::setFooter(); ?>