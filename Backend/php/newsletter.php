<?php
// Include the connection file
include 'connection.php';
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST["email"]; // Assuming the form field is named "email"
    
    // Validate form data (You can add more validation as needed)
    if (empty($email)) {
        echo "Email field is required";
        exit;
    }

    // Process the form data (For example, you can save it to a database)
    // Here, we're just echoing back the submitted email for demonstration purposes
    echo "Submitted email: " . $email;
} else {
    // Handle the case where the form is not submitted
    echo "Form submission failed";
}
?>
