<?php
	$to      = 'readsuccessstoiess@gmail.com';
	$email   = $_POST['email'];
	$name  = $_POST['name'];
	$subject = $_POST['subject'];
	$message = $_POST['comments'];

	$headers = 'From: http://YourUrl'. '<'.$email.'>' . "\r\n" .
		'Reply-To: '. $email . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

	if (mail($to, $subject, $message, $headers)){

	echo "<script>window.location.href = 'http://nikhil16.github.io/nikhil16';</script>";
   
?>