<link rel="stylesheet" href="../lib/css/formFiltroStyles.css">

<!-- class ativo mostra o form -->
<section class="formInit-bg aala ativo" id="filtroServicos">
    <div class="form-bg">
        <h1>Alterar/Excluir Servicos</h1>
        <form action="../../views/administracaoServicos.php" id="FormFiltro" method="POST">
            <div id="styleForm">
                <!-- <div style="display: flex;align-items: center; justify-content: center; cursor: help;" title=" Para que os emails sejam enviados corretamentes é necessario que a sua conta de email esteja devidamente configurada, saiba como configura-la na aba 'Configuração do Gmail' no menu lista ao lado do sino de notificações.(Somente para gmails, para outros endereços eletronicos não é necessario configuração ) ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-exclamation-octagon" viewBox="0 0 16 16">
                        <path d="M4.54.146A.5.5 0 0 1 4.893 0h6.214a.5.5 0 0 1 .353.146l4.394 4.394a.5.5 0 0 1 .146.353v6.214a.5.5 0 0 1-.146.353l-4.394 4.394a.5.5 0 0 1-.353.146H4.893a.5.5 0 0 1-.353-.146L.146 11.46A.5.5 0 0 1 0 11.107V4.893a.5.5 0 0 1 .146-.353L4.54.146zM5.1 1 1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1z" />
                        <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                    </svg>
                </div> -->
                <div>
                    <label for="filtro">Filtrar por :</label>
                    <select name="filtro" id="filtro">
                        <option value="id_servicos_PK" selected>Id</option>
                        <option value="nome_responsavel" >Nome do Responsavel</option>
                        <option value="sinais_sintomas">Sinais/Sintomas</option>
                        <option value="data">Data Serviço</option>
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
                    $resultados = $FiltroObj->buscarValoresServicosSemelhantes($input, $filtro, $_SESSION["user_id"]);

                    if ($resultados !== false && !empty($resultados)) {
                        echo '<table >
                                <tr>
                                <th>Id</th>
                                <th>Nome do Paciente</th>
                                <th>Nome do Responsavel</th>
                                <th>Sinais/Sintomas</th>
                                <th>Data do Serviço</th>
                                <th>Selecionar</th>
                                    <!-- Adicione mais colunas conforme necessário -->
                                </tr>';

                        foreach ($resultados as $pessoa) {
                            echo '<tr>';
                            echo '<td>' . $pessoa['id_servicos_PK'] . '</td>';
                            echo '<td>' . $pessoa['nomePaciente'] . '</td>';
                            echo '<td>' . $pessoa['nome_responsavel'] . '</td>';
                            echo '<td>' . $pessoa['sinais_sintomas'] . '</td>';
                            echo '<td>' . $pessoa['dataServicos'] . '</td>';
                            echo '<td><input type="checkbox" class="checkboxFiltro" id=' . $pessoa['id_servicos_PK'] . '></td>';
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
            <div style="display: flex; gap: 20px;">
                <button class="mensagemTipo" id="excluir" style="background-color: rgb(235 87 87);" type="submit">Excluir</button>

                <button class="mensagemTipo" id="Alterar" type="submit">Alterar</button>
            </div>
        </div>
    </div>
</section>
<div id="meuModalExcluir" class="modal" style="z-index: 99999;">
    <!-- Conteúdo do Modal -->
    <div class="modal-conteudo" style="width: 40%;">
        <h2>Essa ação é irreversível,tem certeza que deseja excluir esse registro? </h2>
        <div style="width: 100%; display: flex;justify-content: center;align-items: center;">
            <form id="formMensagem" action="../controllers/controllerExcluirServicos.php" method="post" style="width: 100%;">
                <div style="display: flex;justify-content: center;gap: 40px; margin-top: 20px;">
                    <input type="hidden" name="Excluir" value="sim">
                    <input type="hidden" name="ids" id="idsCliente" value="">
                    <button id="cancelarDelecao" style="background-color:#677571;" class="mensagemTipo btnTipoMensagens" type="submit">Cancelar</button>
                    <button id="btnEnviarFormMensagens" style="background-color: rgb(235 87 87);" class="mensagemTipo btnTipoMensagens" type="submit">Excluir</button>
                </div>
            </form>
        </div>
    </div>
</div>



<script>
    const mySideBar = document.getElementById('mySidebar')
    $('#smsBtn').click((e) => {
        e.preventDefault()
    })
    $('#whatsBtn').click((e) => {
        e.preventDefault()
    })

    function openNav() {
        mySideBar.style.width = '400px';
    }

    function closeNav() {
        mySideBar.style.width = '0';
    }
</script>