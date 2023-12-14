<?php
include_once "../lib/vendor/autoload.php";
include_once '../models/ClassCliente.php';

use \Models\Cliente;

$cliente = new Cliente;
$registros = $cliente->findAll($_SESSION['user_id']);

?>
<script src='<?php echo DIRPAGE . "lib/JS/ajaxBuscaInfoContatoCliente.js" ?>'></script>


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
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeModalBtn">&times;</span>
            <form action="">
                <i>
                    <h1>Editar dados</h1>
                </i>
                <br>
                <div class="modalAjuste">
                    <?php for ($i = 0; $i < 5; $i++) : ?>
                        <label for="nome">
                            <h3>Nome</h3>
                        </label>
                        <input type="text" name="nome">
                    <?php endfor; ?>
                </div>
                <div class="btnDivModalAlterar">
                    <button>Alterar</button>
                </div>
            </form>
        </div>
    </div>
</div>