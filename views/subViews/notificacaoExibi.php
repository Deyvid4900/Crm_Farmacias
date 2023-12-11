<div id="boxMensagemTempo" class="boxMensagemTempo">
    <div class="headerMensagem" id="closeNotificacao">
        <div style="cursor: pointer; color: white">&times;</div>
    </div>
    <div class="contentMensagem">
        <ul style="width: 100%;height: 100%;margin-top: 18px;">
            <?php

            // Função para ordenar o array por data e hora
            function ordenarPorDataHora($a, $b)
            {
                $dataA = strtotime($a['dataEvento'] . ' ' . $a['horaEvento'] . ':00:00');
                $dataB = strtotime($b['dataEvento'] . ' ' . $b['horaEvento'] . ':00:00');

                return $dataA - $dataB;
            }

            // Ordenar o array
            usort($eventosProximos, 'ordenarPorDataHora');

            // Função para calcular o tempo restante
            function calcularTempoRestante($tempoRestante)
            {
                $semanas = floor($tempoRestante / 604800); // 1 semana = 7 dias * 24 horas * 60 minutos * 60 segundos
                $tempoRestante %= 604800;
                $dias = floor($tempoRestante / 86400); // 1 dia = 24 horas * 60 minutos * 60 segundos
                $tempoRestante %= 86400;
                $horas = floor($tempoRestante / 3600); // 1 hora = 60 minutos * 60 segundos

                return array('semanas' => $semanas, 'dias' => $dias, 'horas' => $horas);
            }

            // Exemplo de uso
            foreach ($eventosProximos as $evento) {
                $tempoRestante = calcularTempoRestante($evento['tempoRestante']);
                echo " <div class='linhaBaixo'> <br>Evento: {$evento['nomeEvento']} - Faltam:{$tempoRestante['semanas']} semanas, {$tempoRestante['dias']} dias e {$tempoRestante['horas']} horas.<br> </div>\n";
            }

            ?>
        </ul>
    </div>
</div>