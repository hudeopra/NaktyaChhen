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
      

        // Prepare and bind parameters to the SQL query
        $stmt = $conn->prepare("INSERT INTO reservation (date, time, people, tableNumber, description) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssiss", $data['date'], $data['time'], $data['people'], $data['tableNumber'], $data['description']);
        // Execute the SQL query
        $stmt->execute();

        if($stmt){
            $resdata = [
                'status' => 200,
                'message' => 'Reservation success',
            ];
            header("HTTP/1.0 200 ok");
            echo json_encode($resdata);
        }

        else{
            $resdata = [
                'status' => 404,
                'message' => 'Reservation failed',
            ];
            header("HTTP/1.0 404 error");
            echo json_encode($resdata);
        }

       
    } catch (Exception $e) {
        // Handle errors (e.g., log, return error response, etc.)
        http_response_code(400); // Bad Request
        echo json_encode(array("error" => $e->getMessage()));
    }
}
?>
