<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'info@dcs.ug.edu.gh';

$email_body = 'user name: $name.\n'.
              'user email: $visitor_email.\n'.
              'user message: $message .\n';

$to = 'nanagyanfosu@gmail.com';

$headers = "from: $email_from \r\n";

$headers = "reply to: $visitor_email \r\n";

mail($to,$email_body,$headers);

header("location: contact.html");

?>

