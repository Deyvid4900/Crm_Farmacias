<link rel="stylesheet" href="../../lib/CSS/formEventoStyles.css">

<!-- class ativo mostra o form -->
<section class="formInit-bg aala ativo" id="b">
    <div class="form-bg">
        <div class="head">
            <h1>Eventos</h1>
        </div>
        <form action="../../controllers/controllerEvento.php" method="POST">
            <div id="styleForm">
                <div class="flexForm">
                    <label for="nome">Nome </label>
                    <input type="text" name="nomeEvento" placeholder="Nome do Evento" id="nome" autocomplete="off" required>
                    <label class="nCliente" for="numero">Data</label>
                    <input type="date" name="dataEvento" id="numero" autocomplete="off" required>
                    <label class="cPf" for="cpf">Horas</label>
                    <input type="number" placeholder="horario" name="horaEvento" id="cpf" maxlength="11" autocomplete="off" required>
                    <!-- mexer cpf validar formato -->
                </div>
                <div class="formAlinhado">
                    <div class="flexCol1">
                        <div class="padDown">
                            <label for="hospitalAtual" class="aaaa">Descrição</label>
                            <input type="text" name="desc" placeholder="Descrição" id="hospitalAtual">
                        </div>

                    </div>
                    <div class="flexCol2">
                        <div class="padDown">
                            <label class="estadoCivil" for="especiaLidade">Tipo de Evento</label>
                            <input type="text" name="tipoEvento" placeholder="Tipo do evento" id="especiaLidade">
                        </div>
                    </div>

                </div>

            </div>



            <button type="submit">Cadastrar</button>
        </form>
    </div>
</section>