<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketing Pharma</title>
    <!-- <link rel="stylesheet" href="./main.css"> -->
    <link rel="stylesheet" href="../../../includes/Header/header.css" >
    <script src="../../../includes/Header/header.js"></script>

    <link rel="stylesheet" href="../../../includes/Sidebar/sidebar.css">
    <script src="../../../../crm/includes/Sidebar/sidebar.js"></script>

    <link rel="stylesheet" href="../../../modules/formCadastro/formcadastro.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />


   
</head>
<body>
    <?php
    include '../../../includes/Header/header.php';
    include '../../../includes/Sidebar/sidebar.php';
    ?>
    <main>
        <?php
            include '../../../../crm/modules/formCadastro/CadastroForm.php';
        ?>
    </main>
    <script src="../../../templates/Main/main.js"></script>
</body>

</html>