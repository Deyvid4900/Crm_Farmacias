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

        </main>
        <script src="../../../crm/templates/Main/main.js"></script>
    </body>

    </html>
<?php
} else {
    header('Location:../index.php');
}
?>