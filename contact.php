<?php
$to = "readsuccessstoriess@gmail.com";

$email = $_POST['email'] ;
$name = $_POST['name'];
$message = $_POST['comments'] ;



$headers =  "From: $email" .'<'.$email.'>' . "\r\n" .
		'Reply-To: '. $readsuccessstoriess@gmail.com . "\r\n" .
		'X-Mailer: PHP/' . phpversion();
		
   mail($to, $subject, $message, $headers) ;
   echo "<script>window.location.href = 'email';</script>";
   header('Location: test.html');
   
?>