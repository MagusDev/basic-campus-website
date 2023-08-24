<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from =  'info@magikspot.great-site.net';

$email_subject = 'New Form submission';

$email_body "User name: $name.\n".
            "User email: $visitor_email.\n".
            "Subject: $subject.\n".
            "Message: $message.\n";

$to = "m.agame1379@gmail.com";

$headers = "From : $email_from \r\n";

$headers .= "Reply to : $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: Contact.html");

?>

