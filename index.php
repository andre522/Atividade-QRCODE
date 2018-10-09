<?php

require_once "vendor/autoload.php";
use Endroid\QrCode\QrCode;
use Respect\Validation\Validator as v;

$nome = $_POST['input-nome'];
$data_nascimento = $_POST['input-data'];
$email = $_POST['input-email'];
$username = "andreluis22.ap@gmail.com";
$password = "secreta";

$validarData = v::date('d/m/Y')->validate($data_nascimento);
$validarEmail = v::email()->validate($email);

if ($validarData && $validarEmail) {
    $qrCode = new QrCode($nome);
    header('Content-Type: '.$qrCode->getContentType());
    $result = $qrCode->writeString();


    // Create the Transport
    $transport = (new Swift_SmtpTransport('smtp.gmail.com', 587, 'tls'))
      ->setUsername($username)
      ->setPassword($password)
    ;

    // Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);

    // Create a message
    $message = (new Swift_Message('Atividade QRCODE'))
      ->setFrom(['andreluis22.ap@gmail.com' => 'André Luis'])
      ->setTo(['andreluis22.ap@gmail.com' => 'Alguma coisa'])
      ->setBody($result);
      //->attach(Swift_Attachment::fromPath($result));
      //->setDisposition('inline'))


    // Send the message
    $result = $mailer->send($message);

}else {
    echo 'Preencha todos os campos!';
}

 ?>