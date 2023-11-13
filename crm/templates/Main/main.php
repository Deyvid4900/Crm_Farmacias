<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>
    <!-- <link rel="stylesheet" href="./main.css"> -->
    <link rel="stylesheet" href="../../includes/Header/header.css"> 
    <link rel="stylesheet" href="../../includes/Sidebar/sidebar.css"> 
    <link rel="stylesheet" href="../../modules/formCadastro/formcadastro.css"> 
    <?php
        // include "../../includes/Imports/Imports.php";
    ?>
</head>
<body>
    <?php
        include '../../includes/Header/header.php';
        include '../../includes/Sidebar/sidebar.php';
        include '../../modules/formCadastro/CadastroForm.php';
    ?>

    <script src="./main.js"></script>
    <script src="../../includes/Sidebar/sidebar.js"></script>
</body>
</html>