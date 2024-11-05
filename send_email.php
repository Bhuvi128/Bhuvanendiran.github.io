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
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $email_content, $headers)) {
        // Redirect to a thank-you page
        header("Location: thank_you.html");
        exit;
    } else {
        // If the email fails to send
        echo "<div class='container text-center mt-5'>
                <h2>Error</h2>
                <p>There was an error sending your message. Please try again later.</p>
                <a href='contact.html' class='btn btn-primary'>Return to Contact</a>
              </div>";
    }
}
?>
