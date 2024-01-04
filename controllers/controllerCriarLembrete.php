<?php
// Certifique-se de incluir seus arquivos necessários aqui
include("../lib/vendor/autoload.php");
require_once "../models/ClassLembrete.php";
// include_once '../models/ClassConexao.php'; // Certifique-se de incluir o arquivo correto
use \Models\Lembrete;
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se todos os campos do formulário foram enviados
    if (
        !empty($_POST["nomeLembrete"]) &&
        !empty($_POST["dataLembrete"])
    ) {
        // Obtém os valores do formulário
        $nomeLembrete = ($_POST["nomeLembrete"]);
        $descLembrete = ($_POST["descLembrete"]);
        $dataLembrete = ($_POST["dataLembrete"]);
        $horaLembrete = ($_POST["horaLembrete"]);

        // Validação adicional, se necessário (por exemplo, verificar o formato do email)

        // Cria uma instância da classe Farmacia
        $obj = new Lembrete;

        // Define os valores dos atributos
    
        // Chama o método insert para cadastrar a farmácia
        $result = $obj->insert($_SESSION['user_id'],$nomeLembrete,$descLembrete,$dataLembrete,$horaLembrete);

        if ($result) {
            // Cadastrado com sucesso
            echo "Lembrete cadastrado com sucesso!";
        } else {
            // Erro no cadastro
            echo "Erro ao cadastrar o Lembrete.";
        }
    } else {
        // Algum campo do formulário não foi preenchido
        echo "Todos os campos do formulário devem ser preenchidos.";
    }
}
?>
