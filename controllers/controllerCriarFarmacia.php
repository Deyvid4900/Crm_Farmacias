<?php
// Certifique-se de incluir seus arquivos necessários aqui
include("../lib/vendor/autoload.php");
require_once "../models/ClassFarmacia.php";
// include_once '../models/ClassConexao.php'; // Certifique-se de incluir o arquivo correto
use \Models\Farmacia;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se todos os campos do formulário foram enviados
    if (
        !empty($_POST["nomeFarmacia"]) &&
        !empty($_POST["senhaFarmacia"]) &&
        !empty($_POST["emailFarmacia"]) &&
        !empty($_POST["numeroFarmacia"])
    ) {
        // Obtém os valores do formulário
        $nomeFarmacia = htmlspecialchars($_POST["nomeFarmacia"]);
        $senhaFarmacia = htmlspecialchars($_POST["senhaFarmacia"]);
        $emailFarmacia = htmlspecialchars($_POST["emailFarmacia"]);
        $numeroFarmacia = htmlspecialchars($_POST["numeroFarmacia"]);

        // Validação adicional, se necessário (por exemplo, verificar o formato do email)

        // Cria uma instância da classe Farmacia
        $farmacia = new Farmacia;

        // Define os valores dos atributos
    
        // Chama o método insert para cadastrar a farmácia
        $result = $farmacia->insert($nomeFarmacia,$senhaFarmacia,$emailFarmacia,$numeroFarmacia);

        if ($result) {
            // Cadastrado com sucesso
            echo "Farmácia cadastrada com sucesso!";
        } else {
            // Erro no cadastro
            echo "Erro ao cadastrar a farmácia.";
        }
    } else {
        // Algum campo do formulário não foi preenchido
        echo "Todos os campos do formulário devem ser preenchidos.";
    }
}
?>
