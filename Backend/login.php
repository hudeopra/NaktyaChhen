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

        // Prepare and execute the SELECT query
        $query = "SELECT email, password FROM user WHERE email = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $data['email']);
        $stmt->execute();
        $stmt->store_result();

        // Bind the result
        $stmt->bind_result($storedemail, $storedpassword);

        // Check if any rows were returned
        if ($stmt->num_rows > 0) {
            $stmt->fetch();

            // Verify the password
            if (password_verify($data['password'], $storedpassword)) {
                $resdata = [
                    'status' => 200,
                    'message' => 'Login in success',
                ];
                header("HTTP/1.0 200 ok");
                echo json_encode($resdata);
            } else {
                $resdata = [
                    'status' => 401,
                    'message' => 'Incorrect email or password',
                ];
                header("HTTP/1.0 401 error");
                echo json_encode($resdata);
            }
        } else {
            $resdata = [
                'status' => 404,
                'message' => 'User not found',
            ];
            header("HTTP/1.0 404 error");
            echo json_encode($resdata);
        }

        $stmt->close();
    } catch (Exception $e) {
        // Handle errors (e.g., log, return error response, etc.)
        header("Content-Type: application/json");
        http_response_code(400); // Bad Request
        echo json_encode(array("error" => $e->getMessage()));
    }
}
?>
