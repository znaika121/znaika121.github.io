<?php
require 'lib/PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'user@gmail.com';
$mail->Password = '_password_';
$mail->SMTPSecure = 'tls';

$mail->From = 'sender@example.com';
$mail->FromName = 'Your Name';
$mail->addAddress('recipient@example.com');

$mail->isHTML(true);

$mail->Subject = 'Test Mail Subject!';
$mail->Body    = 'This is SMTP Email Test';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
 } else {
    echo 'Message has been sent';
}
?>

