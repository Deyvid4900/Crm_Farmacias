let nome_verificar
let data_verificar

function addNome(value) { nome_verificar = value }
function addData(value) { data_verificar = value }

const selectedCpf= document.getElementById('cpf')

selectedCpf.addEventListener('change', () => {
    cell = document.getElementById('phone')
    cpf = document.getElementById('cpf')
    sexo = document.getElementById('gender')
    email = document.getElementById('email')
    console.log(sexo.value)
    verificarUsuario(nome_verificar,data_verificar,cell.value,cpf.value,sexo.value,email.value)
})

async function verificarUsuario(nome, dataNasc, cell, cpf,sexo,email) {

    try {
        const response = await fetch('/controllers/controllerVerificaCliente.php', {
            method: 'POST',
            body: JSON.stringify({
                nome: nome,
                dataNasc: dataNasc,
                cell: cell,
                cpf: cpf,
                sexo:sexo,
                email:email
            })
        });

        const data = await response.json();

        // Manipule a resposta aqui
        console.log(data);

    } catch (error) {
        console.error('Erro:', error);
    }
}

$(document).ready(function () {
    $('#phone').inputmask('(99) 9999-9999');
    $('#cpf').inputmask('999-999-999-99');
    let buttonClicked = null;

    // Manipulador de clique para o botão de enviar
    $('#btnEnviar').click(function () {
        buttonClicked = 'submit'; // Armazena a informação de envio
    });

    // Manipulador de clique para o botão de imprimir
    $('#btnImprimir').click(function () {
        buttonClicked = 'imprimir'; // Armazena a informação de impressão
    });
    $('#formServicos').submit(function (e) {
        // Impede o comportamento padrão do formulário


        e.preventDefault();

        // Validar o formulário aqui, se necessário

        // Obtém os dados do formulário
        var formData = $(this).serialize();
        let alertaBox = $('#alertaBox');
        let containerAlerta = $('#containerAlerta');
        let loader = $('#loader');
        alertaBox.show();
        formData += '&buttonClicked=' + buttonClicked;


        // Envia a solicitação AJAX
        $.ajax({
            type: 'POST',
            url: '/controllers/controllerServicos.php', // Substitua com o caminho real do seu controlador PHP
            data: formData,
            beforeSend: function () {
                // Mostra o loader antes de enviar a solicitação AJAX

                loader.css("display", "flex");
                console.log(formData)
            },
            success: function (data) {
                handleResponse(data);

                if (data.includes('"status":"success"')) {
                    data = JSON.parse(data)
                    if (data.status === "success") {
                        var pdfContent = atob(data.pdfContent);

                        // Converte a string decodificada em um array de bytes
                        var bytes = new Uint8Array(pdfContent.length);
                        for (var i = 0; i < pdfContent.length; i++) {
                            bytes[i] = pdfContent.charCodeAt(i);
                        }

                        // Cria um Blob a partir do array de bytes
                        var blob = new Blob([bytes], { type: 'application/pdf' });

                        // Cria um objeto URL para o Blob
                        var url = window.URL.createObjectURL(blob);

                        // Cria um link temporário e configura seus atributos
                        var link = document.createElement('a');
                        link.href = url;
                        link.download = 'documento.pdf';

                        // Adiciona o link ao corpo do documento (body)
                        document.body.appendChild(link);

                        // Simula um clique no link para iniciar o download
                        link.click();

                        // Remove o link do corpo do documento após o download
                        document.body.removeChild(link);

                        // Revoga o objeto URL para liberar recursos do sistema
                        window.URL.revokeObjectURL(url);
                    } else if (data.status === "error") {
                        // Trate o erro conforme necessário
                        console.error("Erro: " + data.message);
                    }
                }


            },
            error: function (xhr, textStatus, errorThrown) {
                console.log("Erro na solicitação AJAX:", errorThrown);
                // Lide com os erros de maneira apropriada
            },
            complete: function () {
                // Depois de concluir a solicitação AJAX, esconde o loader
                loader.hide();
                buttonClicked = null;
            }
        });
    });

    function handleResponse(data) {
        let containerAlerta = $('#containerAlerta');
        let resultado = $('#resultado');

        // Define as configurações com base na mensagem retornada
        let config = {
            success: {
                bgColor: "#d4edda",
            },
            failure: {
                bgColor: "#f8d7da",
            },
        };

        // Atualiza a div com o resultado retornado pelo servidor
        resultado.html(data);
        containerAlerta.css({
            "width": "375px",
            "background-color": config[data.includes("sucesso") ? 'success' : 'failure'].bgColor,
            "display": "flex"
        });

        // Define um timeout para reverter as mudanças após 3 segundos
        setTimeout(function () {
            resultado.html('');
            containerAlerta.css({
                "width": "0px",
                "background-color": "#eee",
                "display": "none"
            });
        }, 3000);
    }
});
