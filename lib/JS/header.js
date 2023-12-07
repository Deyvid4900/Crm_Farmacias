const LogOutBtn = document.getElementById("LogOut");
const closeNotificacao = document.getElementById("closeNotificacao");
const boxMensagemTempo = document.getElementById("boxMensagemTempo");
const bell = document.getElementById("bell");

bell.addEventListener('click', () => {
    boxMensagemTempo.style.width = '355px';
})
closeNotificacao.addEventListener("click",()=>{
    boxMensagemTempo.style.width = '0px';
})

const mySideBarHeader = document.getElementById('mySideBarHeader')

function openNav() {
    mySideBarHeader.style.width = '400px';
}

function closeNav() {
    mySideBarHeader.style.width = '0';
}
