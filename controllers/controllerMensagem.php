<?php
$arrayValoresId = explode(',', $_POST["id"]);

include("../lib/vendor/autoload.php");
include_once "../models/ClassMensagens.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use \Models\Mensagem;


session_start();
$mensagem = $_POST["Mensagem"];
$assunto = $_POST['Assunto'];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $obj = new Mensagem();
    $contatosArray = $obj->pegarContatos($arrayValoresId);

    foreach ($contatosArray as $key => $value) {
        // usa o $value para os arrays que contem os valores 
        $para = $value['email'];
        $de = $_SESSION['email'];

        echo "<br>para: " . $value['email'];
        echo "<br>Assunto: " . $assunto;
        echo "<br>mensagem: " . $mensagem;



        $mail = new PHPMailer(true);

        try {
            $mail->setFrom($_SESSION['email'], $_SESSION['username']);
            $mail->addAddress( $value['email']);
            $mail->Subject = $assunto;
            $mail->Body = $mensagem;

            $mail->send();
            echo 'O e-mail foi enviado com sucesso.';
        } catch (Exception $e) {
            echo 'Erro ao enviar o e-mail: ', $mail->ErrorInfo;
        }
    }
}
