<?php
include("../lib/vendor/autoload.php");
include '../models/ClassEvento.php';
use \Models\Eventos;
// session_start();
?>
<link rel="stylesheet" href="style.css">
<div class="container">
    <div class="head ">
        <h1>Eventos Proximos</h1>
    </div>
    <div class="content">
        <?php

        $eventos = new Eventos;
        $registros = $eventos->findAll($_SESSION['user_id']);
        function compararDatas($a, $b)
        {
            $dataA = strtotime($a['dataEvento']);
            $dataB = strtotime($b['dataEvento']);

            if ($dataA == $dataB) {
                return 0;
            }

            return ($dataA < $dataB) ? -1 : 1;
        }
        usort($registros, 'compararDatas');
        $resultado = array_slice($registros, 0, 5);


        $table  = '<table>';
        $table .= '<thead>';
        $table .= '<tr>';
        $table .= '<td>Nome do Evento</td>';
        $table .= '<td>Data</td>';
        $table .= '<td>Hora</td>';
        $table .= '<td>Descrição</td>';
        $table .= '<td>Tipo de Evento</td>';
        $table .= '<td class="btnTD">Editar</td>';
        $table .= '<td class="btnTD">Excluir</td>';
        $table .= '</tr>';
        $table .= '</thead>';
        $table .= '<tbody>';

        foreach ($resultado as $registro) {
            $table .= '<tr>';
            $table .= "<td>" . $registro['nomeEvento'] . "</td>";
            $table .= "<td>" . $registro['dataEvento'] . "</td>";
            $table .= "<td>" . $registro['horaEvento'] . "</td>";
            $table .= "<td ><div class='desc'>" . $registro['descricao'] . "</div></td>";
            $table .= "<td>" . $registro['tipoEvento'] . "</td>";
            $table .= "<td class='btnTD' id=" . $registro['id_Evento_PK'] . "  >
                        <button class='openModalBtn'>
                        <svg xmlns='http://www.w3.org/2000/svg'width='24' height='24' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                        <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                        <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z'/>
                      </svg></button></td>";
            $table .= "<td class='btnTD'><button>
                      <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='red' class='bi bi-trash3' viewBox='0 0 16 16'>
                      <path d='M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5'/>
                    </svg></button></td>";


            $table .= '</tr>';
        }

        $table .= '</tbody>';
        $table .= '</table>';


        echo $table;
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