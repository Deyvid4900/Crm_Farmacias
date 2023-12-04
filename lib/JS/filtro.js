const MaracarTodos = document.getElementById("MaracarTodos")
const formMensagem = document.getElementById("formMensagem")
const btnEnviarFormMensagens = document.getElementById("btnEnviarFormMensagens")
const input = document.getElementById("content")
const tipoMensagem = document.getElementById("tipo")
let aux = null;


const emailBtn = document.getElementById("emailBtn")
const smsBtn = document.getElementById("smsBtn")
const whatsBtn = document.getElementById("whatsBtn")


MaracarTodos.addEventListener("click", () => {
    const allcheckboxFiltro = [...document.getElementsByClassName("checkboxFiltro")]
    allcheckboxFiltro.forEach(element => {

        element.checked = !element.checked;
    });
})

// Adiciona um ouvinte de evento ao botão para abrir o modal
emailBtn.addEventListener('click', (e) => {
    meuModal.style.display = 'block'; // Exibe o modal
    const input = document.getElementById("content")
    console.log(aux)
    aux = 1

    input.value = obterIdsCheckboxesMarcados()
});
smsBtn.addEventListener('click', () => {
    meuModal.style.display = 'block'; // Exibe o modal
    const input = document.getElementById("content")
    aux = 2
    console.log(aux)
    input.value = obterIdsCheckboxesMarcados()
});
whatsBtn.addEventListener('click', () => {
    meuModal.style.display = 'block'; // Exibe o modal
    const input = document.getElementById("content")
    aux = 3
    console.log(aux)
    input.value = obterIdsCheckboxesMarcados()
});

// Adiciona um ouvinte de evento ao botão de fechar o modal
fecharModal.addEventListener('click', () => {
    meuModal.style.display = 'none'; // Oculta o modal
});

// Fecha o modal se o usuário clicar fora dele
window.addEventListener('click', (event) => {
    if (event.target === meuModal) {
        meuModal.style.display = 'none';
    }
});


formMensagem.addEventListener("submit", () => {
    switch (aux) {
        case 1:
            tipoMensagem.value = "email"
            aux = null
            break;
        case 2:
            tipoMensagem.value = "sms"
            aux = null
            break;
        case 3:
            tipoMensagem.value = "whatsapp"
            aux = null
            break;

        default:
            break;
    }
})


function obterIdsCheckboxesMarcados() {
    // Seleciona todos os checkboxes
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');

    // Filtra e mapeia os IDs dos checkboxes marcados
    var idsCheckboxesMarcados = Array.from(checkboxes)
        .filter(function (checkbox) {
            return checkbox.checked;
        })
        .map(function (checkbox) {
            return checkbox.id;
        });

    return idsCheckboxesMarcados;
}
