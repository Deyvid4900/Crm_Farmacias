document.addEventListener('DOMContentLoaded', function () {
  const searchInput = document.getElementById('search');
  const suggestionsContainer = document.getElementById('suggestions');
  const suggestionList = document.getElementById('suggestion-list');

  const suggestions = ['Cadastrar Clientes', 'Cadastrar Medicos', 'Cadastrar Eventos', 'Serviços', 'Consultorio', 'Marketing', 'Configuração', 'Sobre', 'Home', "Suporte","lembretes","Encontrar Medicos","Ultimos Serviços","Tabela de Eventos"];

  searchInput.addEventListener('input', function () {
    const userInput = searchInput.value.toLowerCase();
    const filteredSuggestions = suggestions.filter(suggestion =>
      suggestion.toLowerCase().includes(userInput)
    );

    updateSuggestions(filteredSuggestions);
  });

  document.body.addEventListener('click', function (event) {
    // Verifica se o clique ocorreu fora do painel de sugestões
    if (!suggestionsContainer.contains(event.target)) {
      suggestionsContainer.style.display = 'none';
    }
  });

  function updateSuggestions(filteredSuggestions) {
    suggestionList.innerHTML = '';

    filteredSuggestions.forEach(suggestion => {
      const listItem = document.createElement('li');
      const listLink = document.createElement('a');
      listLink.style.color = '#000'
      listItem.appendChild(listLink)

      listLink.textContent = suggestion;

      listLink.addEventListener('click', function (e) {
        console.log(listLink.text)
        switch (listLink.text) {
          case 'Cadastrar Clientes':
            window.location.replace('/views/cadastroCliente.php')
            break;
          case 'Cadastrar Medicos':
            window.location.replace('/views/cadastroMedico.php')
            break;
          case 'Cadastrar Eventos':
            window.location.replace('/views/cadastroEvento.php')
            break;
          case 'Serviços':
            window.location.replace('/views/cadastroServico.php')
            break;
          case 'Consultorio':
            window.location.replace('/views/cadastroConsultorio.php')
            break;
          case 'Marketing':
            window.location.replace('/views/marketingFiltros.php')
            break;
          case 'Configuração':
            window.location.replace('/views/configuracaoFarmacia.php')
            break;
          case 'Sobre':
            window.location.replace('/views/sobre.php')
            break;
          case 'Home':
            window.location.replace('/views/home.php')
            break;
            
          case 'Suporte':
            window.location.replace('/views/suporte.php')
            break;
            case 'lembretes':
            window.location.replace('/views/lembrete.php')
            break;
            case 'Encontrar Medicos':
              window.location.replace('/views/medicoFiltro.php')
              break;

          default:
            break;
        }
        searchInput.value = suggestion;
        suggestionsContainer.style.display = 'none';
      });

      suggestionList.appendChild(listItem);
    });

    suggestionsContainer.style.display = filteredSuggestions.length ? 'block' : 'none';
  }

});

// const sobre = document.getElementById('sobreMenuHamb')

// sobre.addEventListener('click', () =>{
//   window.location =
// })
