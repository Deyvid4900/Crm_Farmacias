<?php

use Models\Filtros;

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
<link rel="stylesheet" href="<?php echo DIRPAGE . "lib/CSS/homeStyles.css" ?>">

<?php
\classes\ClassLayout::setHeaderComponente($_SESSION["username"]);
\classes\ClassLayout::setSideComponente();

?>
<!-- conteudo interno da pagina  -->


<?php



if (isset($_POST['conteudoPesquisa'])) {

    include_once "../lib/vendor/autoload.php";
}



?>
<link rel="stylesheet" href="../lib/CSS/formFiltroStyles.css">

<!-- class ativo mostra o form -->
<section class="formInit-bg aala ativo" id="b">
    <div class="form-bg">
        <h1>Filtros</h1>
        <form action="../../views/marketingFiltros.php" method="POST">
            <div id="styleForm">
                <div>
                    <label for="filtro">Filtrar por :</label>
                    <select name="filtro" id="filtro">
                        <option value="id">Id</option>
                        <option value="nome" selected >nome</option>
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
                        <option value="tipocliente">tipocliente</option>
                        <option value="celular1">celular1</option>
                        <option value="celular2">celular2</option>
                        <option value="telFixo">telFixo</option>
                        <option value="email">email</option>

                    </select>
                </div>
                <div>
                    <label class="cidad" for="conteudoPesquisa">Conteúdo </label>
                    <input type="text" name="conteudoPesquisa" id="conteudo" placeholder="conteúdo da pesquisa" autocomplete="off">
                </div>
                <div><button type="submit">Filtrar</button></div>
            </div>

        </form>
        <div class="mensagemTipoDiv">
            <div style="display:flex;gap: 20px;">
                <button id="emailBtn" class="mensagemTipo btnTipoMensagens" title="Mande mensagem por email para todos os que estão marcado" type="submit" >Email</button>
                <button id="smsBtn"  title="Mande mensagem por SMS para todos os que estão marcado" class="mensagemTipo btnTipoMensagens" type="submit">SMS</button>
                <button id="whatsBtn"  title="Mande mensagem por WhatsApp para todos os que estão marcado" class="mensagemTipo btnTipoMensagens" type="submit">WhatsApp</button>
            </div>
            <div>
                <button class="mensagemTipo" id="MaracarTodos" type="submit">Marcar Todos</button>
            </div>
        </div>
        <div class="styleForm">
            <?php

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                include_once DIRREQ . '/models/ClassFiltro.php';
                $input = $_POST['conteudoPesquisa'] ?? '';
                $filtro = $_POST['filtro'] ?? '';

                $FiltroObj = new Filtros;
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
</section>
<div id="meuModal" class="modal">
    <!-- Conteúdo do Modal -->
    <div class="modal-conteudo">
        <span class="fechar-modal" id="fecharModal">&times;</span>
        <p>Conteúdo do modal aqui.</p>
        <h1 id="content"></h1>
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