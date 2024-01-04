$(document).ready(function () {



    var itemVazio = false;

    $.ajax({
        url: '../controllers/controllerDadosContatosClientes.php',
        method: 'GET',
        dataType: 'json',
        beforeSend: function () {
            // Mostra o loader antes de enviar a solicitação AJAX
           
        },
        success: function (data) {
            // Callback de sucesso
            // Função para adicionar linhas à tabela
        
            data.map((element) => {
             
                // Cria uma nova linha da tabela apenas para dados não vazios
                var tr = $('<tr>');
                var td = $('<td>', {
                    text: element["nome"],
                    id: element["id"]
                });
                var td2 = $('<td>', {
                    text: element["celular1"],
                    id: element["id"]
                });
                var td3 = $('<td>', {
                    text: element["celular2"],
                    id: element["id"]
                });
                var td4 = $('<td>', {
                    text: element["telfixo"],
                    id: element["id"]
                });
                var td5 = $('<td>', {
                    text: element["email"],
                    id: element["id"]
                });
              
                




                tr.append(td);
                tr.append(td2);
                tr.append(td3);
                tr.append(td4);
                tr.append(td5);



                $("#resultadoQueryContato").append(tr);
            })

            // Iterar sobre os dados e adicionar linhas à tabela


            // Aqui você pode manipular os dados recebidos
        },
        error: function (error) {
            // Callback de erro
            console.error('Erro:', error);
        },
        complete: function () {
            // Depois de concluir a solicitação AJAX, esconde o loader
        }
    });
});