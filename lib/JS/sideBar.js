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

    addClasse.addEventListener('click', (event) => {
        event.preventDefault()
        return teste.classList.toggle('mostrar')
    })

    //serviço
    const secondSection = document.querySelector('.sideBarInfoServicos')
    const addServico = document.querySelector('.Servicos')


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

