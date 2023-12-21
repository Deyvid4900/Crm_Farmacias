<?php
$arrayValoresId = explode(',', $_POST["id"]);

include("../lib/vendor/autoload.php");
include_once "../models/ClassMensagens.php";
require_once('../src/PHPMailer.php');
require_once('../src/SMTP.php');
require_once('../src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


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

                $mail = new PHPMailer(true);

                try {
                    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com';
                    $mail->SMTPAuth = true;
                    $mail->SMTPSecure = 'tls'; // Alterado para 'tls'
                    $mail->Username = $_SESSION['email']; // Substitua pelo seu endereço de e-mail Gmail
                    $mail->Password = $_SESSION['senhaEmail']; // Substitua pela senha do seu e-mail Gmail
                    $mail->Port = 587;

                    $mail->setFrom('farmaciaoliveira123123@gmail.com'); // Substitua pelo seu endereço de e-mail Gmail
                    $mail->addAddress($para);

                    $mail->isHTML(true);
                    $mail->Subject = $assunto;
                    $mail->Body = $mensagem;
                    $mail->AltBody = $mensagem;

                    if ($mail->send()) {
                        echo 'Email enviado com sucesso para: ' . $para;
                    } else {
                        if ( strpos($mail->ErrorInfo,"Could not authenticate") !== false  ) {
                            echo 'ok';
                        }
                        echo 'Erro ao enviar e-mail para: ' . $para . ' Erro: ' . $mail->ErrorInfo;
                    }
                } catch (Exception $e) {
                    echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
                }

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
