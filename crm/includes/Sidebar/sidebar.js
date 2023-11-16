window.addEventListener('load', () => {

// cada link tem q fazer isso para que não passe url
const linkCLiente = document.getElementById("linkCLiente")
linkCLiente.addEventListener("click",()=>{
   var urlAtual = window.location.href;
    if  ( !urlAtual.includes("Clientes/clientes.php")) {
        window.location.href = "../Cadastro/Clientes/clientes.php"
    }else{
        alert("Você ja está na pagina de clientes")
    }
})




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

    console.log(addServico)
    console.log(secondSection)

    addServico.addEventListener('click', (event) => {
        event.preventDefault()
        return secondSection.classList.toggle('mostrar')
    })

    //mostrar marketing

    const Mkt = document.querySelector('.Marketing')
    const classeMkt = document.querySelector('.sideBar-infoMarketing')

    console.log(Mkt)
    console.log(classeMkt)

    Mkt.addEventListener('click', (event) => {
        event.preventDefault()
        return classeMkt.classList.toggle('mostrar')
    })


    const carrossel = document.querySelector('.carrossel');
    const prevButton = document.querySelector('.voltarLado');
    const nextButton = document.querySelector('.passaLado');

    let currentIndex = 0;

    function moveCarrossel(direction) {
        const carrosselWidth = carrossel.offsetWidth;
        currentIndex += direction;

        if (currentIndex < 0) {
            currentIndex = carrossel.childElementCount - 1;
        } else if (currentIndex >= carrossel.childElementCount) {
            currentIndex = 0;
        }

        const newTransformValue = -currentIndex * carrosselWidth;
        carrossel.style.transform = `translateX(${newTransformValue}px)`;
    }

    prevButton.addEventListener('click', () => moveCarrossel(-0.3));
    nextButton.addEventListener('click', () => moveCarrossel(0.3));

    
    const btnSideBar=[...document.querySelectorAll(".sd")];
    console.log(btnSideBar)



});

