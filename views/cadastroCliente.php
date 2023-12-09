<?php 
session_start();
include("../lib/vendor/autoload.php");
 \Classes\ClassLayout::setHeadDefault("Home"); 
 if (!isset($_SESSION["username"]) ) {
    header('Location: /');
}
?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@300;400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo DIRPAGE . "lib/CSS/headerStyles.css" ?>">
<link rel="stylesheet" href="<?php echo DIRPAGE . "lib/CSS/sideBarStyles.css" ?>">
<link rel="stylesheet" href="<?php echo DIRPAGE . "lib/CSS/homeStyles.css" ?>">
<?php 


include_once ("../models/ClassEvento.php");
$evt=new \Models\Eventos;
$tempoRestanteFormatado=new \Models\Eventos;
$eventosProximos = $evt->getProximosEventosComTempoRestante($_SESSION["user_id"]);

\classes\ClassLayout::setHeaderComponente($_SESSION["username"],'',count($eventosProximos)); 
\classes\ClassLayout::setSideComponente();
?>
<!-- conteudo interno da pagina  -->
<?php include "subViews/cadastroClienteForm.php" ?>
<?php include "subViews/notificacaoExibi.php" ?>
<?php include "subViews/alerta.php" ?>
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
<script src='<?php echo DIRPAGE . "lib/JS/ajaxCadastroCliente.js" ?>'></script>
<?php \classes\ClassLayout::setFooter(); ?>