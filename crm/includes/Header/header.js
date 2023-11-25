
window.addEventListener('load', () => {
    let urlAtual = window.location.href;
    console.log(urlAtual)
    const LogOut = document.getElementById("LogOut");
    
    const linkMain = document.getElementById("linkMain");
    linkMain.addEventListener("click", () => {
        if (!urlAtual.includes("Main/main.php")) {
            window.location.href = "../../../../../Crm_Farmacias/crm/templates/Main/main.php";
        }else{
            window.location.href = urlAtual
        }
    })
    LogOut.addEventListener("click",(e)=>{
        e.preventDefault()
        
    })
})

