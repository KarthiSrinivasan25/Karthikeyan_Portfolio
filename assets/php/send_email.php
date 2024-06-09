<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set up email parameters
    $to = "karthikeyan25082000@gmail.com"; // Replace with your email address
    $subject = "Message from Portfolio Contact Form";
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    // Send email
    if (mail($to, $subject, $body)) {
        // Email sent successfully
        header("Location: thankyou.html"); // Redirect to thank you page
        exit;
    } else {
        // Failed to send email
        header("Location: error.html"); // Redirect to error page
        exit;
    }
} else {
    // If not a POST request, redirect to error page
    header("Location: error.html"); // Redirect to error page
    exit;
}
?>
