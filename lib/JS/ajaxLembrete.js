
$(document).ready(function () {
    $('#formLembrete').submit(function (e) {
        // Impede o comportamento padrão do formulário
        e.preventDefault();

        // Obtém os dados do formulário
        var formData = $(this).serialize();
        let alertaBox = $('#alertaBox');
        let containerAlerta = $('#containerAlerta');
        let loader = $('#loader');
        alertaBox.show();

        // Envia a solicitação AJAX
        $.ajax({
            type: 'POST',
            url: '/controllers/controllerCriarLembrete.php', // Substitua com o caminho real do seu controlador PHP
            data: formData,
            beforeSend: function () {
                // Mostra o loader antes de enviar a solicitação AJAX
                loader.css("display","flex");
            },
            success: function (data) {
                console.log(data);

                // Atualiza a div com o resultado retornado pelo servidor
                if (data == "Lembrete cadastrado com sucesso!") {
                    $('#resultado').html(data);
                    containerAlerta.css({
                        "width": "375px",
                        "background-color": "#d4edda",
                        "display": "flex"
                    });

                    // Define um timeout para reverter as mudanças após 3 segundos
                    setTimeout(function () {
                        $('#resultado').html('');
                        containerAlerta.css({
                            "width": "0px",
                            "background-color": "#d4edda",
                            "display": "none"
                        });
                    }, 3000);
                } else if (data == "Erro ao cadastrar o Lembrete.") {
                    $('#resultado').html(data);
                    containerAlerta.css({
                        "width": "375px",
                        "background-color": "#f8d7da",
                        "display": "flex"
                    });

                    // Define um timeout para reverter as mudanças após 3 segundos
                    setTimeout(function () {
                        $('#resultado').html('');
                        containerAlerta.css({
                            "width": "0px",
                            "background-color": "#f8d7da",
                            "display": "none"
                        });
                    }, 3000);
                }
            },
            complete: function () {
                // Depois de concluir a solicitação AJAX, esconde o loader
                loader.hide();
            }
        });
    });
});
