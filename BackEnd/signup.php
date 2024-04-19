<?php
include 'connection.php';

// Get the raw POST data
$postData = file_get_contents("php://input");

// Decode the JSON data
$data = json_decode($postData, true);

// Check if JSON decoding was successful
if ($data === null) {
    // JSON decoding failed
    http_response_code(400); // Bad request
    echo json_encode(array("error" => "Invalid JSON data"));
    exit;
}

// Now you can access the data like an associative array
$fullName = $data['fullName'];
$email = $data['email'];
$phoneNumber = $data['phoneNumber'];
$password = $data['password'];
$confirmPassword = $data['confirmPassword'];

// SQL query to insert data into the database
$sql = "INSERT INTO users (fullname, email, phonenumber, password) VALUES ('$fullName', '$email', '$phoneNumber', '$password')";
 
if ($conn->query($sql) === TRUE) {
    // If successful, send True
    header('Content-Type: application/json');
    echo json_encode(['success' => true, 'message' => 'Signup successful!']);
} else {
    // If insertion fails, send False with error message
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'error' => 'Failed to process signup data']);
}
?>
