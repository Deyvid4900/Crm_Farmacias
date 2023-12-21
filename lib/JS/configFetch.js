document.addEventListener('DOMContentLoaded', function () {
    let loader = document.getElementById('loader');
    document.getElementById('formUpdateConfig').addEventListener('submit', function (e) {
        e.preventDefault();

        var formData = new FormData(this);

        // Envia a solicitação Fetch
        fetch('/controllers/controllerConfigFarmacia.php', {
            method: 'POST',
            body: formData,
            headers: {
                'Accept': 'application/json'
                // Adicione outros cabeçalhos conforme necessário
            },
            beforeSend: function () {
                // loader.style.display = 'flex';
                // document.getElementById('resultadoQueryCliente').innerHTML = '';
            },
        })
        .then(response => response.json())
        .then(data => {
           console.log(data)
          
        })
        .finally(function () {
            // loader.display = 'none';
        });
    });
});
