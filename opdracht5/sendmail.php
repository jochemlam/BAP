<?php

$to = '24549@ma-web.nl';
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = 'From: ' . $_POST['from'];

mail($to, $subject, $message, $headers);

echo 'De mail is succesvol verstuurd, u kunt deze pagina nu sluiten.';