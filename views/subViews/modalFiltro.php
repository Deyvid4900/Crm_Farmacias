<link rel="stylesheet" href="../lib/css/modalFiltroStyles.css">

<section id="filtroBox" class="formInit-bg aala ativo" id="b">
    <div class="form-bg ">
        <h1>Seleção de Cliente</h1>
        <form action="/lib/JS/ajaxBuscaCliente.js" id="FormFiltro" method="POST">
            <div id="styleForm">
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
            <div class="cs-loader" id="loader">
                <div class="cs-loader-inner">
                    <label>●</label>
                    <label>●</label>
                    <label>●</label>
                    <label>●</label>
                    <label>●</label>
                    <label>●</label>
                </div>
            </div>

        </form>
        <form action="" method="post">
            <div class="styleForm">
                <div class="tabela-container">
                    <style>
                        td {
                            text-align: center;
                        }
                    </style>

                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Sexo</th>
                                <th>celular1</th>
                                <th>telFixo</th>
                                <th>email</th>
                                <th>Selecionar</th>

                                <!-- Adicione mais colunas conforme necessário -->
                            </tr>
                        </thead>
                        <tbody id="resultadoQueryCliente">

                        </tbody>


                    </table>

                </div>
            </div>
            <div class="mensagemTipoDiv">
                <div style="display: flex; gap: 20px;">
                    <button class="mensagemTipo" id="excluir" style="background-color: rgb(235 87 87);" type="submit">Excluir</button>

                    <button class="mensagemTipo" id="MaracarTodos" type="submit">Alterar</button>
                </div>
            </div>
        </form>
    </div>
</section>
<div id="meuModal" class="modal" style="z-index: 99999;">
    <!-- Conteúdo do Modal -->
    <div class="modal-conteudo" style="width: 40%;">
        <h2>Tem certeza que deseja excluir esse registro ?</h2>
        <div style="width: 100%; display: flex;justify-content: center;align-items: center;">
            <form id="formMensagem" action="../controllers/controllerMensagem.php" method="post" style="width: 100%;">
                <div style="display: flex;justify-content: center;gap: 40px; margin-top: 20px;">
                    <button id="cancelarDelecao" style="background-color:#677571;"  class="mensagemTipo btnTipoMensagens" type="submit" >Cancelar</button>
                    <button id="btnEnviarFormMensagens" style="background-color: rgb(235 87 87);" class="mensagemTipo btnTipoMensagens" type="submit">Excluir</button>
                </div>
            </form>
        </div>
    </div>
</div>