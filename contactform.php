<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    // Retrieve data from the contact form
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    // Server settings (not needed for mail() function)
    // $mail->SMTPDebug = 1;                    // Disable verbose debug output for production
    $mail->isSMTP();                                         // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                  // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                // Enable SMTP authentication
    $mail->Username   = 'mail@gmail.com';                  // SMTP username
    $mail->Password   = 'fzkygxanuyccppm';                            // SMTP password
    $mail->SMTPSecure = 'ssl';         // Enable implicit TLS encryption
    $mail->Port       = 465;                                 // TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
    // Recipient
    $mail->setFrom($mailFrom, $name);
    $mail->addAddress('mail@edu.sde', 'Name');        // Add a recipient

    // Content
    $mail->isHTML(true);                                      // Set email format to HTML
    $mail->Subject = 'Request from a customer';
    $mail->Body    = "You have received a request from $name ($mailFrom): <br><br>$message";

    // Send the email
    $mail->send();
    echo '<script>alert("Request has been sent");</script>'; // Display success message as JavaScript alert
    echo '<script>document.getElementById("contactForm").reset();</script>'; // Reset the form
    echo '<script>window.location.href = "index.html";</script>'; // Redirect to index.html after displaying alert
} catch (Exception $e) {
    echo '<script>alert("Message could not be sent. Mailer Error: ' . $mail->ErrorInfo . '");</script>'; // Display error message as JavaScript alert
}
?>
