<div id="boxMensagemTempo" class="boxMensagemTempo">
    <div class="headerMensagem" id="closeNotificacao">
        <div style="cursor: pointer;">&times;</div>
    </div>
    <div class="contentMensagem">
        <ul style="width: 100%; height: 100%;">
            <?php foreach ($eventosProximos as $key => $value) {
                echo '<li style="padding:10px;">';
                echo $value["nomeEvento"];
                echo '</li>';
                echo '<i>';
                echo $tempoRestanteFormatado->converterTempoRestante($value["tempoRestante"]);
                echo '</i>';
                echo '<hr>';
            } ?>
        </ul>
    </div>
</div>