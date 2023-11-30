<link rel="stylesheet" href="../../lib/CSS/formFiltroStyles.css">

<!-- class ativo mostra o form -->
<section class="formInit-bg aala ativo" id="b">
    <div class="form-bg">
        <h1>Filtros</h1>
        <form action="../../controllers/controllerFiltro.php" method="POST">
            <div id="styleForm">
                <div>
                    <label for="filtro">Filtrar por :</label>

                    <select name="filtro" id="filtro">
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
                    <label class="cidad" for="conteudoPesquisa">Conteudo </label>
                    <input type="text" name="conteudoPesquisa" id="conteudo" placeholder="conteudo da pesquisa" autocomplete="off">
                </div>
            </div>



            <button type="submit">Filtrar</button>
        </form>
    </div>
</section>