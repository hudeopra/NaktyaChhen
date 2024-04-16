<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $date = $_POST["date"];
    $time = $_POST["arrivalTime"];
    $people = $_POST["numberOfPeople"];
    $tableNumber = $_POST["tableNumber"];
    $description = $_POST["notes"];

    // Validate inputs if necessary
    // For example, check if date is in the correct format

    $stmt = $conn->prepare("INSERT INTO reservation (date, time, people, tableNumber, description) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiss", $date, $time, $people, $tableNumber, $description);

    if ($stmt->execute()) {
        echo "Reservation done";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
