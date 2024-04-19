<?php
// Include the connection file
include 'connection.php';

// Initialize response array
$response = array();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if any field is empty
    if (empty($fullname) || empty($email) || empty($phonenumber) || empty($password) || empty($confirm_password)) {
        $response['error'] = "All fields are required";
    } elseif ($password !== $confirm_password) {
        $response['error'] = "Passwords do not match";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response['error'] = "Invalid email format";
    } else {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        // SQL query to insert user into database
        $sql = "INSERT INTO users (fullname, email, phonenumber, password) VALUES (?, ?, ?, ?)";

        // Prepare the statement
        $stmt = $mysqli->prepare($sql);
        if ($stmt) {
            // Bind parameters
            $stmt->bind_param("ssss", $fullname, $email, $phonenumber, $hashed_password);
            // Execute the statement
            if ($stmt->execute()) {
                $response['success'] = true;
                $response['message'] = "Registration successful. You can now log in.";
            } else {
                $response['error'] = "Database error: " . $stmt->error;
            }
            // Close the statement
            $stmt->close();
        } else {
            $response['error'] = "Database error: " . $mysqli->error;
        }
    }

    // Return JSON response
    echo json_encode($response);
}
?>
