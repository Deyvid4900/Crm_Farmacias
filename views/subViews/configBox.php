<?php
include_once("../lib/vendor/autoload.php");
include_once '../models/ClassEvento.php';
include_once '../models/ClassQueryInfoFarmacia.php';

?>
<link rel="stylesheet" href="config.css">
<div class="container" style="margin-bottom: 100px;">
    <div class="head">
        <h1>Configurações</h1>
    </div>
    <form action="/controllers/controllerConfigFarmacia.php" id="formUpdateConfig" method="POST">
        <div style="width: 100%;text-align: center;">
            <i style="color:#afafaf;">Após atualizar os dados re-logue na conta para atualização no app</i>
        </div>
        <div class="content">

            <div class="divInformacaoBasicas">

                <span class="titulos">Informações Básicas</span>
                <div class="campoAjustarNome">
                    <label for="nome">Nome:</label><br>
                    <input type="text" id="nome" name="nomeFarmacia" placeholder="<?php echo empty($farmacias["nomeFarmacia"]) ? 'Digite o nome da sua farmácia' : $farmacias["nomeFarmacia"]; ?>">
                </div>
                <div class="campoAjustarNome">
                    <label for="email">E-mail:</label><br>
                    <input type="email" id="email" name="emailFarmacia" placeholder="<?php echo empty($farmacias["emailFarmacia"]) ? 'Digite o email da sua farmácia' : $farmacias["emailFarmacia"]; ?>">
                </div>
                <div class="campoAjustarNome">
                    <label for="cnpj">CNPJ:</label><br>
                    <input type="number" id="cnpj" minlength="8" name="cnpjFarmacia" placeholder="<?php echo empty($farmacias["cnpjFarmacia"]) ? 'Digite o CNPJ da sua farmácia' : $farmacias["cnpjFarmacia"]; ?>">
                </div>
                <div class="campoAjustarNome">
                    <label for="razaoSocial">Razão Social:</label><br>
                    <input type="text" id="razaoSocial" name="razaoSocial" placeholder="<?php echo empty($farmacias["razaoSocial"]) ? 'Digite a Razão Social da sua farmácia' : $farmacias["razaoSocial"]; ?>">
                </div>
                <div class="campoAjustarNome">
                    <label for="celular">Celular:</label><br>
                    <input type="tel" id="celular" name="numeroFarmacia" placeholder="<?php echo empty($farmacias["numeroFarmacia"]) ? 'Digite o numero de Celular da sua farmácia' : $farmacias["numeroFarmacia"]; ?>">
                </div>
                <div class="campoAjustarNome">
                    <label for="telefone">Telefone:</label><br>
                    <input type="tel" id="telefone" name="telefoneFarmacia" placeholder="<?php echo empty($farmacias["telefoneFarmacia"]) ? 'Digite o numero de telefone da sua farmácia' : $farmacias["telefoneFarmacia"]; ?>">
                </div>
                <div class="campoAjustarNome">
                    <label for="dataCriacao">Senha Gmail</label><br>
                    <input type="text" id="dataCriacao" name="senhaEmail" placeholder="Coloque aqui sua senha de app gmail configurada">
                </div>
                <div class="campoAjustarNome">
                    <label for="dataCriacao">Data de criação da empresa:</label><br>
                    <input type="date" id="dataCriacao" name="dataCriacaoFarmacia">
                </div>
            </div>
            <!-- Enderecos -->
            <div class="divInformacaoEnderecos">
                <span class="titulos">Endereço</span>
                <div class="campoAjustarNome">
                    <label class="logra" for="logradouro">Logradouro</label><br>
                    <input type="text" name="logradouro" id="logradouro" placeholder="<?php echo empty($farmacias["logradouro"]) ? 'Digite o logradouro...' : $farmacias["logradouro"]; ?>" autocomplete="off">
                </div>
                <div class="campoAjustarNome">
                    <label class="cepNumber" for="numeroCep">Número</label><br>
                    <input type="number" name="numeroCasa" placeholder="<?php echo empty($farmacias["numeroCasa"]) ? 'Digite o Número da casa' : $farmacias["numeroCasa"]; ?>" id="numeroCep" autocomplete="off">
                </div>
                <div class="campoAjustarNome">
                    <label class="bairroStyle" for="bairro">Bairro</label><br>
                    <input type="text" name="bairro" id="bairro" placeholder="<?php echo empty($farmacias["bairro"]) ? 'Digite o Bairro' : $farmacias["bairro"]; ?>" autocomplete="off">
                </div>

                <div class="campoAjustarNome">
                    <label class="comple" for="complemento">Complemento</label><br>
                    <input type="text" name="complemento" id="complemento" placeholder="<?php echo empty($farmacias["complemento"]) ? 'Digite o Complemento' : $farmacias["complemento"]; ?>" autocomplete="off">
                </div>
                <div class="campoAjustarNome">
                    <label class="cidad" for="cidade">Cidade</label><br>
                    <input type="text" name="cidade" id="cidade" placeholder="<?php echo empty($farmacias["cidade"]) ? ' Digite a Cidade' : $farmacias["cidade"]; ?>" autocomplete="off">
                </div>
                <div class="campoAjustarNome">
                    <label for="uf">UF</label>
                    <select name="uf" id="uf">
                        <?php echo empty($farmacias["uf"]) ?
                            '<option value="ac">AC</option>
                         <option value="al">AL</option>
                         <option value="ap">AP</option>
                         <option value="am">AM</option>
                         <option value="ba">BA</option>
                         <option value="ce">CE</option>
                         <option value="df">DF</option>
                         <option value="es">ES</option>
                         <option value="go">GO</option>
                         <option value="ma">MA</option>
                         <option value="mt">MT</option>
                         <option value="ms">MS</option>
                         <option value="mg">MG</option>
                         <option value="pa">PA</option>
                         <option value="pb">PB</option>
                         <option value="pr">PR</option>
                         <option value="pe">PE</option>
                         <option value="pi">PI</option>
                         <option value="rj">RJ</option>
                         <option value="rn">RN</option>
                         <option value="rs">RS</option>
                         <option value="ro">RO</option>
                         <option value="rr">RR</option>
                         <option value="sc">SC</option>
                         <option value="sp">SP</option>
                         <option value="se">SE</option>
                         <option value="to">TO</option>'
                            : '<option value="' . $farmacias["uf"] . '">' . $farmacias["uf"] . '</option><option value="ac">AC</option>
                            <option value="al">AL</option>
                            <option value="ap">AP</option>
                            <option value="am">AM</option>
                            <option value="ba">BA</option>
                            <option value="ce">CE</option>
                            <option value="df">DF</option>
                            <option value="es">ES</option>
                            <option value="go">GO</option>
                            <option value="ma">MA</option>
                            <option value="mt">MT</option>
                            <option value="ms">MS</option>
                            <option value="mg">MG</option>
                            <option value="pa">PA</option>
                            <option value="pb">PB</option>
                            <option value="pr">PR</option>
                            <option value="pe">PE</option>
                            <option value="pi">PI</option>
                            <option value="rj">RJ</option>
                            <option value="rn">RN</option>
                            <option value="rs">RS</option>
                            <option value="ro">RO</option>
                            <option value="rr">RR</option>
                            <option value="sc">SC</option>
                            <option value="sp">SP</option>
                            <option value="se">SE</option>
                            <option value="to">TO</option>' ?>

                    </select>
                </div>

                <div class="campoAjustarNome">
                    <label class="referenStyle" for="referencia">Referência</label><br>
                    <input type="text" name="referencia" id="referencia" placeholder="<?php echo empty($farmacias["referencia"]) ? 'Próximo a..., perto de...' : $farmacias["referencia"]; ?>" autocomplete="off">
                </div>


                <!-- Adicione mais campos conforme necessário -->
            </div>

            <!-- <div class="divInformacaoBasicas" style="margin-top: 40px;">
                <span class="titulos">Usabilidade</span>
                <div class="campoAjustarNome">
                    <label for="nome">Mostrar Notificação</label>
                   
                        <div class="divCheck" id="checks" style="gap: 10px;">
                            <div class="divCheck">
                                <p>Eventos</p><input type="checkbox" name="eventosChek" id="">
                            </div>
                            <div class="divCheck">
                                <p>Retorno de consultas</p><input type="checkbox" name="dataConsultaCheck" id="">
                            </div >
                            <div class="divCheck">
                                <p>Lembretes</p><input type="checkbox" name="lembretesCheck" id="">
                            </div>
                        </div>
                    
                </div>
            </div> -->

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
        <div style="width: 100%; display: flex; justify-content: end;padding: 10px;"><button style="background-color: #0c4b36; padding: 10px 20px; border: none; color: #fff; cursor: pointer; border-radius: 3px;"><?php echo  !$atualizar ? 'Adicionar' : 'Atualizar'; ?> </button></div>
    </form>
</div>
<!-- <script src="/lib/JS/configFetch.js"></script> -->