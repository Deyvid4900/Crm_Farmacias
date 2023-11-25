document.addEventListener('DOMContentLoaded', function () {
    var openModalBtn = [...document.querySelectorAll('.openModalBtn')];
    var closeModalBtn = document.getElementById('closeModalBtn');
    var modal = document.getElementById('myModal');

    console.log(openModalBtn)
    openModalBtn.forEach(element => {
        element.addEventListener('click', function () {
            modal.style.display = 'block';
        });
    
        closeModalBtn.addEventListener('click', function () {
            modal.style.display = 'none';
        });
    });
   

    window.addEventListener('click', function (event) {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });
});
