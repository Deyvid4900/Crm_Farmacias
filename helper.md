# Crm_Farmacias
 
assets/
    Nesta pasta, você pode armazenar todos os recursos estáticos, como arquivos CSS, JavaScript, imagens e fontes.


config/
    Coloque arquivos de configuração, como configurações de banco de dados, variáveis de ambiente ou configurações gerais do sistema.


includes/
    Mantenha arquivos PHP que serão incluídos em várias partes do seu aplicativo, como cabeçalho, rodapé, funções utilitárias e autenticação.


templates/
    Armazene os modelos de interface do usuário, como arquivos HTML ou arquivos de modelo PHP que representam diferentes partes do CRM, como páginas de perfil do cliente, página de listagem de contatos, etc.


modules/
    Crie pastas para cada módulo do CRM, como "Clientes", "Contatos", "Vendas", "Tarefas" etc. Dentro de cada pasta de módulo, você pode ter subpastas para diferentes recursos, como "visualização", "edição", "exclusão", etc. Isso ajuda a organizar seu código.

controller/
    media as operações para cada entidade que possa ser utilizada.

lib/
    Esta pasta pode conter bibliotecas ou classes personalizadas que você desenvolve para funções específicas do CRM, como manipulação de dados, autenticação, validação, etc.


vendor/
    Se você estiver usando bibliotecas de terceiros, como o Composer, pode armazenar essas bibliotecas aqui.


public/
    Esta pasta deve ser a raiz do seu servidor web e conter o arquivo de entrada principal, como index.php. É a partir daqui que seu aplicativo será acessado pelos usuários. Você também pode colocar arquivos de recurso público, como imagens de perfil de usuário, nesta pasta.




//Na aba cadastro é para fazer o cadastro (formulario de cadastro de entidades){
    evento será onde o por exemplo: quero ligar para o cliente daqui 3 dias, em eventos posso fazer esse agendamento   
}

//Na aba serviços é o prontuario obrigatorio de serviços feitos(formulario sobre os serviços)

//Na aba consultorio é para guardar informações sobre o cliente que faz uma queixa de dor ou algo com o balconista e o balconista prescreve algum medicamento, essa aba quarda essas informações sobre o paciente, para posteriormente possa perguntar um feedback 

//Na aba marketing será a parte das mensagens, filtros para mensagens e pesquisas em geral.