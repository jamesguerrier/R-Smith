<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'info@youwebsite.com';

$email_subject = 'email from website';

$email_body = "User Name: $name.\n". 
"User Email: $visitor_email.\n". "Subject: $subject.\n". "User Message: $message .\n";

$to = 'jeanricardsmithofficial@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($To,$email_subject,$email_body,$headers);

header("Location: index.html");

?>