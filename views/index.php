<?php
session_start();
$url = $_SERVER['REQUEST_URI'];
if ($url != '/') {
    include("../lib/vendor/autoload.php");
}
if (isset($_SESSION["user_id"]) ) {
    unset($_SESSION["user_id"]);
    session_destroy();
}
Classes\ClassLayout::setHeadBootstrap("login");
?>
<link rel="stylesheet" href="http://marketingpharmat.byethost7.com/lib/css/loginStyles.css">

<div class="container-fluid">
    <div class="row vh-100">
        <div class=" col-8">
            <div class="d-flex justify-content-center">
                <div id="formContent" class="mt-5">
                    <form class="mt-5" method="POST" action="/controllers/controllerLogin.php">
                        <h1>Entrar</h1>
                        <input type="text" id="nomeUsuario" class="fadeIn second my-2" name="nomeFarmacia" placeholder="Nome do Usuario" required>
                        <input type="password" id="senhaUsuario" class="fadeIn third my-2" name="senhaFarmacia" placeholder="Senha" required>
                        <input type="password" id="Acesso" class="fadeIn third my-2" name="ID" placeholder="ID de Acesso" required>
                        <input type="submit" class="fadeIn fourth my-2" value="Entrar">
                    </form>
                    <!-- Remind Passowrd -->
                    <div id="formFooter">
                        <a class="underlineHover" href="<?php echo DIRPAGE . 'views/home.php' ?>">Quero adquirir uma conta</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-4 bg-success pt-2">
            <div class="d-flex justify-content-center text-white gap-3 w-100 flex-column text-center mt-5">
                <h1>Marketing Pharma</h1>
                <h3 class="my-3">
                    O seu sistema de fidelização do cliente.
                </h3>
                <img src="<?php echo DIRPAGE . '/img/frame.png' ?>" class="m-auto rounded" alt="" width="200px">
                <p>Sobre nós</p>
            </div>
        </div>
    </div>
<?php \classes\ClassLayout::setFooter(); ?>