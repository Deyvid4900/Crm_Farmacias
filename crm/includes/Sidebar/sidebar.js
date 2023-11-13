
const clickFunction = document.querySelectorAll('[data-menu]')

clickFunction.forEach((event) =>{
    event.addEventListener('click', (index) =>{
        index.preventDefault()
        clickFunction.forEach((index) =>{
            index.classList.remove('ativo')
        })
        index.currentTarget.classList.add('ativo')
    })
})

