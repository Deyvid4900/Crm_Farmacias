<script src='<?php echo DIRPAGE . "lib/JS/ajaxBuscaCliente.js" ?>'></script>
<?php
include_once "../lib/vendor/autoload.php";
include_once '../models/ClassCliente.php';

use \Models\Cliente;
$cliente = new Cliente;
$registros = $cliente->findAllByFarmaciaId($_SESSION['user_id']);

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
                    <td>Remedio Controlado</td>
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
                        <td><?= $registro['nomeRemedioControl'] ?></td>
                        <td><?= $registro['dataNasc'] ?></td>
                        <td><?= $registro['estadoCivil'] ?></td>
                        <td><?= $registro['profissao'] ?></td>
                        
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
   
</div>