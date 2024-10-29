<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $to = filter_var(trim($_POST['to']), FILTER_SANITIZE_EMAIL);
    $subject = filter_var(trim($_POST['subject']), FILTER_SANITIZE_STRING);
    $message = filter_var(trim($_POST['message']), FILTER_SANITIZE_STRING);
    
    // Specify the headers
    $headers = "From: lsdev200@gmail.com\r\n" .
               "Reply-To: lsdev200@gmail.com\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Validate email
    if (filter_var($to, FILTER_VALIDATE_EMAIL)) {
        // Send the email
        if (mail($to, $subject, $message, $headers)) {
            echo "Email successfully sent to $to.";
        } else {
            echo "Failed to send email.";
        }
    } else {
        echo "Invalid email address.";
    }
} else {
    echo "Invalid request.";
}
