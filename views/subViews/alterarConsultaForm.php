<link rel="stylesheet" href="../../lib/css/formClienteStyles.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
<!-- class ativo mostra o form -->
<?php
include_once "../models/ClassConsultorio.php";

use \Models\Consultorio;

$obj = new Consultorio;
$registro = $obj->find($_GET['ids']);
// var_dump($registro);
?>
<section class="formInit-bg w ativo " id="b">
    <div class="form-bg" style="bottom: -320px;">
        <div class="head">
            <h1>Alterar Dados da Consulta</h1>
        </div>
        <form action="../../controllers/controllerConsultaAlterar.php" id="formCLiente" method="POST">
        <div class="infoFlex-Consultorio">
                <input type="hidden" name="idFarmacia" value="<?php echo $_SESSION['user_id'] ?>">
                <input type="hidden" name="horaConsulta" value="<?php echo date("H:i:s"); ?>">
                <input type="hidden" name="idConsulta" value="<?php echo $registro['id_consulta_PK'] ?>">

            </div>

            <div class="box">
                <div class="FlexColum">
                    <div>
                        <label for="NameFarm">Nome do Farmacêutico:</label>
                        <input type="text" name="NameFarm" value="<?php echo $registro['nomefarmaceutico'] ?>" id="NameFarm">
                    </div>
                    <div>
                        <label for="namePaciente">Nome do Paciente:</label>
                        <input type="text" name="namePaciente" value="<?php echo $registro['nomePaciente'] ?>" id="namePaciente">
                    </div>
                    <div>
                        <label for="prescrito">Remédio Prescrito:</label>
                        <input type="text" name="prescrito" id="prescrito" value="<?php echo $registro['remediosPrescritos'] ?>">
                    </div>
                </div>
                <div class="ladoEsquerdo">
                    <div>
                        <label for="date">Data de Retorno</label>
                        <input type="date" name="dataRetorno" id="date" value="<?php echo $registro['dataConsulta'] ?>" autocomplete>
                    </div>
                    <div class="mg-top">
                        <label class="alinharCima" for="posologiaConsultorio">Posologia</label>
                        <textarea name="posologiaConsultorio" id="posologiaConsultorio"  cols="35" rows="4"><?php echo $registro['Posologia'] ?>
                        </textarea>
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