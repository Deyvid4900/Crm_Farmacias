

window.addEventListener('load', () => {
    // cada link tem q fazer isso para que não passe url
    const linkCLiente = document.getElementById("linkCLiente")
    linkCLiente.addEventListener("click", () => {
        var urlAtual = window.location.href;
        if (!urlAtual.includes("Clientes/clientes.php")) {
            window.location.href = "../Cadastro/Clientes/clientes.php"
        } else {
            alert("Você ja está na pagina de clientes")
        }
        if (urlAtual.includes("Cadastro/CRM_Medicos/medicos.php")) {
            window.location.href = "../Clientes/clientes.php"
        }
    })


    const linkMedico = document.getElementById("linkMedico")
    linkMedico.addEventListener("click", () => {
        var urlAtual = window.location.href;
        if (urlAtual.includes("CRM_Medicos/medicos.php")) {
            alert("Você ja está na pagina de Medicos")
        } else {
            window.location = "../../templates/Cadastro/CRM_Medicos/medicos.php";
        }
        if (urlAtual.includes("Cadastro/Clientes/clientes.php")) {
            window.location.href = "../CRM_Medicos/medicos.php"
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

    // js do carrosel
    // const carrossel = document.querySelector('.carrossel');
    // const prevButton = document.querySelector('.voltarLado');
    // const nextButton = document.querySelector('.passaLado');

    // let currentIndex = 0;

    // let count = 0;

    // nextButton.addEventListener('click', () => {
    //     count++;
    //     if (count > 3) { // Limite de 3 cliques
    //         nextButton.disabled = true;
    //         alert("Limite de cliques atingido!");
    //     } else {
    //         moveCarrossel(0.3);
    //     }
    // });

    // function moveCarrossel(direction) {
    //     const carrosselWidth = carrossel.offsetWidth;
    //     currentIndex += direction;
    //     console.log(direction, carrossel, carrosselWidth, currentIndex)
    //     if (currentIndex < 0) {
    //         currentIndex = carrossel.childElementCount - 1;
    //     } else if (currentIndex >= carrossel.childElementCount) {
    //         currentIndex = 0;
    //     }

    //     const newTransformValue = -currentIndex * carrosselWidth * 3.5; // Multiplicando por 180px
    //     carrossel.style.transform = `translateX(${newTransformValue}px)`;
    // }
    // function moveCarrossel(direction) {
    //     const carrosselWidth = carrossel.offsetWidth;
    //     currentIndex += direction * 4; // Multiplicando pela quantidade de itens que você deseja avançar
    //     console.log(direction, carrossel, carrosselWidth, currentIndex)
    //     if (currentIndex < 0) {
    //         currentIndex = carrossel.childElementCount - 1;
    //     } else if (currentIndex >= carrossel.childElementCount) {
    //         currentIndex = 0;
    //     }

    //     const newTransformValue = -currentIndex * carrosselWidth;
    //     carrossel.style.transform = `translateX(${newTransformValue}px)`;
    // }

    // prevButton.addEventListener('click', () => moveCarrossel(-0.3));



    // const btnSideBar = [...document.querySelectorAll(".sd")];
    // console.log(btnSideBar)

    const gap = 294;

    const carousel = document.getElementById("carousel"),
        content = document.getElementById("content"),
        next = document.getElementById("next"),
        prev = document.getElementById("prev");

    next.addEventListener("click", e => {
        carousel.scrollBy(width + gap, 0);
        if (carousel.scrollWidth !== 0) {
            prev.style.display = "flex";
        }
        if (content.scrollWidth - width - gap <= carousel.scrollLeft + width) {
            next.style.display = "none";
        }
    });
    prev.addEventListener("click", e => {
        carousel.scrollBy(-(width + gap), 0);
        if (carousel.scrollLeft - width - gap <= 0) {
            prev.style.display = "none";
        }
        if (!content.scrollWidth - width - gap <= carousel.scrollLeft + width) {
            next.style.display = "flex";
        }
    });

    let width = carousel.offsetWidth;
    window.addEventListener("resize", e => (width = carousel.offsetWidth));



});

