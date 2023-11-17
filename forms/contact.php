<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $receiving_email_address = 'alawand591@gmail.com';

    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    // Validate input - ensure all required fields are present and not empty

    if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
        // Process your email sending logic here
        // For example, using PHP's mail function:

        $to = $receiving_email_address;
        $headers = "From: $email";
        $email_body = "You have received a new message from $name ($email):\n\n$message";

        if (mail($to, $subject, $email_body, $headers)) {
            echo 'OK';
        } else {
            echo 'Failed to send message. Please try again later.';
        }
    } else {
        echo 'Please fill in all the fields in the form.';
    }
} else {
    echo 'Method not allowed.';
}
?>
