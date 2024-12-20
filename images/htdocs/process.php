<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect data from the form
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $location = htmlspecialchars($_POST['location']);
    $message = htmlspecialchars($_POST['message']);

    // Validate inputs
    if (empty($name) || empty($email) || empty($location) || empty($message)) {
        echo "All fields are required!";
        exit;
    }

    // Email details
    $to = "jonkomanelesoetsa@gmail.com"; // Replace with your email address
    $subject = "New Contact Form Submission";
    $body = "You have received a new message:\n\n" .
            "Name: $name\n" .
            "Email: $email\n" .
            "Location: $location\n" .
            "Message:\n$message";
    $headers = "From: $email\r\n";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "<h2>Message sent successfully!</h2>";
    } else {
        echo "<h2>Failed to send the message. Please try again later.</h2>";
    }
} else {
    echo "Invalid form submission!";
}
?>
