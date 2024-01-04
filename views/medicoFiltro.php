<?php

use Models\Consultorio;
use Models\Lembrete;

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

<?php 
include_once ("../models/ClassEvento.php");
include_once ("../models/ClassConsultorio.php");

include_once ("../models/ClassLembrete.php");
$obj=new Lembrete;
$lembretes = $obj->findNextWeekReminders($_SESSION['user_id']);

$consulta =new Consultorio;
$dataRetorno = $consulta->findAllDataRetorno($_SESSION['user_id']);
$evt=new \Models\Eventos;
$tempoRestanteFormatado=new \Models\Eventos;
$eventosProximos = $evt->getProximosEventosComTempoRestante($_SESSION["user_id"]);

\classes\ClassLayout::setHeaderComponente(count($eventosProximos), $_SESSION["username"],'',count($dataRetorno),count($lembretes)); 
\classes\ClassLayout::setSideComponente();
?>
<!-- conteudo interno da pagina  -->
<?php include "subViews/notificacaoExibi.php" ?>
<?php include "subViews/alerta.php" ?>
<?php



if (isset($_POST['conteudoPesquisa'])) {

    include_once "../lib/vendor/autoload.php";
}



?>
<link rel="stylesheet" href="../lib/css/formFiltroMedicoStyles.css">

<!-- class ativo mostra o form -->
<section class="formInit-bg aala ativo" id="b">
    <div class="form-bg">
        <h1>Filtros Médico</h1>
        <form action="../../views/medicoFiltro.php" id="FormFiltro" method="POST">
            <div id="styleForm">
                <div>
                    <label for="filtro">Filtrar por :</label>
                    <select name="filtro" id="filtro">
                        <option value="especialidade" selected>Nome</option>
                        <option value="especialidade" >Especialidade</option>
                        <option value="atuacao">Atuação</option>
                        <option value="hospital">Hospital que atua</option>
                        <!-- <option value="estadoCivil">estado Civil</option> -->

                    </select>
                </div>
                <div>
                    <label class="cidad" for="conteudoPesquisa">Conteúdo: </label>
                    <input type="text" name="conteudoPesquisa" id="conteudo" placeholder="conteúdo da pesquisa" autocomplete="off">
                </div>
                <div><button type="submit">Filtrar</button></div>
            </div>

        </form>

        <div class="styleForm">
            <div class="tabela-container">
           
                <?php
                include_once "subViews/notificacaoExibi.php";
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    include_once DIRREQ . '/models/ClassFiltro.php';
                    $input = $_POST['conteudoPesquisa'] ?? '';
                    $filtro = $_POST['filtro'] ?? '';

                    $FiltroObj = new Models\Filtros;
                    $resultados = $FiltroObj->buscarValoresSemelhantesMedico($input, $filtro, $_SESSION["user_id"]);

                    if ($resultados !== false && !empty($resultados)) {
                        echo '<table >
                                <tr>
                                    <th>Nome</th>
                                    <th>Sexo</th>
                                    <th>email</th>
                                    <th>Telefone</th>
                                    <th>Especialidade</th>
                                    <th>Atuação</th>
                                    <th>Hospital</th>
                                </tr>';

                        foreach ($resultados as $pessoa) {
                            echo '<tr>';

                            echo '<td>' . $pessoa['nome'] . '</td>';
                            echo '<td>' . $pessoa['sexo'] . '</td>';
                            echo '<td>' . $pessoa['email'] . '</td>';
                            echo '<td>' . $pessoa['celular1'] . '</td>';
                            echo '<td>' . $pessoa['especialidade'] . '</td>';
                            echo '<td>' . $pessoa['atuacao'] . '</td>';
                            echo '<td>' . $pessoa['hospital_atual'] . '</td>';
                        
                        }

                        echo '</table>';
                    } else {
                        echo 'Nenhum resultado encontrado.';
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>



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
<script src='<?php echo DIRPAGE . "lib/JS/filtro.js" ?>'></script>

<?php \classes\ClassLayout::setFooter(); ?>