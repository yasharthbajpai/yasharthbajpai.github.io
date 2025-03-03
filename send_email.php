<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Output debugging info
    error_log("Form submitted");

    $fullname = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Your existing email sending logic...
    $to = "123@gmail.com";
    $subject = "New Contact Form Submission";
    $body = "Full Name: $fullname\nEmail: $email\nMessage: $message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message could not be sent.";
    }
} else {
    echo "Invalid request method.";
}
?>
