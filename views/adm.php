<!-- <?php
session_start();
$url = $_SERVER['REQUEST_URI'];
if ($url != '/') {
    include("../lib/vendor/autoload.php");
}
if (isset($_SESSION["user_id"]) ) {
    unset($_SESSION["user_id"]);
    session_destroy();
}
include("../lib/vendor/autoload.php");
Classes\ClassLayout::setHeadBootstrap("login");
?>
<link rel="stylesheet" href="../lib/css/loginStyles.css">
<div class="container-fluid">
    <div class="row vh-100">
        <div class=" col-12">
            <div class="d-flex justify-content-center">
                <div id="formContent" class="mt-5">
                    <form class="mt-5" method="POST" action="/controllers/controllerCriarFarmacia.php">
                        <h1>Criar</h1>
                        <input type="text" id="nomeUsuario" class="fadeIn second my-2" name="nomeFarmacia" placeholder="Nome da Farmacia" required>

                        <input type="text" id="nomeUsuario" class="fadeIn second my-2" name="senhaFarmacia" placeholder="Senha da Farmacia" required>

                        <input type="text" id="nomeUsuario" class="fadeIn second my-2" name="emailFarmacia" placeholder="Email da Farmacia" required>

                        <input type="text" id="senhaUsuario" class="fadeIn third my-2" name="numeroFarmacia" placeholder="Telefone da Farmacia" required>

                        <input type="submit" class="fadeIn fourth my-2" value="Entrar">
                    </form>          
                </div>
            </div>
        </div>
    </div>
<?php \classes\ClassLayout::setFooter(); ?> -->