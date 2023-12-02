const MaracarTodos = document.getElementById("MaracarTodos")


const emailBtn=document.getElementById("emailBtn")
const smsBtn=document.getElementById("smsBtn")
const whatsBtn=document.getElementById("whatsBtn")


MaracarTodos.addEventListener("click",()=>{
    const allcheckboxFiltro = [...document.getElementsByClassName("checkboxFiltro")]
    allcheckboxFiltro.forEach(element => {

        element.checked = !element.checked;
    });
})

// Adiciona um ouvinte de evento ao botão para abrir o modal
emailBtn.addEventListener('click', (e)=>{
    
    meuModal.style.display = 'block'; // Exibe o modal
    const h1=document.getElementById("content")
    
    h1.innerHTML = obterIdsCheckboxesMarcados()

});
smsBtn.addEventListener('click', () =>{
    meuModal.style.display = 'block'; // Exibe o modal
});
whatsBtn.addEventListener('click', () =>{
    meuModal.style.display = 'block'; // Exibe o modal
});

// Adiciona um ouvinte de evento ao botão de fechar o modal
fecharModal.addEventListener('click', () =>{
    meuModal.style.display = 'none'; // Oculta o modal
});

// Fecha o modal se o usuário clicar fora dele
window.addEventListener('click', (event)=>{
    if (event.target === meuModal) {
        meuModal.style.display = 'none';
    }
});

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