<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to      = "teamshreya.jotana@gmail.com"; // Change this to your email address
    $subject = "New Contact Form Submission";
    $body    = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<h2>Thank you, $name. Your message has been sent!</h2>";
    } else {
        echo "<h2>Sorry, something went wrong. Please try again.</h2>";
    }
} else {
    echo "Invalid Request";
}
?>
