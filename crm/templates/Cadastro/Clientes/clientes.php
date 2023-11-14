
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketing Pharma</title>
    <!-- <link rel="stylesheet" href="./main.css"> -->
    <link rel="stylesheet" href="../../../includes/Header/header.css" >
    <link rel="stylesheet" href="../../../includes/Sidebar/sidebar.css" >
    <link rel="stylesheet" href="../../../../crm//modules/formCadastro/formcadastro.css">
    <style>
        /* main{width: calc(100%-90px); height: auto;float: right; margin: auto;} */
    </style>
</head>
<body>
    <?php
    require '../../../../../Crm_Farmacias/crm/includes/Header/header.php';
    require '../../../../../Crm_Farmacias/crm/includes/Sidebar/sidebar.php';
    
    ?>
    <main>
        <!-- aqui vem o conteudo dessa pagina(Main/Principal)-->
        <?php
            require '../../../../../Crm_Farmacias/crm/modules/formCadastro/cadastroForm.php';
        ?>
    </main>
    <script src="../../../../../Crm_Farmacias/crm/templates/Main/main.js"></script>
</body>

</html>