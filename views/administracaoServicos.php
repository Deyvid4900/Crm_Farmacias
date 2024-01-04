<?php

use Models\Consultorio;
use Models\Lembrete;

session_start();
include_once("../lib/vendor/autoload.php");

\Classes\ClassLayout::setHeadDefault("Home");
if (!isset($_SESSION["username"])) {
    header('Location: /');
}
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@300;400;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="<?php echo DIRPAGE . "lib/css/headerStyles.css" ?>">
<link rel="stylesheet" href="<?php echo DIRPAGE . "lib/css/sideBarStyles.css" ?>">
<link rel="stylesheet" href="<?php echo DIRPAGE . "lib/css/Alerta.css" ?>">
<style>
    span {
        color: #fff;
        cursor: pointer;
    }


    .header-bg {
        width: 100%;
        background-color: #247158;
        box-shadow: none !important;
        height: 72px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-right: 50px;
        gap: 10px;
        position: fixed;
        z-index: 99 !important;
    }

    .content {
        margin-top: 50px;

    }
</style>

<?php
include_once("../models/ClassEvento.php");
include_once("../models/ClassConsultorio.php");
include_once ("../models/ClassLembrete.php");
$obj=new Lembrete;
$lembretes = $obj->findNextWeekReminders($_SESSION['user_id']);
$consulta = new Consultorio;
$dataRetorno = $consulta->findAllDataRetorno($_SESSION['user_id']);
$evt = new \Models\Eventos;
$tempoRestanteFormatado = new \Models\Eventos;
$eventosProximos = $evt->getProximosEventosComTempoRestante($_SESSION["user_id"]);

\classes\ClassLayout::setHeaderComponente(count($eventosProximos), $_SESSION["username"], '', count($dataRetorno),count($lembretes));

?>

<!-- conteudo interno da pagina  -->

<link rel="stylesheet" href="/lib/css/tabelaClienteDadosPessoais.css">
<div class="btns">
    <div style="display: flex;">
        <div class="btnLinkTabelas " id="Consultas"><span>Consultas</span>
        </div>
        <div class="selected btnLinkTabelas" id="Servicos"><span>Serviços</span></div>
    </div>
</div>



<?php include_once "subViews/notificacaoExibi.php" ?>
<?php include_once "subViews/filtroServicos.php" ?>
<?php include_once "subViews/modalFiltro.php" ?>

<script src='<?php echo DIRPAGE . "lib/JS/sideBar.js" ?>'></script>

<script>
    $(document).ready(function() {
        // Adicione o evento de clique nos elementos .btnLinkTabelas aqui
        $('#Consultas').click(function() {
            var urlAtual = window.location.href;

            // Substitua '/administracaoServicos.php' por algo diferente
            var novaParteDaURL = '/administracao.php';
            var novaURL = urlAtual.replace('/administracaoServicos.php', novaParteDaURL);

            // Atualize a URL
            window.location.href = novaURL;
        });
        $('#Servicos').click(function() {
            var urlAtual = window.location.href;

            // Substitua '/administracaoServicos.php' por algo diferente
            var novaParteDaURL = '/administracaoServicos.php';
            var novaURL = urlAtual.replace('/administracao.php', novaParteDaURL);

            // Atualize a URL
            window.location.href = novaURL;
        });

        $("#filtroBox").hide()


        //Modal de Excluir
        $("#excluir").click((e) => {
            e.preventDefault()
            $("#meuModalExcluir").show()
        })
        $("#cancelarDelecao").click((e) => {
            e.preventDefault()
            $("#meuModalExcluir").hide()
        })


        //Modal de alterar
        $("#Alterar").click((e) => {
            e.preventDefault()
            $("#meuModalAlterar").show()
        })
        $("#cancelarAlterarCliente").click((e) => {
            e.preventDefault()
            $("#meuModalAlterar").hide()
        })
    
       
    
    

    });
</script>



<?php \classes\ClassLayout::setFooter(); ?>