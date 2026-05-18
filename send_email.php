<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    error_log("Form submitted");

    $fullname = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "yasharthbajpai@outlook.in";
    $subject = "New Contact Form Submission from Portfolio";
    $body = "Full Name: $fullname\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        // Redirect back to portfolio with success
        header("Location: index.html?status=success");
        exit();
    } else {
        header("Location: index.html?status=error");
        exit();
    }
} else {
    echo "Invalid request method.";
}
?>
₹