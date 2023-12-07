<?php
include_once("../lib/vendor/autoload.php");
include_once '../models/ClassEvento.php';

use \Models\Eventos;

?>
<link rel="stylesheet" href="style.css">
<div class="container">
    <div class="head">
        <h1>Eventos Proximos</h1>
    </div>
    <div class="content">
        <?php

        $eventos = new Eventos;
        $registros = $eventos->findAll($_SESSION['user_id']);

        function compararDatas($a, $b)
        {
            $dataB = strtotime($a['dataEvento']);
            $dataA = strtotime($b['dataEvento']);

            if ($dataB == $dataA) {
                // Se a data for a mesma, compare pela hora
                $horaB = strtotime($a['horaEvento']);
                $horaA = strtotime($b['horaEvento']);

                return ($horaB > $horaA) ? -1 : 1; // Invertido o sinal para ordenar de forma decrescente pela hora
            }

            return ($dataA < $dataB) ? -1 : 1; // Invertido o sinal para ordenar de forma decrescente pela data
        }
        function dataJaPassou($data)
        {
            // Converte a data para um timestamp
            $dataTimestamp = strtotime($data);

            // Obtém o timestamp atual
            $agoraTimestamp = time();

            // Verifica se a data já passou (menor que o timestamp atual)
            return $agoraTimestamp <  $dataTimestamp;
        }

        usort($registros, 'compararDatas');

        $resultado = array_slice(array_reverse($registros), 0,5);

        foreach ($resultado as $key => $value) {
            // var_dump("Data do Evento: " . $value["dataEvento"]);
            if (dataJaPassou($value["dataEvento"])) {
                unset($resultado);
                $resultado = array_values($resultado);
            }
        }
        
        // Reindexa o array após remover elementos
        


        $table  = '<table>';
        $table .= '<thead>';
        $table .= '<tr>';
        $table .= '<td>id</td>';
        $table .= '<td>Nome do Evento</td>';
        $table .= '<td title="ano/mes/dia">Data</td>';
        $table .= '<td>Hora</td>';
        $table .= '<td>Descrição</td>';
        $table .= '<td>Tipo de Evento</td>';
        $table .= '</tr>';
        $table .= '</thead>';
        $table .= '<tbody>';

        foreach ($resultado as $registro) {

            $table .= '<tr>';
            $table .= "<td>" . $registro['id_Evento_PK'] . "</td>";
            $table .= "<td>" . $registro['nomeEvento'] . "</td>";
            $table .= "<td>" . $registro['dataEvento'] . "</td>";
            $table .= "<td>" . $registro['horaEvento'] . "</td>";
            $table .= "<td ><div class='desc'>" . $registro['descricao'] . "</div></td>";
            $table .= "<td>" . $registro['tipoEvento'] . "</td>";


            $table .= '</tr>';
        }

        $table .= '</tbody>';
        $table .= '</table>';


        echo $table;
        // var_dump($resultado)
        ?>
    </div>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeModalBtn">&times;</span>

            <form action="">
                <i>
                    <h1>Editar dados</h1>
                </i>
                <br>
                <div style="display: flex;justify-content:space-between;align-items: center;">
                    <div class="modalAjuste">
                        <label for="nome">
                            <h3>nome</h3>
                        </label>
                        <input type="text" name="nome">
                    </div>
                    <div class="modalAjuste">
                        <label for="nome">
                            <h3>nome</h3>
                        </label>
                        <input type="text" name="nome">
                    </div>
                    <div class="modalAjuste">
                        <label for="nome">
                            <h3>nome</h3>
                        </label>
                        <input type="text" name="nome">
                    </div>
                    <div class="modalAjuste">
                        <label for="nome">
                            <h3>nome</h3>
                        </label>
                        <input type="text" name="nome">
                    </div>
                    <div class="modalAjuste">
                        <label for="nome">
                            <h3>nome</h3>
                        </label>
                        <input type="text" name="nome">
                    </div>
                    <div class="btnDivModalAlterar">
                        <button>Alterar</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>