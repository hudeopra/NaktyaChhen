<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $date = $_POST["date"];
    $time = $_POST["arrivalTime"];

    $stmt = $conn->prepare("DELETE FROM reservation WHERE date = ? AND time = ?");
    $stmt->bind_param("ss", $date, $time);

    if ($stmt->execute()) {
        echo "Reservation cancelled successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
