<?php
$name = $_POST['name'];
$email = $_POST['email'] ;
$message = $_POST['comments'] ;
$subject = $_POST['subject'];
$body = "Name: $name\r\n";
$body .= "Message: $message";

$to = "readsuccessstoriess@gmail.com";
$from = "automailer@storyofsuccess.in (Website Automailer)";
$subject = "Contact Us";
$headers =  "From: http://storyofsuccess.in/" .'<'.$email.'>' . "\r\n" .
		'Reply-To: '. $email . "\r\n" .
		'X-Mailer: PHP/' . phpversion();
$sent = mail($to, $subject, $body, $headers) ;
echo "<script>window.location.href = 'http://storyofsuccess.in/';</script>";
?>