<?php

use Models\Consultorio;

session_start();
include("../lib/vendor/autoload.php");

 \Classes\ClassLayout::setHeadDefault("Suporte"); 
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
<link rel="stylesheet" href="<?php echo DIRPAGE . "lib/css/suporte.css" ?>" >
<?php 


include_once ("../models/ClassEvento.php");
include_once ("../models/ClassConsultorio.php");
$consulta =new Consultorio;
$dataRetorno = $consulta->findAllDataRetorno($_SESSION['user_id']);
$evt=new \Models\Eventos;
$tempoRestanteFormatado=new \Models\Eventos;
$eventosProximos = $evt->getProximosEventosComTempoRestante($_SESSION["user_id"]);

\classes\ClassLayout::setHeaderComponente(count($eventosProximos), $_SESSION["username"],'',count($dataRetorno)); 
\classes\ClassLayout::setSideComponente();
?>
<?php include "subViews/notificacaoExibi.php" ?>
<!-- conteudo interno da pagina  -->

<section class="pagSobre-bg">
   <div class="pagCentro">
       <div class='centro'>
            <h1 class="textH1">Suporte</h1>
            <img src="/img/headset.svg" alt="">
       </div>
   </div>

   <div class="contatoCentro">
       <div>
            <h3>Entre em Contato</h3>
            <p>Em caso de dúvida ou problema entre em contato conosco para solucionarmos e resolvermos o mais rápido possível . Nossa equipe estará pronta para responder a todas as suas perguntas e fornecer orientações especializadas.</p>
       </div>
   </div>

   <div class="contatoCentroLast">
       <div>
            <h3>Detalhes do Contato</h3>
            <p>Telefone: [Inclua o número de telefone]</p>
            <p>E-mail: [Inclua o endereço de e-mail]</p>
       </div>
   </div>
</section>

<script>
   
</script>
<script src='<?php echo DIRPAGE . "lib/JS/sideBar.js" ?>'></script>
<?php \classes\ClassLayout::setFooter(); ?>