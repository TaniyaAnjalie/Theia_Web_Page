<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'file:///D:/HNDIT/HNDIT1106/Assignment/Assignment%201%20-%20Web%20Page/Theia.html' ;

$email_subject = 'New Form Submission' ;

$email_body = "User Name : $name.\n".
                "User Email : $visitor_email.\n".
                "Subject : $subject.\n".
                "User Message : $message.\n".

$to = 'theiajewell@gmail.com'

$headers = "From : $email_from \r\n";

$headers = "Reply To : $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers)

header("Location: Contact.html")
?>