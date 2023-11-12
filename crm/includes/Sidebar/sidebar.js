// const clickCadas = document.querySelector('.Cadastro')
// const clickServico = document.querySelector('.Servicos')
// const clickConsultorio = document.querySelector('.Consultorio')
// const clickMarketing = document.querySelector('.Marketing')
// const clickSettings = document.querySelector('.lastPad')


// clickCadas.addEventListener('click', (event) => {
//     event.preventDefault()
//     clickCadas.classList.add('ativo')
// })

// clickServico.addEventListener('click', (event) => {
//     event.preventDefault()
//     clickServico.classList.add('ativo')
// })

// clickConsultorio.addEventListener('click', (event) => {
//     event.preventDefault()
//     clickConsultorio.classList.add('ativo')
// })

// clickMarketing.addEventListener('click', (event) => {
//     event.preventDefault()
//     clickMarketing.classList.add('ativo')
// })

// clickSettings.addEventListener('click', (event) => {
//     event.preventDefault()
//     clickSettings.classList.add('ativo')
// })

const clickFunction = document.querySelectorAll('[data-menu]')

clickFunction.forEach((event) =>{
    event.addEventListener('click', (index) =>{
        index.preventDefault()
        if(event.classList.contains('Cadastro')){
            event.classList.add('ativo')
        }else if(event.classList.contains('Servicos')){
            event.classList.add('ativo')
        }else if(event.classList.contains('Consultorio')){
            event.classList.add('ativo')
        }else if(event.classList.contains('Marketing')){
            event.classList.add('ativo')
        }else{
            event.classList.add('ativo')
        }
    })
})