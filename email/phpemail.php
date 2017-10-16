<?php
/**
* Simple example script using PHPMailer with exceptions enabled
* @package phpmailer
* @version $Id$
*/

require 'phpmailer/class.phpmailer.php';
try {
  
$mail = new PHPMailer;
    $nome = $_POST['nome'];
  $email = $_POST['email'];
  $assunto = $_POST['assunto'];
  $mensagem = $_POST['mensagem'];
  $mail->IsSMTP();        // Ativar SMTP
$mail->SMTPDebug = false;       // Debugar: 1 = erros e mensagens, 2 = mensagens apenas
$mail->SMTPAuth = true;     // Autenticação ativada
$mail->SMTPSecure = 'tls';  // SSL REQUERIDO pelo GMail
$mail->Host = 'smtp.gmail.com'; // SMTP utilizado
$mail->Port = 587; 
$mail->Username = 'saeecontato@gmail.com';
$mail->Password = 'engeletrica';
$mail->SetFrom('' . $email .'', ''. $nome . '');
$mail->addAddress('saeecontato@gmail.com','SAEE');
$mail->Subject=($assunto);
$mail->msgHTML($mensagem);
if ($mail->Send()){
    $ok = true;
}else{
    $ok = false;
}  
echo $ok;
} catch (phpmailerException $e) {
  echo $e->errorMessage();
}
?>