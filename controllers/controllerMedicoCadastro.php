<?php
include("../lib/vendor/autoload.php");
include_once "../models/ClassMedicos.php";
include_once "../models/ClassEnderecoMedicos.php";

use Models\EnderecoMedico;
use \Models\Medico;

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $filtro = [
        'nome' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
        'cpf' => FILTER_SANITIZE_NUMBER_INT,
        'sexo' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
        'especialidade' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
        'atuacao' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
        'hospital_atual' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
        'data_nascimento' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
        'celular1' => FILTER_SANITIZE_NUMBER_INT,
        'celular2' => FILTER_SANITIZE_NUMBER_INT,
        'tel_fixo1' => FILTER_SANITIZE_NUMBER_INT,
        'tel_fixo2' => FILTER_SANITIZE_NUMBER_INT,
        'informacoes_adicionais' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    ];

    $medicoCampos = [
        'nome',
        'cpf',
        'sexo',
        'especialidade',
        'atuacao',
        'hospital_atual',
        'data_nascimento',
        'celular1',
        'celular2',
        'tel_fixo1',
        'tel_fixo2',
        'informacoes_adicionais',
    ];

    $fields = [
        'nome',
        'cpf',
        'sexo',
        'especialidade',
        'atuacao',
        'hospital_atual',
        'data_nascimento',
        'celular1',
        'celular2',
        'tel_fixo1',
        'tel_fixo2',
        'informacoes_adicionais',
    ];

    $selectedFields = array_intersect_key($_POST, array_flip($medicoCampos));


    $medicoDados = sanitize($selectedFields, $fields, $filtro);

    $medico = new Medico();
    $medico->insertArray($medicoDados, $_SESSION["user_id"]);

    $idMedico = intval($medico->getIdByName($medicoDados['nome']));

    $endereco = new EnderecoMedico;
    $filtroEndereco = [
        'logradouro' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
        'numeroCasa' => FILTER_SANITIZE_NUMBER_INT,
        'bairro' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
        'complemento' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
        'cidade' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
        'uf' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
        'referencia' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    ];

    $enderecoArray = [
        'logradouro',
        'numeroCasa',
        'bairro',
        'complemento',
        'cidade',
        'uf',
        'referencia'
    ];
    
    $campos = [
        'logradouro' => 'string',
        'numeroCasa' => 'string',
        'bairro' => 'string',
        'complemento' => 'string',
        'cidade' => 'string',
        'uf' => 'string',
        'referencia' => 'string'
    ];
    
    // Filtra apenas as chaves definidas em $enderecoArray
    $enderecoSelecionados = array_intersect_key($_POST, array_flip($enderecoArray));
    
    // Validação de chaves antes de acessar
    foreach ($enderecoArray as $chave) {
        if (!isset($enderecoSelecionados[$chave])) {
            // Lida com o caso em que uma chave esperada não está definida
            echo "A chave '$chave' não está definida em \$_POST.";
            exit;  // ou implemente a lógica apropriada para o seu caso
        }
    }
    

    // Insira no banco de dados
    $endereco->insertArray($idMedico,sanitize($enderecoSelecionados, array_keys($campos), $filtroEndereco));
    
    header("Location: /views/cadastroMedico.php");
    echo "Cadastro de médico realizado com sucesso!";
} else {
    header("Location: /views/cadastroMedico.php");
    exit();
}


function sanitize(array $inputs, array $fields, array $filters): array
{
    $options = array_map(fn ($field) => $filters[$field], $fields);
    $options = array_combine($fields, $options); // Garante que as chaves são strings
    return filter_var_array($inputs, $options);
}
?>
