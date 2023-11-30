<?php
include("../lib/vendor/autoload.php");
include_once "../models/ClassFiltro.php";
use \Models\Filtro;
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obter os dados do formulário
    $input = $_POST['conteudoPesquisa'] ?? '';
    $filtro = $_POST['filtro'] ?? '';
    
    $FiltroObj = new Filtro;
    $resultado = $FiltroObj->buscarValoresSemelhantes($input,$filtro);

    
    // Verificar se a inserção foi bem-sucedida
    if ($resultado) {
        foreach ($resultado as $pessoa) {
            // Acessando informações específicas
            $id = $pessoa["id"];
            $nome = $pessoa["nome"];
            $sexo = $pessoa["sexo"];
            $estadoCivil = $pessoa["estadoCivil"];
            $dataNasc = $pessoa["dataNasc"];
            $profissao = $pessoa["profissao"];
            $faixaSalarial = $pessoa["faixaSalarial"];
            $cpf = $pessoa["cpf"];
            $escolaridade = $pessoa["escolaridade"];
            $religiao = $pessoa["religiao"];
            $timeFut = $pessoa["timeFut"];
            $raca = $pessoa["raca"];
            $celular1 = $pessoa["celular1"];
            $celular2 = $pessoa["celular2"];
            $telFixo = $pessoa["telFixo"];
            $email = $pessoa["email"];
           
        
            // Faça o que quiser com as informações, por exemplo, imprimir na tela
            echo "ID: $id<br>";
            echo "Nome: $nome<br>";
            echo "Sexo: $sexo<br>";
            echo "Estado Civil: $estadoCivil<br>";
            echo "Data de Nascimento: $dataNasc<br>";
            echo "Profissão: $profissao<br>";
            echo "Faixa Salarial: $faixaSalarial<br>";
            echo "CPF: $cpf<br>";
            echo "Escolaridade: $escolaridade<br>";
            echo "Religião: $religiao<br>";
            echo "Time de Futebol: $timeFut<br>";
            echo "Raça: $raca<br>";
            echo "Celular 1: $celular1<br>";
            echo "Celular 2: $celular2<br>";
            echo "Telefone Fixo: $telFixo<br>";
            echo "E-mail: $email<br>";
        
            // Adicione quebras de linha ou HTML conforme necessário
            echo "<br><br>";
        }
    } else {
        
        echo 'Falha ao inserir o evento.';
    }
} else {
    echo 'Método não permitido.';
}
?>
