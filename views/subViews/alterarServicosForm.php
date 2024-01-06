<link rel="stylesheet" href="../../lib/css/formClienteStyles.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
<!-- class ativo mostra o form -->
<?php
include_once "../models/ClassServicos.php";

use \Models\Servicos;

$obj = new Servicos;
$registro = $obj->find($_GET['ids']);
// var_dump($registro);
?>
<!-- <section class="formInit-bg w ativo " id="b">
    <div class="form-bg" style="bottom: -320px;">
        <div class="head">
            <h1>Alterar Dados do Serviços</h1>
        </div>
        <form action="../../controllers/controllerConsultaAlterar.php" id="formCLiente" method="POST">
        
        </form>
    </div>
</section> -->
<?php var_dump($registro) ?>
<section class="molduraForm">
    <div class="bg-antesForm">
        <div class="seila">
            <h2>Serviços</h2>
        </div>
        <div class="spanInfo">
            <span><?php echo $_SESSION['username'] ?></span>
            <span>Razão Social</span>
            <span>CNPJ</span>
            <span>Endereço</span>
            <span>Email</span>
        </div>

        <div class="tituloAntesForm">
            <h2>Declaração De Serviço Farmacêutico</h2>
        </div>
        <div>
            <div style="margin: auto;">
                <form action="../../controllers/controllerServicosAlterar.php" id="formServicos" method="POST" class="formServicos">
                    <div class="inputNome">
                        <label for="nome">Nome:</label>
                        <input type="text" id="nome" name="nome" value="<?php echo $registro['nomePaciente'] ?>" required autocomplete="off" placeholder="nome do cliente">
                        <input type="hidden" value="<?php echo $registro['id_servicos_PK'] ?>" name="id_servicos_PK">
                    </div>
                    <div class="inputGenderOtherFlex">
                        <div class="inputGenderOther">
                            <label for="gender">Sexo:</label>
                            <select name="sexo" id="gender" required>
                                <option value=""></option>
                                <option value="man">Homem</option>
                                <option value="woman">Mulher</option>
                            </select>
                        </div>
                        <div class="inputAge"  style="margin-left: 20px;">
                            <label for="age">Data de Nascimento</label>
                            <input type="date" id="age" value="<?php echo $registro['dataNasc'] ?>" name="dataNasc" required autocomplete="off" maxlength="3" placeholder="20">
                        </div>
                        <div class="inputPhone" style="margin-left: 20px;">
                            <label for="phone">Telefone:</label>
                            <input type="text" id="phone" name="phone" value="<?php echo $registro['telefone'] ?>" required autocomplete="off" placeholder="  (ddd) 99999-9999">
                        </div>
                    </div>
                        <div class="inputEmail">
                            <label for="email">Email:</label>
                            <input type="email" name="email" value="<?php echo $registro['email'] ?>" id="email" required autocomplete="off" placeholder="cliente@email.com">
                        </div>
                    </div>
                    <div class="nomeRespon">
                        <label for="respo">Nome do Responsável:</label>
                        <input type="text" id="respo" name="respo" value="<?php echo $registro['nome_responsavel'] ?>" placeholder=" Só preencha caso for menor de idade">
                    </div>
                    <div class="bb"></div>

                    <!-- Cuidados Farmacêutico -->
                    <div class="cuidadosFarm">
                        <h2>Cuidados Farmacêutico</h2>
                        <span>
                            <i>Estes procedimentos não têm finalidade de diagnósticos e não subtituem a consulta médica ou a realização de exames laboratoriais</i>
                        </span>
                    </div>
                    <div class="glicemiaOther">
                        <div class="glicemiaOtherFlex">
                            <div class="glicemia">
                                <label for="glice">Glicemia Capilar:</label>
                                <input type="text" id="glice" name="glice">
                            </div>
                            <div class="pressao">
                                <label for="checkGli">Sim</label>
                                <input type="checkbox" name="checkGli" value="sim" class="GlicemiaCapilar" id="checkGi">

                                <label for="checkNaoGli">Não</label>
                                <input type="checkbox" checked name="checkGli" value="nao" class="GlicemiaCapilar" id="checkNaoGli">
                            </div>
                            <div class="instrGlic">
                                <p>Valor normal: 70 a 99 mg/dl</p>
                            </div>
                        </div>

                        <div class="pressaoArt-bg">
                            <div class="pressaoArtFlex">
                                <div class="pressaoArt">
                                    <label for="pressao">Pressão Arterial:</label>
                                    <input type="text" id="pressao" name="pressao">
                                </div>
                                <div class="pressaoCheck">
                                    <label for="checkPre">Sim</label>
                                    <input type="checkbox" name="checkPre" value="sim" class="PressaoArterial" id="checkPre">

                                    <label for="checkNaoPre">Não</label>
                                    <input type="checkbox" name="checkPre" value="nao" class="PressaoArterial" checked id="checkNaoPre">
                                </div>
                                <div class="instrPre">
                                    <p>Valor normal: 120x < 88 mm/Hg </p>
                                </div>
                            </div>
                        </div>

                        <div class="pressaoTempFlex">
                            <div class="tempCorporal">
                                <label for="temp">Temperatura Corporal Axilar:</label>
                                <input type="text" id="temp" name="temp">
                            </div>
                            <div class="tempCheck">
                                <label for="checkTemp">Sim</label>
                                <input type="checkbox" name="checkTemp" value="sim" class="Temperatura " id="checkTemp">

                                <label for="checkNaoTemp">Não</label>
                                <input type="checkbox" checked name="checkTemp" value="nao" class="Temperatura " id="checkNaoTemp">
                            </div>
                            <div class="instrTemp">
                                <p> Valor normal: 36 a 37°C </p>
                            </div>
                        </div>
                    </div>

                    <!-- parte injetaveis -->
                    <div class="parteFora">
                        <div class="injetaveisBg">
                            <div class="injetaveisFlex">
                                <p>Aplicação de Injetáveis</p>
                                <div>
                                    <label for="apliInjeta">Sim</label>
                                    <input type="checkbox" class="Injetaveis" value="sim" name="apliInjeta" id="apliInjeta">
                                    <label for="apliInjetaNao">Não</label>
                                    <input type="checkbox" checked class="Injetaveis" value="nao" name="apliInjeta" id="apliInjetaNao">
                                </div>
                            </div>
                            <div class="othersInjetaveis">
                                <div class="Flexteste">
                                    <label for="medicamento">Medicamento / Concentração</label>
                                    <input type="text" name="medicamento" value="<?php echo $registro['medicamento_injetavel'] ?>" id="medicamento">
                                </div>
                                <div class="loteFlex">
                                    <label for="lote">Lote</label>
                                    <input type="text" name="lote" id="lote">
                                </div>
                                <div class="valFlex">
                                    <label for="validade">Validade</label>
                                    <input type="text" id="validade" name="validade">
                                </div>
                                <div class="posologiaFlex">
                                    <label for="posologia">Posologia</label>
                                    <input type="text" id="posologia" name="posologia">
                                </div>
                                <div class="viaAdmFlex">
                                    <label for="viaAdm">Via de Administração</label>
                                    <input type="text" id="viaAdm" name="viaAdm">
                                </div>
                            </div>
                        </div>

                        <div class="nomePres">
                            <label for="prescritor">Nome do Prescritor:</label>
                            <input type="text" name="prescritor" value="<?php echo $registro['nome_prescritor_inaloterapia'] ?>" id="precristor">
                        </div>
                    </div>

                    <!-- parte Inaloterapia -->
                    <div class="parteFora">
                        <div class="InalotarapiaBg">
                            <div class="inaloterapiaCheckFlex">
                                <p>Inaloterapia</p>
                                <div>
                                    <label for="inaloCheck">Sim</label>
                                    <input type="checkbox" class="Inaloterapia" value="sim" name="inaloCheck" id="inaloCheck">

                                    <label for="inaloCheckNao">Não</label>
                                    <input type="checkbox" checked class="Inaloterapia" value="nao" name="inaloCheck" id="inaloCheckNao">
                                </div>
                            </div>

                            <div class="othersInalo">
                                <div class="FlextesteInalo">
                                    <label for="medicamentoIna">Medicamento / Concentração</label>
                                    <input type="text" name="medicamentoIna" id="medicamentoIna">
                                    <input type="text" name="medicamentoIna" id="medicamentoIna">
                                    
                                    
                                </div>
                                <div class="loteFlexIna">
                                    <label for="loteInalo">Lote</label>
                                    <input type="text" name="loteInalo" id="loteInalo">
                                    <input type="text" name="loteInalo" id="loteInalo">
                                    
                                </div>
                                <div class="valFlexInalo">
                                    <label for="validadeInalo">Validade</label>
                                    <input type="text" id="validadeInalo" name="validadeInalo">
                                    <input type="text" id="validadeInalo" name="validadeInalo">
                                  
                                </div>
                                <div class="posologiaFlexInalo">
                                    <label for="posologiaInalo">Posologia</label>
                                    <input type="text" id="posologiaInalo" name="posologiaInalo">
                                    <input type="text" id="posologiaInalo" name="posologiaInalo">
                                    
                                </div>

                            </div>
                            <div class="precritoIna">
                                <div>
                                    <label for="prescritorIna">Nome do Prescritor:</label>
                                    <input type="text" name="prescritorIna" value="<?php echo $registro['nome_prescritor_inaloterapia'] ?>" id="prescritorIna">
                                </div>

                                <div class="CRMCRO">
                                    <label for="crm">CRM/CRO:</label>
                                    <input type="text" name="crm" id="crm">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Parte Brinco -->
                    <div class="colBrincoBg">
                        <div class="colBrincoFlex">
                            <p>Aplicação de Brinco/piercing</p>
                            <div>
                                <label for="brincoCol">Sim</label>
                                <input type="checkbox" class="Brinco" name="brincoCol" value="sim" id="brincoCol">
                                <label for="brincoColNao">Não</label>
                                <input type="checkbox" checked class="Brinco" name="brincoCol" value="nao" id="brincoColNao">
                            </div>
                        </div>

                        <div>
                            <div class="othersBrinco">
                                <div class="testeFlex">
                                    <div class="FlextesteBrinco">
                                        <label for="medicamentoBrinco">Pistola (fabrincante)</label>
                                        <input type="text" name="medicamentoBrinco" 
                                        value="<?php echo $registro['pistola_brinco'] ?>" id="medicamentoBrinco">
                                    </div>
                                    <div class="FlextesteBrinco altura">
                                        <label for="medicamentoBrinco">Pistola (fabrincante)</label>
                                        <input type="text" name="medicamentoBrinco" id="medicamentoBrinco">
                                    </div>
                                </div>

                                <div>
                                    <div class="loteFlexBrinco">
                                        <label for="loteBrinco">Lote</label>
                                        <input type="text" value="<?php echo $registro['lote_brinco'] ?>"  name="loteBrinco" id="loteBrinco">
                                    </div>
                                    <div class="loteFlexBrinco altura">
                                        <label for="loteBrinco">Lote</label>
                                        <input type="text" name="loteBrinco" id="loteBrinco">
                                    </div>
                                </div>

                                <div>
                                    <div class="valFlexBrinco">
                                        <label class="ladoJogar" for="validadeBrinco">CNPJ</label>
                                        <input type="text" id="validadeBrinco" value="<?php echo $registro['cnpj_brinco'] ?>"  name="validadeBrinco">
                                    </div>
                                    <div class="valFlexBrinco altura">
                                        <label class="ladoJogar" for="validadeBrinco">CNPJ</label>
                                        <input type="text" id="validadeBrinco" name="validadeBrinco">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="checkLadoBrincoFlex">

                            <div class="FlexInfoBrinco">
                                <p>Lado Direito</p>
                                <div>
                                    <label for="ladoD">Sim</label>
                                    <input type="checkbox" class="ladoD" value="sim" name="ladoD" id="ladoD">

                                    <label for="ladoDNao">Não</label>
                                    <input type="checkbox" checked class="ladoD" value="nao" name="ladoD" id="ladoDNao">
                                </div>
                            </div>

                            <div class="FlexInfoBrincoE">
                                <p>Lado Esquerdo</p>
                                <div>
                                    <label for="ladoE">Sim</label>
                                    <input type="checkbox" class="ladoE" value="sim" name="ladoE" id="ladoE">

                                    <label for="ladoENao">Não</label>
                                    <input type="checkbox" checked class="ladoE" value="nao" name="ladoE" id="ladoENao">
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- info -->

                    <div class="envInfo">
                        <div class="Assistencia">
                            <p>Assistência Farmacêutica Domiciliar</p>
                            <div>
                                <label for="assCheck">Sim</label>
                                <input type="checkbox" class="AssistenciaD" value="sim" name="assCheck" id="assCheck">
                                <label for="assCheckNao">Não</label>
                                <input type="checkbox" checked class="AssistenciaD" value="nao" name="assCheck" id="assCheckNao">
                            </div>
                        </div>

                        <div class="acompanhamento">
                            <p>Acompanhamento Farmacoterapêutico</p>
                            <div>
                                <label for="acomCheck">Sim</label>
                                <input type="checkbox" class="Farmacoterapeutico" value="sim" name="acomCheck" id="acomCheck">
                                <label for="acomCheckNao">Não</label>
                                <input type="checkbox" checked class="Farmacoterapeutico" value="nao" name="acomCheck" id="acomCheckNao">
                            </div>
                            <div class="afastar">
                                <label for="ficha">N° Ficha</label>
                                <input type="text" name="ficha" id="ficha">
                            </div>
                        </div>

                        <div class=" indicacao">
                            <p>Indicação Farmacêutica em Transtornos Menores</p>
                            <div>
                                <label for="indiCheck">Sim</label>
                                <input type="checkbox" class="Indicacao" value="sim" name="indiCheck" id="indiCheck">
                                <label for="indiCheckNao">Não</label>
                                <input type="checkbox" checked class="Indicacao" value="nao" name="indiCheck" id="indiCheckNao">
                            </div>
                        </div>
                    </div>

                    <!-- ultimo nao aguento mais kkkkk -->
                    <div class="sinaisBg">
                        <div class="Sinais">
                            <p>Sinais e Sintomas:</p>
                        </div>

                        <div class="othersInalo">
                            <div class="FlextesteInalo">
                                <label for="medicamentoIna">Medicamento / Concentração</label>
                                <input type="text" name="medicamentoIna" value="<?php echo $registro['sinais_sintomas'] ?>"  id="medicamentoIna">
                                <input type="text" name="medicamentoIna" id="medicamentoIna">
                                
                            </div>
                            <div class="loteFlexIna">
                                <label for="loteInalo">Lote</label>
                                <input type="text" name="loteInalo" id="loteInalo">
                                <input type="text" name="loteInalo" id="loteInalo">
                                
                            </div>
                            <div class="valFlexInalo">
                                <label for="validadeInalo">Validade</label>
                                <input type="text" id="validadeInalo" name="validadeInalo">
                                <input type="text" id="validadeInalo" name="validadeInalo">
                                
                            </div>
                            <div class="posologiaFlexInalo">
                                <label for="posologiaInalo">Posologia</label>
                                <input type="text" id="posologiaInalo" name="posologiaInalo">
                                <input type="text" id="posologiaInalo" name="posologiaInalo">
                                
                            </div>


                        </div>

                        <div class="plano">
                            <p>Plano de Acompanhamento (intervalo)</p>
                            <div class="afastrD">
                                <input type="checkbox" name="dois" id="doisD" value="2" class="checkbox">
                                <label for="doisD">2 dias</label>
                            </div>
                            <div class="afastrD">
                                <input type="checkbox" name="dois" id="doisQ" value="4" class="checkbox">
                                <label for="doisQ">4 dias</label>
                            </div>
                            <div class="afastrD">
                                <input type="checkbox" name="dois" id="doisS" value="6" class="checkbox">
                                <label for="doisS">6 dias</label>
                            </div>
                            <div>
                                <input type="checkbox" name="dois" id="doisO" value="8" class="checkbox">
                                <label for="doisO">8 dias</label>
                            </div>
                        </div>


                    </div>
            </div>
            <div id="todosBtns" style="display: flex; justify-content: end;">
                <div>
                    <button  class="buttonImprimir"  name="imprimir" value="imprimir" id="btnImprimir">Imprimir</button>
                </div>
                <div>
                    <button class="buttonImprimir" type="submit" name="submit" value="submit" id="btnEnviar">Enviar</button>
                </div>
                </form>

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
                <div id="linke"></div>
            </div>

        </div>

    </div>
</section>