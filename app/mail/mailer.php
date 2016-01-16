<?php



$form_data = array(
    'name' => $_POST['name'] ,
    'tel' => $_POST['tel'] ,
    'email' => $_POST['email'],
    'service' => $_POST['service'],
    'message' => htmlspecialchars($_POST['message'])
);

require 'config.php';
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

if ($smtp['enabled']) {
    $mail->isSMTP();
    $mail->Host = $smtp['host'];
    $mail->SMTPAuth = true;
    $mail->Username = $smtp['username'];
    $mail->Password = $smtp['password'];
    $mail->Port = $smtp['port'];

    if ($smtp['tls']) {
        $mail->SMTPSecure = "tls";
    }
} else {
    $mail->isHTML(true);
}
$mail->SMTPDebug = 4;
$mail->From = $form_data['email'];
$mail->FromName = $me['name'];

$mail->addAddress($me['email']);

$template = file_get_contents('mail.template.html');
$parsed_template = sprintf($template, $form_data['message'], $form_data['name'], $form_data['tel'], $form_data['email'],$form_data['service']);

$mail->Subject = 'Apptisan contact form message';
$mail->Body = $parsed_template;

$mail->AltBody = $form_data['name'] . " (" . $form_data['email'] . ") used the Apptisan contact form to send you this message: " . $form_data['message'];

if ( ! $mail->send())
{
    echo $mail->ErrorInfo;
}
else
{
    echo 'success';
}