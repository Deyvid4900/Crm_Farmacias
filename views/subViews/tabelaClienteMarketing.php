<?php
include_once "../lib/vendor/autoload.php";
include_once '../models/ClassCliente.php';

use \Models\Cliente;

$cliente = new Cliente;
$registros = $cliente->findAllByFarmaciaId($_SESSION['user_id']);

?>



<div class="container" id="ContatosCliente">
    <div class="head">
        <h1>Contato dos Clientes</h1>
    </div>
    <div class="content">
        <table id="tabelaEnderecoCliente">
            <thead>
                <tr>
                    <td>Nome</td>
                    <td>celular</td>
                    <td>celular secundario</td>
                    <td>telefone fixo</td>
                    <td>email</td>
                 <!-- Nova coluna para botões -->
                </tr>
            </thead>

            <tbody id="resultadoQueryContato">

            </tbody>



        </table>
    </div>
   
</div>
