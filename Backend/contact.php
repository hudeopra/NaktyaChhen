<?php
include 'connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $jsonData = file_get_contents("php://input");
        // If no JSON
        if ($jsonData === false) {
            throw new Exception("Error reading input data");
        }
        // Unparse data
        $data = json_decode($jsonData, true);
        if ($data === null) {
            throw new Exception("Error decoding JSON data");
        }

        // Validate the data (e.g., check if name, email, and message are present)

        
        // Prepare and bind parameters to the SQL query
        $stmt = $conn->prepare("INSERT INTO contact (name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $data['name'], $data['email'], $data['message']);
        // Execute the SQL query
        $stmt->execute();

        // Return a success message
        header("Content-Type: application/json");
        http_response_code(200);
        echo json_encode(array("message" => "Contact information saved successfully"));
    } catch (Exception $e) {
        // Handle errors (e.g., log, return error response, etc.)
        http_response_code(400); // Bad Request
        echo json_encode(array("error" => $e->getMessage()));
    }
}


