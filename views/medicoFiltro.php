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

<?php 
include_once ("../models/ClassEvento.php");
$evt=new \Models\Eventos;
$tempoRestanteFormatado=new \Models\Eventos;
$eventosProximos = $evt->getProximosEventosComTempoRestante($_SESSION["user_id"]);

\classes\ClassLayout::setHeaderComponente(count($eventosProximos), $_SESSION["username"],''); 
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
<link rel="stylesheet" href="../lib/css/formFiltroStyles.css">

<!-- class ativo mostra o form -->
<section class="formInit-bg aala ativo" id="b">
    <div class="form-bg">
        <h1>Filtros Médico</h1>
        <form action="../../views/marketingFiltros.php" id="FormFiltro" method="POST">
            <div id="styleForm">
                <div>
                    <label for="filtro">Filtrar por :</label>
                    <select name="filtro" id="filtro">
                        <option value="especialidade" selected>Especialidade</option>
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
                    $resultados = $FiltroObj->buscarValoresSemelhantes($input, $filtro, $_SESSION["user_id"]);

                    if ($resultados !== false && !empty($resultados)) {
                        echo '<table >
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Sexo</th>
                                    <th>celular1</th>
                                    <th>telFixo</th>
                                    <th>email</th>
                                    <th>Selecionar</th>

                                    <!-- Adicione mais colunas conforme necessário -->
                                </tr>';

                        foreach ($resultados as $pessoa) {
                            echo '<tr>';
                            echo '<td>' . $pessoa['id'] . '</td>';
                            echo '<td>' . $pessoa['nome'] . '</td>';
                            echo '<td>' . $pessoa['sexo'] . '</td>';
                            echo '<td>' . $pessoa['celular1'] . '</td>';
                            echo '<td>' . $pessoa['telFixo'] . '</td>';
                            echo '<td>' . $pessoa['email'] . '</td>';
                            echo '<td><input type="checkbox" class="checkboxFiltro" id=' . $pessoa['id'] . '></td>';
                            echo '</tr>';
                        }

                        echo '</table>';
                    } else {
                        echo 'Nenhum resultado encontrado.';
                    }
                }
                ?>
            </div>
        </div>
        <div class="mensagemTipoDiv">
            <div style="display:flex;gap: 20px;">
                <button id="emailBtn" class="mensagemTipo title btnTipoMensagens" title="Mande mensagem por email para todos os que estão marcado" type="submit">Email</button>
                <button id="smsBtn" title="Mande mensagem por SMS para todos os que estão marcado" class="mensagemTipo title btnTipoMensagens" type="submit">SMS</button>
                <button id="whatsBtn" title="Mande mensagem por WhatsApp para todos os que estão marcado" class="mensagemTipo  title btnTipoMensagens" type="submit">WhatsApp</button>
            </div>
            <div>
                <button class="mensagemTipo" id="MaracarTodos" type="submit">Marcar Todos</button>
            </div>
        </div>
    </div>
</section>
<div id="meuModal" class="modal">
    <!-- Conteúdo do Modal -->
    <div class="modal-conteudo">
        <span class="fechar-modal" id="fecharModal">&times;</span>
        <h2>Escreva a mensagem que deseja enviar para os clientes selecionados</h2>
        <div class="mensagemTipoDiv">
            <form id="formMensagem" action="../controllers/controllerMensagem.php" method="post" style="width: 100%;">
                <div style="display: flex; padding: 20px; align-items: start; justify-content: space-around;">
                    <div>
                        <input id="content" name="id" type="hidden" value="">
                        <input  id="tipo" name="tipo" type="hidden" value="">
                    </div>
                    <div class="boxInput">
                        <label for="Assunto">
                            <h3>Assunto:</h3>
                        </label>
                        <input type="text" name="Assunto" class="inputMensagemFiltro">
                    </div>
                    <div class="boxInput">
                        <label for="Mensagem" class="title" title="Você pode aumentar a area de texto clicando e puxando o canto inferior da caixa de texto">
                            <h3>Mensagem:</h3>
                        </label>

                        <textarea name="Mensagem" class="inputMensagemFiltro" style="height: 66px; width: 316px;" cols="30" rows="30">

                        </textarea>
                    </div>
                    
                    <div style="display: flex;justify-content: end;">

                        <button id="btnEnviarFormMensagens" class="mensagemTipo btnTipoMensagens" type="submit">enviar</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>



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