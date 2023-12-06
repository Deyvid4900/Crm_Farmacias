window.addEventListener('load', () => {
    
    const clickFunction = document.querySelectorAll('[data-menu]')

    clickFunction.forEach((event) => {
        event.addEventListener('click', (index) => {
            index.preventDefault()
            clickFunction.forEach((index) => {
                index.classList.remove('ativo')
            })
            index.currentTarget.classList.add('ativo')
        })
    })

    //mostrar sidebarInfo

    const teste = document.querySelector('.sideBar-info')
    const addClasse = document.querySelector('.testi')
    const windownClick = document.querySelector('body')

    console.log(windownClick)

    addClasse.addEventListener('click', (event) => {
        event.preventDefault()
        if(!(teste.classList.contains('mostrar'))){
            return teste.classList.toggle('mostrar')
        }else if(teste.classList.contains('mostrar')){
           console.log(windownClick.target)
        }
       
        
    })


    //Consultorio
    const linkConsultorio= document.getElementById('linkConsultorio')
    linkConsultorio.addEventListener("click",(e)=>{
        window.location="/views/cadastroConsultorio.php";
    })


    //serviço
    const secondSection = document.querySelector('.sideBarInfoServicos')
    const addServico = document.querySelector('.Servicos')
    const linkServico= document.getElementById('linkServico')

    linkServico.addEventListener("click",(e)=>{
        window.location="/views/cadastroServico.php";
    })
    addServico.addEventListener('click', (event) => {
        event.preventDefault()
        return secondSection.classList.toggle('mostrar')
    })

    //mostrar marketing

    const Mkt = document.querySelector('.Marketing')
    const classeMkt = document.querySelector('.sideBar-infoMarketing')

  

    Mkt.addEventListener('click', (event) => {
        event.preventDefault()
        return classeMkt.classList.toggle('mostrar')
    })

    



});

