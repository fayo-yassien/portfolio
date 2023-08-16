<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "fayo.designs@hotmail.com"; // Replace with your email address
    $subject = "New Form Submission";
    $headers = "From: $email";

    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Message:\n$message";

    // Send the email
    mail($to, $subject, $email_body, $headers);

    // Redirect the user back to the form or a thank-you page
    header("Location: thank_you.html");
    exit();
}
?>