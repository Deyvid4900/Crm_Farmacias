<?php
include_once "../lib/vendor/autoload.php";
include_once '../models/ClassCliente.php';

use \Models\Cliente;

$cliente = new Cliente;
$registros = $cliente->findAll($_SESSION['user_id']);

?>


<div class="container" id="tabelaDados">
    <div class="head">
        <h1>Dados Pessoais</h1>
    </div>
    <div class="content">
        <table>
            <thead>
                <tr>
                    <td>Nome</td>
                    <td>Sexo</td>
                    <td>Data de Nascimento</td>
                    <td>Estado Civil</td>
                    <td>Profissão</td>
                     <!-- Nova coluna para botões -->
                </tr>
            </thead>
            <tbody>
                <?php foreach ($registros as $registro) : ?>
                    <tr>

                        <td><?= $registro['nome'] ?></td>
                        <td><?= $registro['sexo'] ?></td>
                        <td><?= $registro['dataNasc'] ?></td>
                        <td><?= $registro['estadoCivil'] ?></td>
                        <td><?= $registro['profissao'] ?></td>
                        
                    </tr>
                <?php endforeach; ?>
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