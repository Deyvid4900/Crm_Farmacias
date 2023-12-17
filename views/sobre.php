<?php
session_start();
include("../lib/vendor/autoload.php");

 \Classes\ClassLayout::setHeadDefault("Sobre"); 
 if (!isset($_SESSION["username"]) ) {
    header('Location: /');
}


?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@300;400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo DIRPAGE . "lib/css/headerStyles.css" ?>">
<link rel="stylesheet" href="<?php echo DIRPAGE . "lib/css/sideBarStyles.css" ?>">
<link rel="stylesheet" href="<?php echo DIRPAGE . "lib/css/homeStyles.css" ?>">
<link rel="stylesheet" href="<?php echo DIRPAGE . "lib/css/pagSobre.css" ?>">
<?php 


include_once ("../models/ClassEvento.php");
$evt=new \Models\Eventos;
$tempoRestanteFormatado=new \Models\Eventos;
$eventosProximos = $evt->getProximosEventosComTempoRestante($_SESSION["user_id"]);

\classes\ClassLayout::setHeaderComponente($_SESSION["username"],'',count($eventosProximos)); 
\classes\ClassLayout::setSideComponente();
?>

<!-- conteudo interno da pagina  -->
<?php include "subViews/notificacaoExibi.php" ?>
<section class="pagSobre-bg">
    <div class="imgSobre">
        <img src="/img/SoluçõesMenor.png" alt="">
    </div>
    <div class="textSobre">
        <div>
            <p class="textOneSobre">Bem-vindo à OD Soluções Web, sua parceira em desenvolvimento web. Somos uma equipe dedicada a transformar ideias em presença digital impactante. Nossa abordagem é centrada no cliente, construindo soluções personalizadas que vão além das expectativas.</p>
            <p class="textTwoSobre">Unimos design atraente, desenvolvimento robusto e estratégias de marketing digital para impulsionar o crescimento dos negócios. Nosso time qualificado oferece desde sites responsivos até funcionalidades avançadas.</p>
        </div>
    </div>
</section>
<script>
   
</script>
<script src='<?php echo DIRPAGE . "lib/JS/sideBar.js" ?>'></script>
<?php \classes\ClassLayout::setFooter(); ?>