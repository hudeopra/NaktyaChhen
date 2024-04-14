<?php
// Include the connection file
include 'connection.php';
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST["email"]; // Assuming the form field is named "email"
    $password = $_POST["password"]; // Assuming the form field is named "password"
    
    // Validate form data (You can add more validation as needed)
    if (empty($email) || empty($password)) {
        echo "Email and password fields are required";
        exit;
    }

    // Authenticate user (You can add your authentication logic here)
    // For example, querying a database to check if the user exists and password matches
    // Here, we're just echoing the submitted email and password for demonstration purposes
    echo "Submitted email: " . $email . "<br>";
    echo "Submitted password: " . $password;
} else {
    // Handle the case where the form is not submitted
    echo "Form submission failed";
}
?>