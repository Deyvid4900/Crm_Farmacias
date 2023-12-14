<?php
session_start();
include("../lib/vendor/autoload.php");

\Classes\ClassLayout::setHeadDefault("Home");
if (!isset($_SESSION["username"])) {
    header('Location: /');
}
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@300;400;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="<?php echo DIRPAGE . "lib/CSS/headerStyles.css" ?>">
<link rel="stylesheet" href="<?php echo DIRPAGE . "lib/CSS/sideBarStyles.css" ?>">
<link rel="stylesheet" href="<?php echo DIRPAGE . "lib/CSS/Alerta.css" ?>">
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
$evt = new \Models\Eventos;
$tempoRestanteFormatado = new \Models\Eventos;
$eventosProximos = $evt->getProximosEventosComTempoRestante($_SESSION["user_id"]);

\classes\ClassLayout::setHeaderComponente($_SESSION["username"], '', count($eventosProximos));

?>

<!-- conteudo interno da pagina  -->

<link rel="stylesheet" href="/lib/css/tabelaClienteDadosPessoais.css">
    <div class="btns">
        <div style="display: flex;">
            <div class="selected btnLinkTabelas " id="dado" ><span>Dados Pessoais</span>
            </div>
            <div class="btnLinkTabelas" id="Endereco" ><span>Endereços</span></div>
            <div class="btnLinkTabelas" id="contato" ><span>Contatos</span></div>
        </div>
        <div style="display: flex;">
            <div class="btnLinkTabelas" id="editar"><span>Selecionar Item</span></div>
        </div>
    </div>

    <?php include "subViews/tabelaClienteDadosPessoais.php" ?>
    <?php include "subViews/tabelaClienteMarketing.php" ?>
    <?php include "subViews/tabelaClienteEnderecos.php" ?>
    <?php include "subViews/modalFiltro.php" ?>
    <?php include "subViews/notificacaoExibi.php" ?>

    <script src='<?php echo DIRPAGE . "lib/JS/sideBar.js" ?>'></script>
   
    <script>
        $(document).ready(function() {
            let loader = $('#loader');
            // Adicione o evento de clique nos elementos .btnLinkTabelas aqui
            $('.btnLinkTabelas').click(function() {
                // Remover a classe 'selected' de todos os elementos
                $('.btnLinkTabelas').removeClass('selected');

                // Adicionar a classe 'selected' apenas ao elemento clicado
                $(this).addClass('selected');
            });
            $('.btnLinkTabelas').click(function() {
                // Remover a classe 'selected' de todos os elementos
                $('.btnLinkTabelas').removeClass('selected');

                // Adicionar a classe 'selected' apenas ao elemento clicado
                $(this).addClass('selected');
            });
            $("#ContatosCliente")

            $("#tabelaEnderecosCliente").hide()
            $("#ContatosCliente").hide()
            $("#tabelaDados").hide()

            $("#Endereco").click(() => {
                $("#tabelaEnderecosCliente").show()
                $('#tabelaDados').hide()
                $("#ContatosCliente").hide()
                $('#filtroBox').hide()
            })
            $("#dado").click(() => {
                $("#tabelaDados").show()
                $('#tabelaEnderecosCliente').hide()
                $("#ContatosCliente").hide()
                $('#filtroBox').hide()
            })
            $("#contato").click(() => {
                $("#ContatosCliente").show()
                $("#tabelaDados").hide()
                $('#tabelaEnderecosCliente').hide()
                $('#filtroBox').hide()
            })
            $("#editar").click(() => {
                $("#ContatosCliente").hide()
                $("#tabelaDados").hide()
                $('#tabelaEnderecosCliente').hide()
                $('#filtroBox').show()
            })
         
        });
    </script> <script src='<?php echo DIRPAGE . "lib/JS/ajaxBuscaCliente.js" ?>'></script>

<?php \classes\ClassLayout::setFooter(); ?>