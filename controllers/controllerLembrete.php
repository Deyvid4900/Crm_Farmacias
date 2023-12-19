<?php
$arrayValoresId = explode(',', $_POST["id"]);

include("../lib/vendor/autoload.php");
include_once "../models/ClassMensagens.php";


use \Models\Mensagem;


session_start();
$mensagem = $_POST["Mensagem"];
$assunto = $_POST['Assunto'];
var_dump($_POST);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $obj = new Mensagem();
    $contatosArray = $obj->pegarContatos($arrayValoresId);

    switch ($_POST["tipo"]) {
        case 'email':
            echo 'email';
            foreach ($contatosArray as $key => $value) {
                // usa o $value para os arrays que contem os valores 
                $para = $value['email'];
                $de = $_SESSION['email'];
        
                echo "<br>para: " . $value['email'];
                echo "<br>Assunto: " . $assunto;
                echo "<br>mensagem: " . $mensagem;




                
            }

            break;
        case 'sms':
            echo 'sms';
            foreach ($contatosArray as $key => $value) {
                // usa o $value para os arrays que contem os valores 
                $para = $value['email'];
                $de = $_SESSION['email'];
        
                echo "<br>para: " . $value['celular1'];
                echo "<br>Assunto: " . $assunto;
                echo "<br>mensagem: " . $mensagem;
            }

            break;
        case 'whatsapp':
                echo 'what';
            foreach ($contatosArray as $key => $value) {
                // usa o $value para os arrays que contem os valores 
                $para = $value['email'];
                $de = $_SESSION['email'];
        
                echo "<br>para: " . $value['celular1'];
                echo "<br>Assunto: " . $assunto;
                echo "<br>mensagem: " . $mensagem;
            }

            break;
        default:
            echo "tipo de mensagem não resgatada";
            break;
    }
    
}
