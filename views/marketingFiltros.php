<?php

use Models\Filtros;

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
                        <option value="nome">nome</option>
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
            </div>
            <button type="submit">Filtrar</button>
        </form>
        <div class="styleForm">
            <?php
            
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                include_once DIRREQ.'/models/ClassFiltro.php';    
                $input = $_POST['conteudoPesquisa'] ?? '';
                $filtro = $_POST['filtro'] ?? '';

                $FiltroObj = new Filtros;
                $resultados = $FiltroObj->buscarValoresSemelhantes($input, $filtro);

                if ($resultados !== false && !empty($resultados)) {
                    echo '<table >
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Sexo</th>
                                    <th>celular1</th>
                                    <th>celular2</th>
                                    <th>telFixo</th>
                                    <th>email</th>

                                    <!-- Adicione mais colunas conforme necessário -->
                                </tr>';

                    foreach ($resultados as $pessoa) {
                        echo '<tr>';
                        echo '<td>' . $pessoa['id'] . '</td>';
                        echo '<td>' . $pessoa['nome'] . '</td>';
                        echo '<td>' . $pessoa['sexo'] . '</td>';
                        echo '<td>' . $pessoa['celular1'] . '</td>';
                        echo '<td>' . $pessoa['celular2'] . '</td>';
                        echo '<td>' . $pessoa['telFixo'] . '</td>';
                        echo '<td>' . $pessoa['email'] . '</td>';
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
<?php \classes\ClassLayout::setFooter(); ?>