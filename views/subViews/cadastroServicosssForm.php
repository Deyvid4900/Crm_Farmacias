<link rel="stylesheet" href="../../lib/CSS/formServicosStyles.css">


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
            <form action="">
                <div class="inputNome">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" required autocomplete="off">
                </div>
                <div class="inputGenderOtherFlex">
                    <div class="inputGenderOther">
                        <label for="gender">Genero:</label>
                        <select name="gender" id="gender">
                            <option value=""></option>
                            <option value="man">Homem</option>
                            <option value="woman">Mulher</option>
                        </select>
                    </div>
                    <div class="inputAge">
                        <label for="age">Idade:</label>
                        <input type="text" id="age" name="age" maxlength="3">
                    </div>
                    <div class="inputPhone">
                        <label for="phone">Telefone:</label>
                        <input type="text" id="phone" name="phone" placeholder="  (ddd) 99999-9999">
                    </div>
                </div>
                <div class="inputAdress">
                    <label for="adress">Endereço:</label>
                    <input type="text" id="adress" name="adress">
                </div>
                <!-- sep -->
                <div class="cityOtherFlex">
                    <div class="cityOther">
                        <label for="city">Cidade:</label>
                        <input type="text" id="city" name="city">
                    </div>
                    <div class="Uf">
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
                    <div class="inputEmail">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email">
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
                    <i>Estes procedimentos não têm finalidade de diagnósticos e não subtituem a consulta médica ou a realização de exames  laboratoriais</i>
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
                                <p>Valor normal: <120x < 88 mm/Hg </p>
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


            </form>
       </div>
    </div>
</section>