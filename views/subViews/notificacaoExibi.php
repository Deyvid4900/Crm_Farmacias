<div id="boxMensagemTempo" class="boxMensagemTempo">
    <div class="headerMensagem" id="closeNotificacao">
        <div style="cursor: pointer; color: white">&times;</div>
    </div>
    <div class="contentMensagem">
        <?php

        // Função para ordenar o array por data e hora
        function ordenarPorDataHora($a, $b)
        {
            $dataA = strtotime($a['dataEvento'] . ' ' . $a['horaEvento'] . ':00:00');
            $dataB = strtotime($b['dataEvento'] . ' ' . $b['horaEvento'] . ':00:00');

            return $dataA - $dataB;
        }
        $sumArrays = function ($a, $b) {
            return $a + $b;
        };

        function ordenarLembretePorDataHora($a, $b)
        {
            $dataA = strtotime($a['dataLembrete'] . ' ' . $a['horaLembrete'] . ':00:00');
            $dataB = strtotime($b['dataLembrete'] . ' ' . $b['horaLembrete'] . ':00:00');

            return $dataA - $dataB;
        }
        // Ordenar o array
        usort($eventosProximos, 'ordenarPorDataHora');
        usort($lembretes, 'ordenarLembretePorDataHora');
        // usort($dataRetorno, 'ordenarPorDataHora');

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

        $html = '';

       
        foreach ($lembretes as $key => $value) {
            $html .= '<div id="consultaMarcada" class="linhaBaixo consulta">Lembrete para: ' . $value['dataLembrete'];
            if (isset($value['horaLembrete'])) {
                $html .= ' as ' . $value['horaLembrete'] . ' horas</div><br>';
            } else {
                $html .= '</div><br>';
            }
        }
        $html .= '<br>';

        foreach ($dataRetorno as $key => $value) {
            $html .= '<div id="consultaMarcada" class="linhaBaixo consulta">consulta marcada para: ' . $value . '</div><br>';
        }
        foreach ($eventosProximos as $evento) {
            $tempoRestante = calcularTempoRestante($evento['tempoRestante']);

            $html .= " <div id='eventoMarcado' class='linhaBaixo evento'> <br>Evento: {$evento['nomeEvento']} - Faltam:{$tempoRestante['semanas']} semanas, {$tempoRestante['dias']} dias e {$tempoRestante['horas']} horas.<br> </div>\n";
        }
        echo $html;
        ?>


    </div>
</div>