// Use o jQuery para lidar com o envio do formulário
$(document).ready(function(){
    $('#cadastroEvento').submit(function(e){
        // Impede o comportamento padrão do formulário
        e.preventDefault();

        // Obtém os dados do formulário
        var formData = $(this).serialize();

        // Envia a solicitação AJAX
        $.ajax({
            type: 'POST',
            url: '/controllers/controllerEvento.php', // Substitua com o caminho real do seu controlador PHP
            data: formData,
            success: function(data){
                // Atualiza a div com o resultado retornado pelo servidor
                $('#resultado').html(data);
                console.log(data)
            }
        });
    });
});
    