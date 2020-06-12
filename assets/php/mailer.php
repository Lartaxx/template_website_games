<?php 

header('Content-Type: text/html; charset=utf-8');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/phpmailer/phpmailer/src/Exception.php';
require  '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require  '../vendor/phpmailer/phpmailer/src/SMTP.php';
require './config.php';

require '../vendor/autoload.php';

$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = "your host name";
$mail->SMTPAuth = true;
$mail->Username = "your username";
$mail->Password = "your passeword";
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom("your username", 'Mailer');
$mail->addAddress("your address email", 'you');


$mail->isHTML(true);
$mail->Subject = 'Mail de '.$_POST["prenom"].' '.$_POST["nom"].'';
$mail->Body = 'Message : <br><br> '.$_POST["message"].'';


if($mail->send()){
     $ret["err"] = 0;
}else{
    $ret["err"] = 1;
    $ret["txt"]  = $mail->ErrorInfo;
}
header('content-type:application/json');
echo json_encode($ret);


?>


?>