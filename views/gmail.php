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
<link rel="stylesheet" href="<?php echo DIRPAGE . "lib/css/headerStyles.css" ?>">
<link rel="stylesheet" href="<?php echo DIRPAGE . "lib/css/sideBarStyles.css" ?>">
<link rel="stylesheet" href="<?php echo DIRPAGE . "lib/css/homeStyles.css" ?>">
<link rel="stylesheet" href="<?php echo DIRPAGE . "lib/css/manualSide.css" ?>">

<?php


include_once("../models/ClassEvento.php");
$evt = new \Models\Eventos;
$tempoRestanteFormatado = new \Models\Eventos;
$eventosProximos = $evt->getProximosEventosComTempoRestante($_SESSION["user_id"]);

\classes\ClassLayout::setHeaderComponente(count($eventosProximos), $_SESSION["username"], '');

?>

<!-- conteudo interno da pagina  -->

<div>
    <div class="servicos-Bg">
        <div class="titServicos">
            <h3>Envio de Emails</h3>
        </div>
    </div>
    <div class="textServicos">
        <div class="flexP">
            <p class="textPServicos"><i>(caso o endereço eletronico do cliente não seja gmail, não é necessario fazer alteração alguma , qualquer duvida consulte o nosso suporte)</i> <br> Para que se possa enviar emails para o endereço eletrônico gmails dos clientes deve-se configurar a senha da sua conta gmail no nosso sistema  </p>
        </div>
    </div>
    <br>
    <div style="display: flex; width: 100%; align-items: center; justify-content: space-around; margin-top: 20px; flex-wrap: wrap">
        <div>
            <img class="ftEmails" src="/img/Captura de Tela (13).png" alt="">
            <h3>Acesse Gerenciar sua conta</h3>
        </div>
    </div>
    <br>
    <div style="display: flex; width: 100%; align-items: center; justify-content: space-around; margin-top: 20px; flex-wrap: wrap">
        <div>
            <img class="ftEmails" src="/img/Captura de Tela (14).png" alt="">
            <h3>Ative a verificação de duas etapas</h3>
        </div>
    </div>
    <br>
    <div style="display: flex; width: 100%; align-items: center; justify-content: space-around; margin-top: 20px; flex-wrap: wrap">
        <div>
            <img class="ftEmails" src="/img/Captura de Tela (15).png" alt="">
            <h3>Click em Senhas de app</h3>
        </div>
    </div>
    <br>
    <div style="display: flex; width: 100%; align-items: center; justify-content: space-around; margin-top: 20px; flex-wrap: wrap">
        <div>
            <img class="ftEmails" src="/img/Captura de Tela (16).png" alt="">
            <h3>Crie um Nome de app para a senha </h3>
        </div>
    </div>
    <br>
    <div style="display: flex; width: 100%; align-items: center; justify-content: space-around; margin-top: 20px; flex-wrap: wrap">
        <div>
            <img class="ftEmails" src="/img/Captura de Tela (17).png" alt="">
            <h3>Voçe recebera uma senha na qual você irá cadastrar em nosso menu Configurações</h3>
        </div>
    </div>
    <br>
</div>



<?php include "subViews/notificacaoExibi.php" ?>


<script>

</script>
<script src='<?php echo DIRPAGE . "lib/JS/sideBar.js" ?>'></script>
<?php \classes\ClassLayout::setFooter(); ?>