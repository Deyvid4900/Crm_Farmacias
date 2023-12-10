document.addEventListener('DOMContentLoaded', function () {
  const searchInput = document.getElementById('search');
  const suggestionsContainer = document.getElementById('suggestions');
  const suggestionList = document.getElementById('suggestion-list');

  const suggestions = ['Cadastro', 'Cadastrar Clientes', 'Cadastrar Medicos', 'Cadastrar Eventos', 'Serviços', 'Consultorio',  'Marketing', 'Configuração', 'Sobre', 'Home'];

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
      listItem.textContent = suggestion;

      listItem.addEventListener('click', function () {
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
