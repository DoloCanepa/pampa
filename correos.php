<?php
$destinatario = array('lolacanepa@gmail.com', 'santiago@pampainternational.com', 'nicolas@pampainternational.com');
$to = implode(',', $destinatario);

$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$message = $_POST['message'];

$header = "Sent from the Pampa International page";
$fullMessage = $message .  "\nKindRegards: " . $name;

mail($to, $email, $fullMessage, $header);
echo "<script>alert('mail sent successfully')</script>";
echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";


?>