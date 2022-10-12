<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

if(empty($_GET['form-cont-email']) || empty($_GET['form-cont-mensagem'])){
    header('Location:index.php?pag=contactos&r=empty');
    exit();
}

$from = $_GET['form-cont-name'];
$email = $_GET['form-cont-email'];
$message = $_GET['form-cont-mensagem'];
$subject=$_GET['form-cont-assunto'];

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.sapo.pt';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'teste_web@sapo.pt';                     //SMTP username
    $mail->Password   = 'Qwer+1234';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->CharSet = 'UTF-8';

    //Recipients
    $mail->setFrom('teste_web@sapo.pt', 'Admin');
    $mail->addAddress('teste_web@sapo.pt', $email);     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Contact Form: '.$subject;
    $mail->Body    = 'From: '.$from.'<br>Message: '.$message;
    $mail->AltBody = 'From: '.$from.'; Message: '.$message;

    $mail->send();

    header('Location:index.php?pag=contactos&r=emailok');

} catch (Exception $e) {
    header('Location:index.php?pag=contactos&r=emailerro');
}
