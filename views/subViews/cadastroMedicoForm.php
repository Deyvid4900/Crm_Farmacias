<link rel="stylesheet" href="../../lib/css/formMedicoStyles.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
<section class="formInit-bg aala ativo" id="b">
    <div class="form-bg">
        <div class="head">
            <h1>Médicos</h1>
        </div>
        <form method="POST" id='MedicoForm' action="../../controllers/controllerMedicoCadastro.php">
            <div id="styleForm">
                <div class="flexForm">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" autocomplete="off" required placeholder="Nome do médico">
                    <label class="cPf" for="cpf">CPF</label>
                    <input type="text" name="cpf" id="cpf" maxlength="15" autocomplete="off" required placeholder="000.000.000-00">

                    <label for="sx" class="aaaa">Sexo</label>
                    <select name="sexo" id="sx">
                        <option value="masculino" selected>Masculino</option>
                        <option value="feminino">Feminino</option>
                    </select>
                </div>
                <div class="flexultimo">
                    <div class="aakka">
                        <div class="padDown">
                            <label for="especialidade" id="aalaaa" class="aprof">Especialidade</label>
                            <input type="text" name="especialidade" id="especialidade" autocomplete="off" required placeholder='Especialidade do médico'>
                        </div>

                        <div class="flexCol2">
                            <div class="padDown aop">
                                <label class="atuacao" for="atuacao">Atuação</label>
                                <input type="text" name="atuacao" id="atuacao" placeholder="Atuação do médico">
                            </div>
                        </div>
                    </div>
                    <div class="aaako">
                        <div class=" aew">
                            <label for="hospital_atual">Hospital Atual</label>
                            <input type="text" name="hospital_atual" id="hospital_atual" placeholder="Hospital que o médico está">
                        </div>
                        <div class="flexCol2">
                            <label class="sakdo" for="dataNascimento">Data de Nascimento</label>
                            <input type="date" name="data_nascimento" id="dataNascimento" required>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div id="styleForm1">
                    <div class="padDown1">
                        <label class="logra" for="logradouro">Logradouro</label>
                        <input type="text" name="logradouro" id="logradouro" autocomplete="off" required placeholder="Rua, Avenida...">

                        <label class="cepNumber" for="numeroCep">Número</label>
                        <input type="text" name="numeroCasa" id="numeroCep" autocomplete="off" required placeholder="Número da casa">

                        <label class="bairroStyle" for="bairro">Bairro</label>
                        <input type="text" name="bairro" id="bairro" autocomplete="off" required placeholder="Bairro">
                    </div>
                    <div class="padDown1">
                        <label class="comple" for="complemento">Complemento</label>
                        <input type="text" name="complemento" id="complemento" autocomplete="off" required placeholder="Complemento de onde mora">

                        <label class="cidad" for="cidade">Cidade</label>
                        <input type="text" name="cidade" id="cidade" autocomplete="off" required placeholder="Cidade">

                        <label for="uf">UF</label>
                        <select name="uf" id="uf">
                            <option value=""></option>
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
                        <input type="text" name="referencia" id="referencia" autocomplete="off" required placeholder="Próximo a.... , perto de...">
                    </div>
                </div>
            </div>

            <div>
                <div id="styleForm2">
                    <div class="padDown1">
                        <label class="Cel1" for="cel1">Celular 1</label>
                        <input type="text" name="celular1" id="cel1" placeholder=" (DDD) 99999-9999" autocomplete="off" >
                        <label for="cel2">Celular 2</label>
                        <input type="text" name="celular2" id="cel2" placeholder=" (DDD) 99999-9999" autocomplete="off" >
                        <label for="tel1">Tel Fixo 1</label>
                        <input type="text" name="tel1" id="tel1" placeholder=" (DDD) 3500-0000" autocomplete="off" >
                        <label for="tel2">Tel Fixo 2</label>
                        <input type="text" name="tel2" id="tel2" placeholder=" (DDD) 3500-0000" autocomplete="off" >
                    </div>
                    <div class="padDown1">
                        <label class="zap1" for="possuiZap">Possui Whatsapp</label>
                        <select name="possuiZap" id="possuiZap">
                            <option value=""></option>
                            <option value="sim">Sim</option>
                            <option value="nao">Não</option>
                        </select>
                        <label class="zap2" for="possuiZapi">Possui Whatsapp</label>
                        <select name="possuiZapi" id="possuiZapi">
                            <option value=""></option>
                            <option value="ss">Sim</option>
                            <option value="nn">Não</option>
                        </select>
                        <label for="mail">Email</label>
                        <input type="text" name="email" id="mail" autocomplete="off" required placeholder="meuemail@email.com">
                    </div>
                    <div class="lado">
                        <label class="textareaa" for="informacoes_adicionais">Informações Adicionais</label>
                        <div>
                            <textarea name="informacoes_adicionais" id="textArea" cols="100" rows="3" autocomplete="off" required></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit">Cadastrar</button>
            
        </form>
    </div>
</section>