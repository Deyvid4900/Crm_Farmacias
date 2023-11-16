<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="shortcut icon" href="../crm/assets/favicon/favicon.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../crm/Login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="row h-100">
            <div class=" col-8">
                <div class="d-flex justify-content-center">
                    <div  id="formContent" class="mt-5">
                       <form class="mt-5" method="POST" action="">
                           <h1>Entrar</h1>
                           <input type="text" id="nomeUsuario" class="fadeIn second my-2" name="nomeUsuario" placeholder="Nome do Usuario">
                           <input type="text" id="senhaUsuario" class="fadeIn third my-2" name="senhaUsuario" placeholder="Senha">
                           <input type="text" id="Acesso" class="fadeIn third my-2" name="ID" placeholder="ID de Acesso">
                           <input type="submit" class="fadeIn fourth my-2" value="Entrar">
                       </form>
                       <!-- Remind Passowrd -->
                       <div id="formFooter">
                           <a class="underlineHover" href="../crm/templates/main/main.php">Quero adquirir uma conta</a>
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
                    <img src="./assets/img/frame.png" class="m-auto rounded" alt="" width="200px">
                    <p>Sobre nós</p>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>