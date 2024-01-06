<?php
include_once("../lib/vendor/autoload.php");
include_once '../models/ClassLembrete.php';


use Models\Lembrete;

?>
<div class="container" style="margin-bottom: 20px;max-height: 425px;">
    <div class="head">
        <h1>Lembretes Proximos</h1>
    </div>
    <div class="content">
        <?php

        $eventos = new Lembrete;
        $registros = $eventos->findAll($_SESSION['user_id']);
        function datasComparar($a, $b)
        {
            $dataB = strtotime($a['dataLembrete']);
            $dataA = strtotime($b['dataLembrete']);

            if ($dataB == $dataA) {
                // Se a data for a mesma, compare pela hora
                $horaB = strtotime($a['horaLembrete']);
                $horaA = strtotime($b['horaLembrete']);

                return ($horaB > $horaA) ? -1 : 1; // Invertido o sinal para ordenar de forma decrescente pela hora
            }

            return ($dataA < $dataB) ? -1 : 1; // Invertido o sinal para ordenar de forma decrescente pela data
        }
        function passouData($data)
        {
            // Converte a data para um timestamp
            $dataTimestamp = strtotime($data);

            // Obtém o timestamp atual
            $agoraTimestamp = time();

            // Compara os timestamps
            return $dataTimestamp < $agoraTimestamp;
        }


        foreach ($registros as $key => $value) {
            // String com a data e hora
            $dataHoraRegistro = $value["dataLembrete"] . ' ' . $value["horaLembrete"];
        
            // Convertendo a string para um objeto DateTime
            $dataHoraInformada = new DateTime($dataHoraRegistro);
        
            // Obtendo a data e hora atual
            $dataHoraAtual = new DateTime();
        
            // Comparando as datas e horas
            if ($dataHoraInformada <= $dataHoraAtual) {
                // Remove o item do array se a condição for atendida
                unset($registros[$key]);
            }
        }

        usort($registros, 'datasComparar');






        $resultado = array_slice(array_reverse($registros), 0, 5);



        $table  = '<table >';
        $table .= '<thead>';
        $table .= '<tr>';
    
        $table .= '<td>Nome do Lembrete</td>';
        $table .= '<td title="ano/mes/dia">Data</td>';
        $table .= '<td>Hora</td>';
        $table .= '<td>Descrição</td>';
       
        $table .= '</tr>';
        $table .= '</thead>';
        $table .= '<tbody>';

        foreach ($resultado as $registro) {

            $table .= '<tr>';
        
            $table .= "<td>" . $registro['nomeLembrete'] . "</td>";
            $table .= "<td>" . $registro['dataLembrete'] . "</td>";
            $table .= "<td>" . $registro['horaLembrete'] . "</td>";
            $table .= "<td ><div class='desc'>" . $registro['descLembrete'] . "</div></td>";

            $table .= '</tr>';
        }

        $table .= '</tbody>';
        $table .= '</table>';


        echo $table;
        ?>
    </div>
    
</div>