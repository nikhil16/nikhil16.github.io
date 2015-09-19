<?php
$name = $_POST['name'];
$email = $_POST['email'] ;
$message = $_POST['comments'] ;
$subject = $_POST['subject'];

$to = "readsuccessstoriess@gmail.com";
//$from = "automailer@storyofsuccess.in (Website Automailer)";
$subject = "Contact Us";
$headers =  "From: $email" .'<'.$email.'>' . "\r\n" .
		'Reply-To: '. $readsuccessstoriess@gmail.com . "\r\n" .
		'X-Mailer: PHP/' . phpversion();
		
$send = mail($to, $subject, $body, $headers) ;
header('Location: test.html');
?>