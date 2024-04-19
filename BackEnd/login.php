<?php
include 'connection.php';

// Get the raw POST data
$postData = file_get_contents("php://input");

// Decode the JSON data
$data = json_decode($postData, true);

// Check if JSON decoding was successful
if ($data === null || !isset($data['email']) || !isset($data['password'])) {
    // JSON decoding failed or required fields are missing
    http_response_code(400); // Bad request
    echo json_encode(array("error" => "Invalid login data"));
    exit;
}

// Sanitize input data
$email = mysqli_real_escape_string($conn, $data['email']);
$password = mysqli_real_escape_string($conn, $data['password']);

// Query to check if the user exists with the provided email and password
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    if ($user['password'] == $password) {
        // Password matches, login successful
        header('Content-Type: application/json');
        echo json_encode(['success' => true, 'message' => 'Login successful']);
    } else {
        // Password does not match
        header('Content-Type: application/json');
        echo json_encode(['success' => false, 'error' => 'Password does not match']);
    }
} else {
    // User not found
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'error' => 'User not found']);
}

$conn->close();
?>
