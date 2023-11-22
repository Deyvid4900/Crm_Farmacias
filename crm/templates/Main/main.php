<?php
session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
?>

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Marketing Pharma</title>
        <!-- <link rel="stylesheet" href="./main.css"> -->
        <style>
            main {
                width: calc(100%-90px);
                height: auto;
                float: right;
                margin: auto;
            }
        </style>
    </head>

    <body>
        <?php
        include '../../../crm/includes/Header/header.php';
        include '../../../crm/includes/Sidebar/sidebar.php';
        ?>
        <main>
            <!-- aqui vem o conteudo dessa pagina(Main/Principal)-->
            <div>
                <?php
                require_once '../../../../Crm_Farmacias/crm/config/config_Bd.php';
                require_once '../../../crm/config/configs.php';
                require_once '../../../crm/Controller/controllerCrud.php';
                require_once '../../../crm/modules/eventosModule.php';

                // Cria uma instância da classe Eventos
                $eventos = new Eventos();

                // Usa o método findAll() para obter todos os registros
                $registros = $eventos->findAll();

                // Agora você pode iterar sobre o array $registros para acessar cada registro
                foreach ($registros as $registro) {
                    echo $registro['nomeEvento'] . "<br>";
                    echo $registro['dataEvento'] . "<br>";
                    echo $registro['descricao'] . "\n";
                    echo "<br>";
                }



                ?>
            </div>
        </main>
        <script src="../../../crm/templates/Main/main.js"></script>
    </body>

    </html>
<?php
} else {
    header('Location:../index.php');
}
?>