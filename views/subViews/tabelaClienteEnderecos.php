<?php
include_once "../lib/vendor/autoload.php";
include_once '../models/ClassCliente.php';

use \Models\Cliente;

$cliente = new Cliente;
$registros = $cliente->findAllByFarmaciaId($_SESSION['user_id']);

?>
<script src='<?php echo DIRPAGE . "lib/JS/ajaxBuscarInfoEnderecoCliente.js" ?>'></script>


<div class="container" id="tabelaEnderecosCliente" style="display: none;">
    <div class="head">
        <h1>Endereços dos Clientes</h1>
    </div>
    <div class="content">
        <table id="tabelaEnderecoCliente">
            <thead>
                <tr>
                    <td>Nome</td>
                    <td>logradouro</td>
                    <td>bairro</td>
                    <td>numeroCasa</td>
                    <td>cidade</td>
                    <td>uf</td>
                 <!-- Nova coluna para botões -->
                </tr>
            </thead>

            <tbody id="resultadoQuery">
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
            </tbody>

        </table>
    </div>
</div>