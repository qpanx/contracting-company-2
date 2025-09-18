<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@arren.sa';

$email_subject = "New Form Submission: $subject";
$email_body = "User Name: $name\n";
$email_body .= "Email: $visitor_email\n";
$email_body .= "Subject: $subject\n";
$email_body .= "Message: $message\n";

$to = 'ahmedwael5775@gmail.com';
$headers = "From: $email_from\n";
$headers .= "Reply-To: $visitor_email\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");
?>