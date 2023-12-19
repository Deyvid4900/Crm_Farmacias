<section class="molduraForm-Bg">
    <div class="antesFormb-bg">
        <div class="seilaa">
            <h2>Consultorio</h2>
        </div>


        <div class="FlexInfooo">
            <p>Farmacia : <?php echo $_SESSION['username'] ?></p>
            <p>Cnpj : <?php echo $_SESSION['cnpj'] ?></p>
        </div>
        <form action="../../controllers//controllerConsultorio.php" method="POST" class="formServicoss" id="formConsultorio">
            <div class="infoFlex-Consultorio">
                <input type="hidden" name="idFarmacia" value="<?php echo $_SESSION['user_id'] ?>">
                <input type="hidden" name="horaConsulta" value="<?php echo date("H:i:s"); ?>">

            </div>

            <div class="box">
                <div class="FlexColum">
                    <div>
                        <label for="NameFarm">Nome do Farmacêutico:</label>
                        <input type="text" name="NameFarm" id="NameFarm">
                    </div>
                    <div>
                        <label for="namePaciente">Nome do Paciente:</label>
                        <input type="text" name="namePaciente" id="namePaciente">
                    </div>
                    <div>
                        <label for="prescrito">Remédio Prescrito:</label>
                        <input type="text" name="prescrito" id="prescrito">
                    </div>
                </div>
                <div class="ladoEsquerdo">
                    <div>
                        <label for="date">Data de Retorno</label>
                        <input type="date" name="dataRetorno" id="date" autocomplete>
                    </div>
                    <div class="mg-top">
                        <label class="alinharCima" for="posologiaConsultorio">Posologia</label>
                        <textarea name="posologiaConsultorio" id="posologiaConsultorio" cols="35" rows="4"></textarea>
                    </div>

                </div>
            </div>
            <div id="boxa" style="display: flex; width: 100%; justify-content: end;">
                <div class="btnEnviarBox"><button class="btnImprimir-Consul" id="btnImprimir">imprimir</button></div>
                <div class="btnEnviarBox"><button class="btnImprimir-Consul" id="btnEnviar">Enviar</button></div>
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
    </div>
</section>