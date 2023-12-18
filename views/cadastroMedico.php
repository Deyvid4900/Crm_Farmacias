<?php
session_start();
include("../lib/vendor/autoload.php");
\Classes\ClassLayout::setHeadDefault("Cadastro de Medicos");
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
<?php
include_once("../models/ClassEvento.php");
$evt = new \Models\Eventos;
$eventosProximos = $evt->getProximosEventosComTempoRestante($_SESSION["user_id"]);


\classes\ClassLayout::setHeaderComponente(count($eventosProximos), $_SESSION["username"],''); 
\classes\ClassLayout::setSideComponente();
?>
<?php include "subViews/notificacaoExibi.php" ?>
<?php include "subViews/alerta.php" ?>
<?php include "subViews/cadastroMedicoForm.php" ?>
<!-- conteudo interno da pagina  -->



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
<script src='<?php echo DIRPAGE . "lib/JS/ajaxCadastroMedico.js" ?>'></script>
<?php \classes\ClassLayout::setFooter(); ?>