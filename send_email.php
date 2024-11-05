<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set your email address
    $to = "bhuvanendiran128@gmail.com";  // Replace with your email address
    $subject = "New Contact Form Submission";

    // Create the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // Set headers
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $email_content, $headers)) {
        // Redirect to a thank-you page (optional)
        header("Location: thank_you.html");
        exit;
    } else {
        echo "There was an error sending your message. Please try again.";
    }
}
?>
