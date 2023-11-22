<?php
const FILTERS = [
    'string' => FILTER_SANITIZE_STRING,
    'email' => FILTER_SANITIZE_EMAIL,
];

$fields = [
    'nome' => 'string',
    'numero' => 'string',
    'cpf' => 'string',
    'sx' => 'string',
    'profissao' => 'string',
    'religiao' => 'string',
    'estado-civil' => 'string',
    'faixaSalarial' => 'string',
    'escolaridade' => 'string',
    'dataNascimento' => 'string',
    'identidade' => 'string',
    'raca' => 'string',
    'logradouro' => 'string',
    'numeroCep' => 'string',
    'bairro' => 'string',
    'complemento' => 'string',
    'cidade' => 'string',
    'uf' => 'string',
    'cel1' => 'string',
    'cel2' => 'string',
    'tel1' => 'string',
    'tel2' => 'string',
    'possuiZap' => 'string',
    'possuiZapi' => 'string',
    'mail' => 'email',
    'textArea' => 'string'
];

function sanitize(array $inputs, array $fields, array $filters = FILTERS): array
{
   $options = array_map(fn($field) => $filters[$field], $fields);
   return filter_var_array($inputs, $options);
}
$sanitizedData = sanitize($_POST, $fields);

var_dump($sanitizedData);
