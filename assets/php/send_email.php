<?php
require '../../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    // Validate form data
    if (empty($name) || empty($email) || empty($message)) {
        header("Location: ../../error.html");
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../../error.html");
        exit;
    }

   
    $mail = new PHPMailer(true);

    try {
       
        $mail->SMTPDebug = 0; 
        $mail->isSMTP(); 
        $mail->Host = 'smtp.gmail.com'; 
        $mail->SMTPAuth = true; 
        $mail->Username = 'karthikeyan25082000@gmail.com';
        $mail->Password = '*************'; 
        $mail->SMTPSecure = 'tls'; 
        $mail->Port = 587; 

        //Recipients
        $mail->setFrom('karthikeyan25082000@gmail.com', 'Portfolio');
        $mail->addAddress('karthikeyansrini25@gmail.com', 'Karthikeyan'); 

        // Content
        $mail->isHTML(true); 
        $mail->Subject = '	Message from Portfolio Contact Form ' . $name;
        $mail->Body    = "Name: " . $name . "<br>Email: " . $email . "<br>Message:" . nl2br($message);
        $mail->AltBody = "Name: " . $name . "\nEmail: " . $email . "\nMessage:" . $message;

        $mail->send();
        header("Location: ../../thankyou.html");
        exit;
    } catch (Exception $e) {
        error_log("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
        header("Location: ../../error.html");
        exit;
    }
} else {
    header("Location: ../../error.html");
    exit;
}
?>
