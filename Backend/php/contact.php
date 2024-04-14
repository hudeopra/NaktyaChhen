<?php
// Include the connection file
include 'connection.php';
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fullName = $_POST["fullName"]; // Assuming the form field is named "fullName"
    $email = $_POST["email"]; // Assuming the form field is named "email"
    $message = $_POST["message"]; // Assuming the form field is named "message"
    
    // Validate form data (You can add more validation as needed)
    if (empty($fullName) || empty($email) || empty($message)) {
        echo "All fields are required";
        exit;
    }

    // Process the form data (For example, you can send an email with the form details)
    // Here, we're just echoing back the submitted data for demonstration purposes
    echo "Submitted full name: " . $fullName . "<br>";
    echo "Submitted email: " . $email . "<br>";
    echo "Submitted message: " . $message;
} else {
    // Handle the case where the form is not submitted
    echo "Form submission failed";
}
?>
