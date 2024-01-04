<link rel="stylesheet" href="../../lib/css/formClienteStyles.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
<!-- class ativo mostra o form -->
<?php
include_once "../models/ClassCliente.php";

use \Models\Cliente;

$obj = new Cliente;
$registro = $obj->find($_GET['ids']);
// var_dump($registro);
?>
<section class="formInit-bg w ativo " id="b">
    <div class="form-bg">
        <div class="head">
            <h1>Alterar Dados dos Clientes</h1>
        </div>
        <form action="../../controllers/controllerClienteAlterar.php" id="formCLiente" method="POST">
            <div id="styleForm">
                <div class="flexForm">
                    <input type="number" name='Id_Farmacia_FK' value="<?php echo $_SESSION["user_id"] ?>" style="display: none;">
                    <input type="hidden" name='cliente_id' value="<?php echo $_GET["ids"] ?>">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" placeholder='<?php echo $registro['nome'] ?>' value="<?php echo $registro["nome"] ?>"  id="nome" autocomplete="off">
                    <label class="nCliente" for="numero">Remedio Controlado:</label>
                    <input type="text" name="nomeRemedioControl" value="<?php echo $registro["nomeRemedioControl"] ?>"  placeholder='<?php echo $registro['nomeRemedioControl'] ?>' id="numero" autocomplete="off">
                    <input type="hidden" name="usaRemedioControl">
                    <label class="cPf" for="cpf">CPF</label>
                    <input type="text" name="cpf" placeholder='<?php echo $registro['cpf'] ?>' value="<?php echo $registro["cpf"] ?>"  id="cpf" maxlength="15" autocomplete="off">
                    <!-- mexer cpf validar formato -->
                </div>
                <div class="formAlinhado">
                    <div class="flexCol1">
                        <div class="padDown">
                            <label for="sx" class="aaaa">Sexo</label>
                            <select name="sexo" id="sx">
                                <?php echo isset($registro['sexo'])
                                    ? '<option value="masculino">Masculino</option>
        <option value="feminino">Feminino</option><option value="' . htmlspecialchars($registro['sexo']) . '">' . htmlspecialchars($registro['sexo']) . '</option>'
                                    : '<option value="masculino">Masculino</option>
           <option value="feminino">Feminino</option>'; ?>
                            </select>

                        </div>
                        <div class="padDown">
                            <label for="profissao" class="aprof">Profissão</label>
                            <input type="text" name="profissao" value="<?php echo $registro["profissao"] ?>"  placeholder='<?php echo $registro['profissao'] ?>' id="profissao" autocomplete="off">
                        </div>
                        <div>
                            <label for="religiao" class="arelig">Religião</label>
                            <input type="text" name="religiao" id="religiao" value="<?php echo $registro["religiao"] ?>"  placeholder='<?php echo $registro['religiao'] ?>' autocomplete="off">
                        </div>
                        <div style="display: flex; height: 30px; width: 100%;justify-content: end;">
                            <label for="timeFut" class="arelig" style="margin-right:6px;">Time</label>
                            <input type="text" name="timeFut" id="timeFut" value="<?php echo $registro["timeFut"] ?>"  placeholder='<?php echo $registro['timeFut'] ?>' autocomplete="off">
                        </div>
                    </div>
                    <div class="flexCol2">
                        <div class="padDown">
                            <label class="estadoCivil" for="estado-civil">Estado Civil</label>
                            <select name="estadoCivil" id="estado-civil">
                                <?php echo isset($registro['estadoCivil'])
                                    ? '<option value="solteiro">Solteiro</option>
                                    <option value="casado">Casado</option>
                                    <option value="separado">Separado</option>
                                    <option value="divorciado">Divorciado</option>
                                    <option value="viuvo">Viúvo</option><option value="' . htmlspecialchars($registro['estadoCivil']) . '">' . htmlspecialchars($registro['estadoCivil']) . '</option>'
                                    : '<option value="solteiro">Solteiro</option>
           <option value="casado">Casado</option>
           <option value="separado">Separado</option>
           <option value="divorciado">Divorciado</option>
           <option value="viuvo">Viúvo</option>'; ?>
                            </select>

                        </div>
                        <div class="padDown">
                            <label for="faixaSalarial">Faixa Salarial</label>
                            <select name="faixaSalarial" id="faixaSalarial">
                                <?php echo isset($registro['faixaSalarial'])
                                    ? '<option value="mil">R$1000 à R$3000</option>
                                    <option value="mil3">R$3000 à R$5000</option>
                                    <option value="mil5">R$5000 à R$10Mil</option>
                                    <option value="maxSalario">Acima de R$10Mil</option><option value="' . htmlspecialchars($registro['faixaSalarial']) . '">' . htmlspecialchars($registro['faixaSalarial']) . '</option>'
                                    : '<option value="mil">R$1000 à R$3000</option>
           <option value="mil3">R$3000 à R$5000</option>
           <option value="mil5">R$5000 à R$10Mil</option>
           <option value="maxSalario">Acima de R$10Mil</option>'; ?>
                            </select>

                        </div>
                        <div>
                            <label class="escolaridadee" for="escolaridade">Escolaridade</label>
                            <select name="escolaridade" id="escolaridade">
                                <?php echo isset($registro['escolaridade'])
                                    ? '<option value="ensinoFundInc">Ensino Fundamental Incompleto</option>
        <option value="ensinoFundComp">Ensino Fundamental Completo</option>
        <option value="ensinoMedInc">Ensino Médio Incompleto</option>
        <option value="ensinoMedComp">Ensino Médio Completo</option>
        <option value="superiorInc">Superior Incompleto</option>
        <option value="superiorCom">Superior Completo</option><option value="' . htmlspecialchars($registro['escolaridade']) . '">' . htmlspecialchars($registro['escolaridade']) . '</option>'
                                    : '<option value="ensinoFundInc">Ensino Fundamental Incompleto</option>
           <option value="ensinoFundComp">Ensino Fundamental Completo</option>
           <option value="ensinoMedInc">Ensino Médio Incompleto</option>
           <option value="ensinoMedComp">Ensino Médio Completo</option>
           <option value="superiorInc">Superior Incompleto</option>
           <option value="superiorCom">Superior Completo</option>'; ?>
                            </select>

                        </div>
                    </div>
                    <div class="flexCol2">
                        <div class="padDown">
                            <label for="dataNascimento">Data de Nascimento</label>
                            <input type="date" name="dataNasc" id="dataNascimento" value="<?php echo $registro['dataNasc'] ?>">
                        </div>
                        <div class="padDown">
                            <label class="inputIden" for="identidade">Identidade</label>
                            <input type="text" name="identidade" placeholder=''   id="identidade" autocomplete="off">
                        </div>
                        <div>
                            <label class="racaLabel" for="raca">Raça</label>
                            <select name="raca" id="raca" class="raCaa">
                                <?php echo isset($registro['raca'])
                                    ? '<option value="branco">Branco</option>
                                    <option value="preto">Preto</option>
                                    <option value="pardo">Pardo</option>
                                    <option value="amarelo">Amarelo</option>
                                    <option value="indigena">Indígena</option><option value="' . htmlspecialchars($registro['raca']) . '">' . htmlspecialchars($registro['raca']) . '</option>'
                                    : '<option value="branco">Branco</option>
           <option value="preto">Preto</option>
           <option value="pardo">Pardo</option>
           <option value="amarelo">Amarelo</option>
           <option value="indigena">Indígena</option>'; ?>
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
                        <input type="text" name="celular1" id="cel1" value="<?php echo $registro["celular1"] ?>"  placeholder="<?php echo $registro['celular1'] ?>" autocomplete="off">
                        <label for="cel2">Celular 2°</label>
                        <input type="text" name="celular2" id="cel2" value="<?php echo $registro["celular2"] ?>"  placeholder="<?php echo $registro['celular2'] ?>" autocomplete="off">
                        <label for="tel1">Tel Fixo</label>
                        <input type="text" name="telFixo" id="tel1" value="<?php echo $registro["telFixo"] ?>"  placeholder="<?php echo $registro['telFixo'] ?>" autocomplete="off">

                    </div>
                    <div class="padDown1 " style="    margin-left: 28px;">
                        <label for="mail">Email</label>
                        <input type="email" name="email" id="mail" value="<?php echo $registro["email"] ?>"  placeholder="<?php echo $registro['email'] ?>" autocomplete="off">
                    </div>
                    <div class="lado">
                        <label class="textareaa" for="textArea">Informações Adicionais</label>
                        <div>
                            <textarea name="infoAdic" id="textArea" cols="100" rows="3" autocomplete="off"></textarea>
                        </div>
                    </div>
                </div>
                <div class="boxBtn">

                    <button type="submit">Atualizar</button>
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