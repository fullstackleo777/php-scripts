<?php
// Verifies the server's ability to send emails.
$to = 'example@domain.com';
$subject = 'Test Email';
$message = 'This is a test email.';
$headers = 'From: noreply@domain.com';

echo mail($to, $subject, $message, $headers) ? 'Email sent successfully' : 'Failed to send email';
?>
