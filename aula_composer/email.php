<?php


require_once 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$nome = utf8_decode($_POST["nome"]);
$email = $_POST["email"];
$mensagem = utf8_decode($_POST["mensagem"]);

$mail = new PHPMailer();
$mail->isSMTP();

$mail->SMTPDebug = 2;
   
$mail->Host='smtp.gmail.com';

$mail->Port = 587;

$mail->SMTPSecure = 'tls';

$mail->SMTPAuth = true;

$mail->Username = 'mjvbh65@gmail.com';

$mail->Password = 'izolis1970';

$mail->setFrom($email, $nome);
//$mail->setFrom('atendimento@microlins.com.br', 'First Last');

$mail->addAddress($email, $nome);

//$mail->addAddress('andersonunsonst@gmail.com', 'Anderson');

$mail->Subject = 'Formulário de Cadastro';

$mail->Body = $mensagem;

if(!$mail->send()){
    echo 'Eror no envio: ' .$mail->ErrorInfo;
}else{
    echo 'Email enviado!';
}