<?php
$to      = 'test@example.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com';

mail($to, $subject, $message, $headers);
?>
<h1>送信！</h1>