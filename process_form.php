<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Compose email message
    $to = "jdement97@gmail.com";
    $subject = "New Contact Form Submission";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $messageBody = "Name: $name\n";
    $messageBody .= "Email: $email\n\n";
    $messageBody .= "Message:\n$message";

    // Send email
    mail($to, $subject, $messageBody, $headers);

    // Redirect after submission (you can customize the URL)
    // header("Location: thank_you.html");
    exit();
} else {
    // Handle the case when the form is not submitted
    echo "Form submission error.";
}
?>
