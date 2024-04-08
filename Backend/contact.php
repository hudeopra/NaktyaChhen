<?php
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);// Get and validate the email and message from the POST data
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

// Check if both email and message are valid
if ($email && $message) {
    // Set the email headers
    $mailheader = "From: Naktya Chhen <$email>\r\n";
    $mailheader .= "Reply-To: $email\r\n";
    $recipient = "qwer12@gmail.com";
    $subject = "Message from Naktya Chhen";
    
    // check if the mail was sent successfully
    if (mail($recipient, $subject, $message, $mailheader)) {
        echo "Message sent successfully";
    } else {
        echo "Error sending message";
    }
} else {
    echo "Invalid input";
}
?>

