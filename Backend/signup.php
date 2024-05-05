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

        $hashedPassword = password_hash($data['password'], PASSWORD_DEFAULT);
        $stmt = $conn->prepare("INSERT INTO user(name, email, password, number) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $data['name'], $data['email'], $hashedPassword, $data['number']);

        if ($stmt->execute()) {
            $resdata = [
                'status' => 200,
                'message' => 'Registrartion success',
            ];
            header("HTTP/1.0 200 ok");
            echo json_encode($resdata);
        } else {
            $resdata = [
                'status' => 404,
                'message' => 'cannot registor',
            ];
            header("HTTP/1.0 404 error");
            echo json_encode($resdata);
        }

        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        // Return error message as JSON
        echo json_encode(array("error" => $e->getMessage()));
    }
}
?>
