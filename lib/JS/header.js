const LogOutBtn = document.getElementById("LogOut");
const closeNotificacao = document.getElementById("closeNotificacao");
const boxMensagemTempo = document.getElementById("boxMensagemTempo");
const bell = document.getElementById("bell");

bell.addEventListener('click', (e) => {
    boxMensagemTempo.classList.add('ativado')
})
closeNotificacao.addEventListener("click",()=>{
    boxMensagemTempo.classList.remove('ativado')
})


