<?php
if(isset($_POST["submit"])) {
$recipient = "readsuccessstoriess@gmail.com"; //my email
echo $subject = 'Email message from Point Plumbing';
echo $name = $_POST ["Name"];
echo $email = $_POST["Email"];
echo  $message = $_POST["comments"];

 $mailBody="Name: $name\nEmail: $email\n\n$message"; 

 mail($recipient, $subject, $mailBody, "From: $name <$email>");

echo $thankYou="<p>Thank you! We will be in contact with you shortly.</p>";

}
?>