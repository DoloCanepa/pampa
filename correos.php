<?php
$destinatario = array('lolacanepa@gmail.com', 'santiago@pampainternational.com', 'nicolas@pampainternational.com');
$to = implode(',', $destinatario);

$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$message = $_POST['message'];

$ip= $_SERVER['REMOTE_ADDR'];
$captcha = $_POST['g-recaptcha-response'];
$secretkey= "";

$respuesta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$captcha&remoteip=$ip");

$atributos = json_decode($respuesta, TRUE);

$header = "Sent from the Pampa International page";
$fullMessage = $message .  "\nKindRegards: " . $name;

if(!$atributos['success']){
    echo "Error: Por favor, confirma que eres humano.";
    exit;
}

mail($to, $email, $fullMessage, $header);
echo "<script>alert('mail sent successfully')</script>";
echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";


?>
