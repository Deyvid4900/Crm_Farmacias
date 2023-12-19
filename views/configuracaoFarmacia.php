<?php

use Models\Consultorio;

session_start();
include_once("../lib/vendor/autoload.php");

 \Classes\ClassLayout::setHeadDefault("configurações"); 
 if (!isset($_SESSION["username"]) ) {
    header('Location: /');
}


?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@300;400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo DIRPAGE . "lib/css/headerStyles.css" ?>">
<link rel="stylesheet" href="<?php echo DIRPAGE . "lib/css/sideBarStyles.css" ?>">
<link rel="stylesheet" href="<?php echo DIRPAGE . "lib/css/config.css" ?>">
<?php 

include_once ("../models/ClassEvento.php");
include_once ("../models/ClassConsultorio.php");
$consulta =new Consultorio;
$dataRetorno = $consulta->findAllDataRetorno($_SESSION['user_id']);
$evt=new \Models\Eventos;
$tempoRestanteFormatado=new \Models\Eventos;
$eventosProximos = $evt->getProximosEventosComTempoRestante($_SESSION["user_id"]);

\classes\ClassLayout::setHeaderComponente(count($eventosProximos), $_SESSION["username"],'',count($dataRetorno)); 
// \classes\ClassLayout::setSideComponente();
?>

<!-- conteudo interno da pagina  -->


<?php include "subViews/configBox.php" ?>
<?php include "subViews/notificacaoExibi.php" ?>

<script>
   
</script>
<script src='<?php echo DIRPAGE . "lib/JS/sideBar.js" ?>'></script>
<?php \classes\ClassLayout::setFooter(); ?>