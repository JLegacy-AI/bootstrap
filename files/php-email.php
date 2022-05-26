<?php
// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

$to = "tecdachi@gmail.com";
 
$txt = "Hello world!";
$headers = "From: Parkme <noreply@parkme.fr>" . "\r\n";

// send email
mail($to,"Parkme",$msg);
?>