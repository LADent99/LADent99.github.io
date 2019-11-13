<?php $firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$message = $_POST['subject'];
$formcontent="From: $name \n Message: $message";
$recipient = "LADent99@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>