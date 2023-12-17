<link rel="stylesheet" href="../../lib/css/formClienteStyles.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
<!-- class ativo mostra o form -->
<section class="formInit-bg w ativo " id="b">
    <div class="form-bg">
        <div class="head">
            <h1>Clientes</h1>
        </div>
        <form action="../../controllers/controllerClienteCadastro.php" id="formCLiente" method="POST">
            <div id="styleForm">
                <div class="flexForm">
                    <input type="number" name='Id_Farmacia_FK ' value="<?php echo $_SESSION["user_id"] ?>" style="display: none;">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" placeholder="Nome do Cliente" id="nome" autocomplete="off">
                    <label class="nCliente" for="numero"></label>
                    <input type="hidden" name="numero" placeholder="Numero do Cliente" id="numero" autocomplete="off">
                    <label class="cPf" for="cpf">CPF</label>
                    <input type="text" name="cpf" placeholder="cpf do cliente" id="cpf" maxlength="15" autocomplete="off">
                    <!-- mexer cpf validar formato -->
                </div>
                <div class="formAlinhado">
                    <div class="flexCol1">
                        <div class="padDown">
                            <label for="sx" class="aaaa">Sexo</label>
                            <select name="sexo" id="sx">
                                <option value="masculino">Masculino</option>
                                <option value="feminino">Feminino</option>
                            </select>
                        </div>
                        <div class="padDown">
                            <label for="profissao" class="aprof">Profissão</label>
                            <input type="text" name="profissao" placeholder="Profissão do cliente" id="profissao" autocomplete="off">
                        </div>
                        <div>
                            <label for="religiao" class="arelig">Religião</label>
                            <input type="text" name="religiao" id="religiao" placeholder="Religião do cliente" autocomplete="off">
                        </div>
                        <div style="display: flex; height: 30px; width: 100%;justify-content: end;">
                            <label for="timeFut" class="arelig" style="margin-right:6px;">Time</label>
                            <input type="text" name="timeFut" id="timeFut" placeholder="time de futbol" autocomplete="off">
                        </div>
                    </div>
                    <div class="flexCol2">
                        <div class="padDown">
                            <label class="estadoCivil" for="estado-civil">Estado Civil</label>
                            <select name="estadoCivil" id="estado-civil">
                                <option value="solteiro">Solteiro</option>
                                <option value="casado">Casado</option>
                                <option value="separado">Separado</option>
                                <option value="divorciado">Divorciado</option>
                                <option value="viuvo">Viúvo</option>
                            </select>
                        </div>
                        <div class="padDown">
                            <label for="faixaSalarial">Faixa Salarial</label>
                            <select name="faixaSalarial" id="faixaSalarial">
                                <option value="mil">R$1000 à R$3000</option>
                                <option value="mil3">R$3000 à R$5000</option>
                                <option value="mil5">R$5000 à R$10Mil</option>
                                <option value="maxSalario">Acima de R$10Mil</option>
                            </select>
                        </div>
                        <div>
                            <label class="escolaridadee" for="escolaridade">Escolaridade</label>
                            <select name="escolaridade" id="escolaridade">

                                <option value="ensinoFundInc">Ensino Fundamental Incompleto</option>
                                <option value="ensinoFundComp">Ensino Fundamental Completo</option>
                                <option value="ensinoMedInc">Ensino Médio Incompleto</option>
                                <option value="ensinoMedComp">Ensino Médio Completo</option>
                                <option value="superiorInc">Superior Incompleto</option>
                                <option value="superiorCom">Superior Completo</option>
                            </select>
                        </div>
                    </div>
                    <div class="flexCol2">
                        <div class="padDown">
                            <label for="dataNascimento">Data de Nascimento</label>
                            <input type="date" name="dataNasc" id="dataNascimento">
                        </div>
                        <div class="padDown">
                            <label class="inputIden" for="identidade">Identidade</label>
                            <input type="text" name="identidade" placeholder="RG" id="identidade" autocomplete="off">
                        </div>
                        <div>
                            <label class="racaLabel" for="raca">Raça</label>
                            <select name="raca" id="raca" class="raCaa">
                                <option value="branco">Branco</option>
                                <option value="preto">Preto</option>
                                <option value="pardo">Pardo</option>
                                <option value="amarelo">Amarelo</option>
                                <option value="indigena">Indígena</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>

            <div>
                <div id="styleForm1">
                    <div class="padDown1">
                        <label class="logra" for="logradouro">Logradouro</label>
                        <input type="text" name="logradouro" id="logradouro" placeholder="Rua,Avenida..." autocomplete="off">
                        <label class="cepNumber" for="numeroCep">Número</label>
                        <input type="number" name="numeroCasa" placeholder="Numero da casa" id="numeroCep" autocomplete="off">
                        <label class="bairroStyle" for="bairro">Bairro</label>
                        <input type="text" name="bairro" id="bairro" placeholder="Bairro" autocomplete="off">
                    </div>
                    <div class="padDown1">
                        <label class="comple" for="complemento">Complemento</label>
                        <input type="text" name="complemento" id="complemento" placeholder="Complemento" autocomplete="off">
                        <label class="cidad" for="cidade">Cidade</label>
                        <input type="text" name="cidade" id="cidade" placeholder="Cidade" autocomplete="off">
                        <label for="uf">UF</label>
                        <select name="uf" id="uf">

                            <option value="ac">AC</option>
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
                            <option value="to">TO</option>
                        </select>
                    </div>
                    <div>
                        <label class="referenStyle" for="referencia">Referência</label>
                        <input type="text" name="referencia" id="referencia" placeholder="Próximo a.... , perto de..." autocomplete="off">
                    </div>
                </div>
            </div>
            <div>
                <div id="styleForm2">
                    <div class="padDown1">
                        <label class="Cel1" for="cel1">Celular 1°</label>
                        <input type="text" name="celular1" id="cel1" placeholder=" (DDD) 99999-9999" autocomplete="off">
                        <label for="cel2">Celular 2°</label>
                        <input type="text" name="celular2" id="cel2" placeholder=" (DDD) 99999-9999" autocomplete="off">
                        <label for="tel1">Tel Fixo</label>
                        <input type="text" name="telFixo" id="tel1" placeholder=" (DDD) 3500-0000" autocomplete="off">

                    </div>
                    <div class="padDown1 " style="    margin-left: 28px;">
                        <label for="mail">Email</label>
                        <input type="text" name="email" id="mail" placeholder="Exemplo@gmail.com" autocomplete="off">
                    </div>
                    <div class="lado">
                        <label class="textareaa" for="textArea">Informações Adicionais</label>
                        <div>
                            <textarea name="infoAdic" id="textArea" cols="100" rows="3" autocomplete="off"></textarea>
                        </div>
                    </div>
                </div>
                <div class="boxBtn">
                    
                    <button type="submit">Cadastrar</button>
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
            </div>
        </form>
    </div>
</section>
