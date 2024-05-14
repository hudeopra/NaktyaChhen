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
        
        // Check if user already exists
        $checkUser = "SELECT * FROM user WHERE email = ?";
        $stmt = $conn->prepare($checkUser);
        $stmt->bind_param("s", $data['email']);
        $stmt->execute();
        $result = $stmt->get_result();
        $count = $result->num_rows;
        $stmt->close();
        
        if ($count > 0) {
            $resdata = [
                'status' => 400,
                'message' => 'User already signed up',
            ];
            header("HTTP/1.0 400 Bad Request");
            echo json_encode($resdata);
            exit;
        } else {
            // Insert new user
            $hashedPassword = password_hash($data['password'], PASSWORD_DEFAULT);
            $stmt = $conn->prepare("INSERT INTO user(name, email, password, number) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $data['name'], $data['email'], $hashedPassword, $data['number']);
            $stmt->execute();
            $stmt->close();
            
            $resdata = [
                'status' => 200,
                'message' => 'Registration success',
            ];
            header("HTTP/1.0 200 OK");
            echo json_encode($resdata);
        }

        $conn->close();
    } catch (Exception $e) {
        // Return error message as JSON
        $resdata = [
            'status' => 500,
            'message' => $e->getMessage(),
        ];
        header("HTTP/1.0 500 Internal Server Error");
        echo json_encode($resdata);
    }
}
?>