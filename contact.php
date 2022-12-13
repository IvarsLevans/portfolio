<?php
    // Include the PHP Mailer library
    require 'path/to/PHPMailerAutoload.php';

    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set the recipient email address
    $to = 'ivarslevans@protonmail.com';

    // Set the email subject
    $subject = 'Message from ' . $name;

    // Create a new instance of the PHPMailer class
    $mail = new PHPMailer;

    // Configure the email settings
    $mail->setFrom($email, $name);
    $mail->addAddress($to);
    $mail->Subject = $subject;
    $mail->Body = $message;

    // Send the email
    $result = $mail->send();

    // Redirect to the contact page
    header('Location: contact.html');
?>