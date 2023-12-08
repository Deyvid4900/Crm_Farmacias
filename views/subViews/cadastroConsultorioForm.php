<section class="molduraForm-Bg">
    <div class="antesFormb-bg">
        <div class="seilaa">
            <h2>Consultorio</h2>
        </div>


        <div class="FlexInfooo">
            <p>Nome da Farmácia</p>
            <p>CNPJ</p>
        </div>
        <form action="../../controllers//controllerConsultorio.php" method="POST"  class="formServicoss" id="formConsultorio">
            <div class="infoFlex-Consultorio">
                <input type="hidden" name="idFarmacia" value="<?php echo $_SESSION['user_id'] ?>">
                <input type="hidden" name="horaConsulta" value="<?php echo date("H:i:s"); ?>">
                <div class="lado40px">
                    <label for="NameFarm">Nome do Farmacêutico:</label>
                    <input type="text" name="NameFarm" id="NameFarm">
                </div>
                <div>
                    <label for="date">Data</label>
                    <input type="date" name="date" id="date" autocomplete>
                </div>
            </div>

            <div class="FlexColum">
                <div class="lado40px">
                    <label for="namePaciente">Nome do Paciente:</label>
                    <input type="text" name="namePaciente" id="namePaciente">
                </div>
                <div class="lado40px">
                    <label for="prescrito">Remédio Prescrito:</label>
                    <input type="text" name="prescrito" id="prescrito">
                </div>
            </div>


            <div class="mg-top">
                <label class="alinharCima" for="posologiaConsultorio">Posologia</label>
                <textarea name="posologiaConsultorio" id="posologiaConsultorio" cols="30" rows="5"></textarea>
            </div>

            <button class="btnImprimir-Consul">Imprimir</button>
        </form>
    </div>
</section>
<div id="resultado">

</div>