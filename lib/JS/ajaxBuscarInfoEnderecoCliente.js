$(document).ready(function () {
    
    

    var itemVazio = false;

    let loader = $('#loader');
    $.ajax({
        method: 'GET',
        url: '../controllers/controllerEnviaDadosEndereco.php',
        dataType: 'json',
        beforeSend: function () {
            // Mostra o loader antes de enviar a solicitação AJAX
            loader.css("display", "flex");
        },
        success: function (data) {
            // Callback de sucesso
            // Função para adicionar linhas à tabela
            
            data.map((e) => {
                e.map((element) => {
                    
                    // Cria uma nova linha da tabela apenas para dados não vazios
                    var tr = $('<tr>');
                    var td = $('<td>', {
                        text: element["nome"],
                        id:element["cliente_id"]
                    });
                    var td2 = $('<td>', {
                        text: element["logradouro"],
                        id:element["cliente_id"]
                    });
                    var td3 = $('<td>', {
                        text: element["bairro"],
                        id:element["cliente_id"]
                    });
                    var td4 = $('<td>', {
                        text: element["numeroCasa"],
                        id:element["cliente_id"]
                    });
                    var td5 = $('<td>', {
                        text: element["cidade"],
                        id:element["cliente_id"]
                    });
                    var td6 = $('<td>', {
                        text: element["uf"],
                        id:element["cliente_id"]
                    });
                    // var img = $('img')
                    // img.prop('src',"../../img/icones/pencil.svg")
                    // var span = $('span')
                    // var tdAlterar=$('td')
                    // // span.append(img)
                    // tdAlterar.append(img)

                    
                   

                    tr.append(td);
                    tr.append(td2);
                    tr.append(td3);
                    tr.append(td4);
                    tr.append(td5);
                    tr.append(td6);
                    // tr.append(tdAlterar);
                    

                    $("#resultadoQuery").append(tr);
                })


            });
            // Iterar sobre os dados e adicionar linhas à tabela


            // Aqui você pode manipular os dados recebidos
        },
        error: function (error) {
            // Callback de erro
            console.error('Erro:', error);
        },
        complete: function () {
            // Depois de concluir a solicitação AJAX, esconde o loader
            loader.css("display", "none");
        }
    });
});