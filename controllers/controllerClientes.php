<?php
include("../lib/vendor/autoload.php");
include_once "../models/ClassCliente.php";
use \Models\Cliente;
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
   $obj = new Cliente;
   if ($obj->findAll()) {
       $sexo['Masculino'] =$obj->findQtn('sexo','masculino',$_SESSION['user_id']);
       $sexo['Feminino'] =$obj->findQtn('sexo','feminino',$_SESSION['user_id']);
       $estadoCivil['Solteiro'] =$obj->findQtn('estadoCivil','Solteiro',$_SESSION['user_id']);
       $estadoCivil['Casado'] =$obj->findQtn('estadoCivil','Casado',$_SESSION['user_id']);
       $estadoCivil['Separado'] =$obj->findQtn('estadoCivil','Separado',$_SESSION['user_id']);
       $estadoCivil['Divorciado'] =$obj->findQtn('estadoCivil','Divorciado',$_SESSION['user_id']);
       $estadoCivil['Viuvo'] =$obj->findQtn('estadoCivil','Viuvo',$_SESSION['user_id']);
       $faixaSalarial['mil'] =$obj->findQtn('faixaSalarial','mil',$_SESSION['user_id']);
       $faixaSalarial['mil3'] =$obj->findQtn('faixaSalarial','mil3',$_SESSION['user_id']);
       $faixaSalarial['mil5'] =$obj->findQtn('faixaSalarial','mil5',$_SESSION['user_id']);
       $faixaSalarial['maxSalario'] =$obj->findQtn('faixaSalarial','maxSalario',$_SESSION['user_id']);
       $response['sexo'] = $sexo;
       $response['estadoCivil'] = $estadoCivil;
       $response['faixaSalarial'] = $faixaSalarial;
   }else{
    $response = 'Clientes não Encontrados';
   }
} else {
    echo 'Método não permitido.';
}
echo json_encode($response);

