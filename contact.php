<?php
	$to      = 'readsuccessstoriess@gmail.com';
	$email   = $_POST['email'];
	$name  = $_POST['name'];
	$subject = $_POST['subject'];
	$message = $_POST['comments'];

	$headers = 'From: http://.github.io'. '<'.$email.'>' . "\r\n" .
		'Reply-To: '. $email . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);

	echo "<script>window.location.href = 'http://.github.io';</script>";
   
?>