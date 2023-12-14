
$(document).ready(function () {
    let loader = $('#loader');
    $('#FormFiltro').submit(function (e) {
        // Impede o comportamento padrão do formulário
        e.preventDefault();



        // Obtém os dados do formulário
        var formData = $(this).serialize();
        

        // Envia a solicitação AJAX
        $.ajax({
            type: 'POST',
            url: '/controllers/controllerFiltroAcao.php', // Substitua com o caminho real do seu controlador PHP
            data: formData,
            beforeSend: function () {
                // Mostra o loader antes de enviar a solicitação AJAX
                loader.css("display", "flex");
                data = ''
                $('#resultadoQueryCliente').empty();
            },
            success: function (data) {
                $('#resultadoQueryCliente').empty();
                data = JSON.parse(data)
                data.map((e) => {
                    var tr = $('<tr>');
                    var td = $('<td>', {
                        text: e["id"],
                        id: e["id"]
                    });
                    var td2 = $('<td>', {
                        text: e["nome"],
                        id: e["id"]
                    });
                    var td3 = $('<td>', {
                        text: e["sexo"],
                        id: e["id"]
                    });
                    var td4 = $('<td>', {
                        text: e["celular1"],
                        id: e["id"]
                    });
                    var td5 = $('<td>', {
                        text: e["telfixo"],
                        id: e["id"]
                    });
                    var td6 = $('<td>', {
                        text: e["email"],
                        id: e["id"]
                    });
                    var tdCheck = $('<td>');
                    var input = $('<input>', {
                        class:'checkboxFiltro',
                        type:'checkbox',
                        id: e["id"],
                        name:'selected',
                        value:e["id"]
                    });
                    tdCheck.append(input)

                

                    tr.append(td);
                    tr.append(td2);
                    tr.append(td3);
                    tr.append(td4);
                    tr.append(td5);
                    tr.append(td6);
                    tr.append(tdCheck);

                    $("#resultadoQueryCliente").append(tr);
                })
            },
            complete: function () {
                // Depois de concluir a solicitação AJAX, esconde o loader
                loader.css("display", "none");
            }
        });
    });
});
