<?php
session_start();
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate user input (sanitize, validate, etc.)

    // Check if any field is empty
    if (empty($email) || empty($password)) {
        echo json_encode(['error' => 'All fields are required']);
        exit;
    }

    // Check if the provided email exists in the database
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = $mysqli->query($query);

    if ($result->num_rows === 1) {
        // User found, verify password
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            // Password correct, set session and redirect
            $_SESSION['user_id'] = $user['id']; // Set session with user ID or any other relevant data
            echo json_encode(['success' => true]);
        } else {
            // Password incorrect
            echo json_encode(['error' => 'Invalid email or password']);
        }
    } else {
        // User not found
        echo json_encode(['error' => 'Invalid email or password']);
    }
} else {
    // Redirect or handle other cases
}
?>
