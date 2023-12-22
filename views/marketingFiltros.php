<?php

use Models\Consultorio;

session_start();
include("../lib/vendor/autoload.php");
\Classes\ClassLayout::setHeadDefault("Filtro de Cliente");
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
include_once ("../models/ClassConsultorio.php");
$consulta =new Consultorio;
$dataRetorno = $consulta->findAllDataRetorno($_SESSION['user_id']);
$evt = new \Models\Eventos;
$tempoRestanteFormatado = new \Models\Eventos;
$eventosProximos = $evt->getProximosEventosComTempoRestante($_SESSION["user_id"]);

\classes\ClassLayout::setHeaderComponente(count($eventosProximos), $_SESSION["username"], '',count($dataRetorno));
\classes\ClassLayout::setSideComponente();
?>
<!-- conteudo interno da pagina  -->


<?php



if (isset($_POST['conteudoPesquisa'])) {

    include_once "../lib/vendor/autoload.php";
}



?>
<link rel="stylesheet" href="../lib/css/formFiltroStyles.css">

<!-- class ativo mostra o form -->
<section class="formInit-bg aala ativo" id="b">
    <div class="form-bg">
        <h1>Filtro de Cliente</h1>
        <form action="../../views/marketingFiltros.php" id="FormFiltro" method="POST">
            <div id="styleForm">
                <div style="display: flex;align-items: center; justify-content: center; cursor: help;" title=" Para que os emails sejam enviados corretamentes é necessario que a sua conta de email esteja devidamente configurada, saiba como configura-la na aba 'Configuração do Gmail' no menu lista ao lado do sino de notificações.(Somente para gmails, para outros endereços eletronicos não é necessario configuração ) ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-exclamation-octagon" viewBox="0 0 16 16">
                        <path d="M4.54.146A.5.5 0 0 1 4.893 0h6.214a.5.5 0 0 1 .353.146l4.394 4.394a.5.5 0 0 1 .146.353v6.214a.5.5 0 0 1-.146.353l-4.394 4.394a.5.5 0 0 1-.353.146H4.893a.5.5 0 0 1-.353-.146L.146 11.46A.5.5 0 0 1 0 11.107V4.893a.5.5 0 0 1 .146-.353L4.54.146zM5.1 1 1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1z" />
                        <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                    </svg>
                </div>
                <div>
                    <label for="filtro">Filtrar por :</label>
                    <select name="filtro" id="filtro">
                        <option value="id">Id</option>
                        <option value="nome" selected>nome</option>
                        <option value="sexo">sexo</option>
                        <option value="estadoCivil">estado Civil</option>
                        <option value="dataNasc">data Nascimento</option>
                        <option value="profissao">profissão</option>
                        <option value="faixaSalarial">faixa Salarial</option>
                        <option value="cpf">Cpf</option>
                        <option value="escolaridade">escolaridade</option>
                        <option value="religiao">religião</option>
                        <option value="timeFut">time de Futebol</option>
                        <option value="raca">raça</option>
                        <option value="celular1">celular1</option>
                        <option value="celular2">celular2</option>
                        <option value="telFixo">telFixo</option>
                        <option value="email">email</option>

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
                <button id="emailBtn" class="mensagemTipo title btnTipoMensagens" title="Mande mensagem por email para todos os que estão marcado" style="cursor: pointer;" type="submit">Email</button>

                <button id="smsBtn" title="(Liberado somente na 2° versão)Mande mensagem por SMS para todos os que estão marcado" class="mensagemTipo title btnTipoMensagens"  style="background-color: #8d8d8d;"  type="submit">SMS</button>

                <button id="whatsBtn" title="(Liberado somente na 2° versão) Mande mensagem  por WhatsApp para todos os que estão marcado" class="mensagemTipo  title btnTipoMensagens" style="background-color: #8d8d8d;" type="submit">WhatsApp</button>
            </div>
            <div>
                <button class="mensagemTipo" id="MaracarTodos"  type="submit">Marcar Todos</button>
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
                        <input id="tipo" name="tipo" type="hidden" value="">
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

<?php include "subViews/notificacaoExibi.php" ?>

<script>
    const mySideBar = document.getElementById('mySidebar')
    $('#smsBtn').click((e)=>{
        e.preventDefault()
    })
    $('#whatsBtn').click((e)=>{
        e.preventDefault()
    })

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