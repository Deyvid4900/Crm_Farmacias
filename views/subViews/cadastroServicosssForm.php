<section class="molduraForm">
    <div class="bg-antesForm">
        <div class="seila">
            <h2>Serviços</h2>
        </div>
        <div class="spanInfo">
            <span>Nome Fantasia</span>
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
                <form action="" class="formServicos">
                    <div class="inputNome">
                        <label for="nome">Nome:</label>
                        <input type="text" id="nome" name="nome" required autocomplete="off">
                    </div>
                    <div class="inputGenderOtherFlex">
                        <div class="inputGenderOther">
                            <label for="gender">Genero:</label>
                            <select name="gender" id="gender" required>
                                <option value=""></option>
                                <option value="man">Homem</option>
                                <option value="woman">Mulher</option>
                            </select>
                        </div>
                        <div class="inputAge">
                            <label for="age">Idade:</label>
                            <input type="text" id="age" name="age" required autocomplete="off" maxlength="3">
                        </div>
                        <div class="inputPhone">
                            <label for="phone">Telefone:</label>
                            <input type="text" id="phone" name="phone" required autocomplete="off" placeholder="  (ddd) 99999-9999">
                        </div>
                    </div>
                    <div class="inputAdress">
                        <label for="adress">Endereço:</label>
                        <input type="text" id="adress" name="adress" required autocomplete="off">
                    </div>
                    <!-- sep -->
                    <div class="cityOtherFlex">
                        <div class="cityOther">
                            <label for="city">Cidade:</label>
                            <input type="text" id="city" name="city" required autocomplete="off">
                        </div>
                        <div class="Uf">
                            <label for="uf">UF</label>

                            <select name="uf" id="uf" required>

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
                        <div class="inputEmail">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" required autocomplete="off">
                        </div>
                    </div>
                    <div class="nomeRespon">
                        <label for="respo">Nome do Responsável:</label>
                        <input type="text" id="respo" name="respo" placeholder="  Só preencha caso for menor de idade">
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
                                <input type="checkbox" name="checkGli" id="checkGi">

                                <label for="checkNaoGli">Não</label>
                                <input type="checkbox" name="checkNaoGli" id="checkNaoGli">
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
                                    <input type="checkbox" name="checkPre" id="checkPre">

                                    <label for="checkNaoPre">Não</label>
                                    <input type="checkbox" name="checkNaoPre" id="checkNaoPre">
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
                                <input type="checkbox" name="checkTemp" id="checkTemp">

                                <label for="checkNaoTemp">Não</label>
                                <input type="checkbox" name="checkNaoTemp" id="checkNaoTemp">
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
                                    <input type="checkbox" name="apliInjeta" id="apliInjeta">
                                    <label for="apliInjetaNao">Não</label>
                                    <input type="checkbox" name="apliInjetaNao" id="apliInjetaNao">
                                </div>
                            </div>
                            <div class="othersInjetaveis">
                                <div class="Flexteste">
                                    <label for="medicamento">Medicamento / Concentração</label>
                                    <input type="text" name="medicamento" id="medicamento">
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
                            <input type="text" name="prescritor" id="precristor">
                        </div>
                    </div>

                    <!-- parte Inaloterapia -->
                    <div class="parteFora">
                        <div class="InalotarapiaBg">
                            <div class="inaloterapiaCheckFlex">
                                <p>Inaloterapia</p>
                                <div>
                                    <label for="inaloCheck">Sim</label>
                                    <input type="checkbox" name="inaloCheck" id="inaloCheck">

                                    <label for="inaloCheckNao">Não</label>
                                    <input type="checkbox" name="inaloCheckNao" id="inaloCheckNao">
                                </div>
                            </div>

                            <div class="othersInalo">
                                <div class="FlextesteInalo">
                                    <label for="medicamentoIna">Medicamento / Concentração</label>
                                    <input type="text" name="medicamentoIna" id="medicamentoIna">
                                    <input type="text" name="medicamentoIna" id="medicamentoIna">
                                    <input type="text" name="medicamentoIna" id="medicamentoIna">
                                </div>
                                <div class="loteFlexIna">
                                    <label for="loteInalo">Lote</label>
                                    <input type="text" name="loteInalo" id="loteInalo">
                                    <input type="text" name="loteInalo" id="loteInalo">
                                    <input type="text" name="loteInalo" id="loteInalo">
                                </div>
                                <div class="valFlexInalo">
                                    <label for="validadeInalo">Validade</label>
                                    <input type="text" id="validadeInalo" name="validadeInalo">
                                    <input type="text" id="validadeInalo" name="validadeInalo">
                                    <input type="text" id="validadeInalo" name="validadeInalo">
                                </div>
                                <div class="posologiaFlexInalo">
                                    <label for="posologiaInalo">Posologia</label>
                                    <input type="text" id="posologiaInalo" name="posologiaInalo">
                                    <input type="text" id="posologiaInalo" name="posologiaInalo">
                                    <input type="text" id="posologiaInalo" name="posologiaInalo">
                                </div>

                            </div>
                            <div class="precritoIna">
                                <div>
                                    <label for="prescritorIna">Nome do Prescritor:</label>
                                    <input type="text" name="prescritorIna" id="prescritorIna">
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
                            <p>Aplicação de Injetáveis</p>
                            <div>
                                <label for="brincoCol">Sim</label>
                                <input type="checkbox" name="brincoCol" id="brincoCol">
                                <label for="brincoColNao">Não</label>
                                <input type="checkbox" name="brincoColNao" id="brincoColNao">
                            </div>
                        </div>

                        <div>
                            <div class="othersBrinco">
                                <div class="testeFlex">
                                    <div class="FlextesteBrinco">
                                        <label for="medicamentoBrinco">Pistola (fabrincante)</label>
                                        <input type="text" name="medicamentoBrinco" id="medicamentoBrinco">
                                    </div>
                                    <div class="FlextesteBrinco altura">
                                        <label for="medicamentoBrinco">Pistola (fabrincante)</label>
                                        <input type="text" name="medicamentoBrinco" id="medicamentoBrinco">
                                    </div>
                                </div>

                                <div>
                                    <div class="loteFlexBrinco">
                                        <label for="loteBrinco">Lote</label>
                                        <input type="text" name="loteBrinco" id="loteBrinco">
                                    </div>
                                    <div class="loteFlexBrinco altura">
                                        <label for="loteBrinco">Lote</label>
                                        <input type="text" name="loteBrinco" id="loteBrinco">
                                    </div>
                                </div>

                                <div>
                                    <div class="valFlexBrinco">
                                        <label class="ladoJogar" for="validadeBrinco">CNPJ</label>
                                        <input type="text" id="validadeBrinco" name="validadeBrinco">
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
                                    <input type="checkbox" name="ladoD" id="ladoD">

                                    <label for="ladoDNao">Não</label>
                                    <input type="checkbox" name="ladoDNao" id="ladoDNao">
                                </div>
                            </div>

                            <div class="FlexInfoBrincoE">
                                <p>Lado Esquerdo</p>
                                <div>
                                    <label for="ladoE">Sim</label>
                                    <input type="checkbox" name="ladoE" id="ladoE">

                                    <label for="ladoENao">Não</label>
                                    <input type="checkbox" name="ladoENao" id="ladoENao">
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
                                <input type="checkbox" name="assCheck" id="assCheck">
                                <label for="assCheckNao">Não</label>
                                <input type="checkbox" name="assCheckNao" id="assCheckNao">
                            </div>
                        </div>

                        <div class="acompanhamento">
                            <p>Acompanhamento Farmacoterapêutico</p>
                            <div>
                                <label for="acomCheck">Sim</label>
                                <input type="checkbox" name="acomCheck" id="acomCheck">
                                <label for="acomCheckNao">Não</label>
                                <input type="checkbox" name="acomCheckNao" id="acomCheckNao">
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
                                <input type="checkbox" name="indiCheck" id="indiCheck">
                                <label for="indiCheckNao">Não</label>
                                <input type="checkbox" name="indiCheckNao" id="indiCheckNao">
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
                                <input type="text" name="medicamentoIna" id="medicamentoIna">
                                <input type="text" name="medicamentoIna" id="medicamentoIna">
                                <input type="text" name="medicamentoIna" id="medicamentoIna">
                            </div>
                            <div class="loteFlexIna">
                                <label for="loteInalo">Lote</label>
                                <input type="text" name="loteInalo" id="loteInalo">
                                <input type="text" name="loteInalo" id="loteInalo">
                                <input type="text" name="loteInalo" id="loteInalo">
                            </div>
                            <div class="valFlexInalo">
                                <label for="validadeInalo">Validade</label>
                                <input type="text" id="validadeInalo" name="validadeInalo">
                                <input type="text" id="validadeInalo" name="validadeInalo">
                                <input type="text" id="validadeInalo" name="validadeInalo">
                            </div>
                            <div class="posologiaFlexInalo">
                                <label for="posologiaInalo">Posologia</label>
                                <input type="text" id="posologiaInalo" name="posologiaInalo">
                                <input type="text" id="posologiaInalo" name="posologiaInalo">
                                <input type="text" id="posologiaInalo" name="posologiaInalo">
                            </div>


                        </div>

                        <div class="plano">
                            <p>Plano de Acompanhamento(intervalo)</p>
                            <div class="afastrD">
                                <input type="checkbox" name="doisD" id="doisD">
                                <label for="doisD">2 dias</label>
                            </div>
                            <div class="afastrD">
                                <input type="checkbox" name="doisQ" i="doisQ">
                                <label for="doisQ">4 dias</label>
                            </div>
                            <div class="afastrD">
                                <input type="checkbox" name="doisS" id="doisS">
                                <label for="doisS">6 dias</label>
                            </div>
                            <div>
                                <input type="checkbox" name="doisO" id="doisO">
                                <label for="doisO">8 dias</label>
                            </div>
                        </div>
                    </div>
            </div>
            <div style="width: 100%; display: flex; justify-content: end; padding-right: 30px;"><button class="buttonImprimir">Imprimir</button></div>
            </form>
        </div>
    </div>
</section>