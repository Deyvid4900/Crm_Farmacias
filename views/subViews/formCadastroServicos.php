<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
<section class="molduraForm">
    <div class="bg-antesForm">
        <div class="seila">
            <h2>Serviços</h2>
        </div>
        <div class="spanInfo">
            <span>Nome: <?php echo $_SESSION['username'] ?></span>
            <span>Razão Social</span>
            <span>Cnpj: <?php echo $_SESSION['cnpj'] ?></span>
            <span>Endereço</span>
            <span>Email</span>
        </div>
        <div class="tituloAntesForm">
            <h2>Declaração De Serviço Farmacêutico</h2>
        </div>
        <div>
            <div style="margin: auto; width: 100%;">
                <form action="../../controllers/controllerServicos.php" id="formServicos" method="POST" class="formServicos">
                    <div style="width: 90%; margin: 0px auto; display: flex; justify-content: center; flex-direction: column;">
                        <div class="divInputBox">
                            <label for="nome">Nome:</label>
                            <input type="text" name="nome" placeholder="nome do cliente ">
                        </div>
                        <div style="display: flex; width: 100%; justify-content: center; gap: 90px;">
                            <div>
                                <label for="">sexo</label>
                                <select name="sexo" id="">
                                    <option value="masculino" selected>Masculino</option>
                                    <option value="feminino">Feminino</option>
                                </select>
                            </div>
                            <div>
                                <label for="">Data de Nascimento</label>
                                <input type="date" name="nomeClienteExaminado" style="width: 80px;">
                            </div>
                        </div>
                        <div class="divInputBox">
                            <label for="">CPF:</label>
                            <input type="text" name="nomeClienteExaminado" placeholder="CPF do cliente " style="width: 200px;">
                            <label for="">Celular</label>
                            <input type="text" name="nomeClienteExaminado" placeholder="Numero de Telefone do cliente " style="width: 200px;">
                        </div>
                
                        <div class="divInputBox">
                            <label for="">Email</label>
                            <input type="text" name="nomeClienteExaminado" placeholder="Email do cliente " style="width: 300px;">
                        </div>
                    </div>
                    <div style="padding: 10px; width: 100%; margin: 10px auto;">
                        <div style="display: flex; justify-content: center;">
                            <label for="">Nome do Responsável:</label>
                            <input type="text" name="nomeClienteExaminado" placeholder="  Só preencha caso for menor de idade" style="width: 50%;">
                        </div>
                    </div>
                    <div class="bb"></div>
                    <div class="cuidadosFarm">
                        <h2>Cuidados Farmacêutico</h2>
                        <span>
                            <i>Estes procedimentos não têm finalidade de diagnósticos e não subtituem a consulta médica ou a realização de exames laboratoriais</i>
                        </span>
                    </div>
                    <div class="boxDivs">
                        <div class="suBoxDiv">
                            <div class="itensDiv">
                                <label for="glice">Glicemia Capilar:</label>
                                <input type="text" id="glice" name="glice">
                            </div>
                            <div class="itensDiv">
                                <label for="checkGli">Sim</label>
                                <input type="checkbox" name="checkGli" value="sim" class="GlicemiaCapilar" id="checkGi">

                                <label for="checkNaoGli">Não</label>
                                <input type="checkbox" checked name="checkGli" value="nao" class="GlicemiaCapilar" id="checkNaoGli">
                            </div>
                            <div class="itensDiv">
                                <div class="instrGlic">
                                    <p>Valor normal: 70 a 99 mg/dl</p>
                                </div>
                            </div>
                        </div>
                        <div class="suBoxDiv">
                            <div class="itensDiv">
                                <label for="pressao">Pressão Arterial:</label>
                                <input type="text" id="pressao" name="pressao">
                            </div>
                            <div class="itensDiv">
                                <label for="checkPre">Sim</label>
                                <input type="checkbox" name="checkPre" value="sim" class="PressaoArterial" id="checkPre">

                                <label for="checkNaoPre">Não</label>
                                <input type="checkbox" name="checkPre" value="nao" class="PressaoArterial" checked id="checkNaoPre">
                            </div>
                            <div class="itensDiv">
                                <div class="instrPre">
                                    <p>Valor normal: 120x < 88 mm/Hg </p>
                                </div>
                            </div>
                        </div>
                        <div class="suBoxDiv">
                            <div class="itensDiv">
                                <label for="temp">Temperatura Corporal Axilar:</label>
                                <input type="text" id="temp" name="temp">
                            </div>
                            <div class="itensDiv">
                                <label for="checkTemp">Sim</label>
                                <input type="checkbox" name="checkTemp" value="sim" class="Temperatura " id="checkTemp">

                                <label for="checkNaoTemp">Não</label>
                                <input type="checkbox" checked name="checkTemp" value="nao" class="Temperatura " id="checkNaoTemp">
                            </div>
                            <div class="itensDiv">
                                <div class="instrTemp">
                                    <p> Valor normal: 36 a 37°C </p>
                                </div>
                            </div>
                        </div>

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
                        <div class="nomePres">
                            <label for="prescritor">Nome do Prescritor:</label>
                            <input type="text" name="prescritor" id="precristor">
                        </div>
                    

                    </div>

                </form>
            </div>
        </div>
    </div>

</section>