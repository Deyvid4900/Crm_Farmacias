<?php
include("../lib/vendor/autoload.php");
include_once "../models/ClassCliente.php";
include_once "../models/ClassEndereco.php";
use \Models\Cliente;
use \Models\Endereco;

session_start();
$filtro = [
    'string' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    'email' => FILTER_SANITIZE_EMAIL,
    'int' => [
        'filter' => FILTER_SANITIZE_NUMBER_INT,
        'flags' => FILTER_REQUIRE_SCALAR
    ],
    'float' => [
        'filter' => FILTER_SANITIZE_NUMBER_FLOAT,
        'flags' => FILTER_FLAG_ALLOW_FRACTION
    ],
    'url' => FILTER_SANITIZE_URL,
    'string[]' => [
        'filter' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
        'flags' => FILTER_REQUIRE_ARRAY
    ]
];
$contatosArray = [
    'nome',
    'sexo',
    'estadoCivil',
    'dataNasc',
    'profissao',
    'faixaSalarial',
    'cpf',
    'escolaridade',
    'religiao',
    'timeFut',
    'raca',
    'infoAdic',
    'celular1',
    'celular2',
    'telFixo',
    'email'
];

$selectedFields = array_intersect_key($_POST, array_flip($contatosArray));


const FILTERS = [
    'int'=> FILTER_SANITIZE_NUMBER_INT,
    'string' => FILTER_SANITIZE_STRING,
    'email' => FILTER_SANITIZE_EMAIL,
];

$fields = [
    'nome' => 'string',
    'sexo' => 'string',
    'estadoCivil' => 'string',
    'dataNasc' => 'string',
    'profissao' => 'string',
    'faixaSalarial' => 'string',
    'cpf' => 'string',
    'escolaridade' => 'string',
    'religiao' => 'string',
    'timeFut' => 'string',
    'raca' => 'string',
    'infoAdic' => 'string',
    'celular1' => 'string',
    'celular2' => 'string',
    'telFixo' => 'string',
    'email' => 'email',
];

function sanitize(array $inputs, array $fields, array $filters): array
{   
    $options = array_map(fn ($field) => $filters[$field], $fields);
    return filter_var_array($inputs, $options);
}

$sanitizedData = sanitize($selectedFields, $fields, $filtro);

var_dump($_POST);

$cliente = new Cliente;
$cliente->insertArray($sanitizedData,$_SESSION["user_id"]);
// echo $cliente->getIdByName($sanitizedData['nome']);
$id = intval($cliente->getIdByName($sanitizedData['nome']));

$endereco = new Endereco;

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
$enderecoSelecionados = array_intersect_key($_POST, array_flip($enderecoArray));
$endereco->insertArray(sanitize($enderecoSelecionados, $campos, $filtro), $id);