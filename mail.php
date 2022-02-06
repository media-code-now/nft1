<?php

include 'bat/MailHandler.php';

$name = $_POST['name'];
$email = $_POST['email'];
$sub = $_POST['sub'];
$mess = $_POST['mess'];

ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
$from = $email;
$to = $owner_email;
$subject = $sub;
$message = "User - " . $name . "\n-\n" . $mess;
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
header('Location: /demo/success.html');

?>