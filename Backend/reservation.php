<?php
include 'connection.php';
if (isset($_SERVER["REQUEST_METHOD"]) && !empty($_SERVER["REQUEST_METHOD"])) {
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $date = $_POST["date"];
    $time = $_POST["time"];
    $people = $_POST["people"];
    $tableNumber = $_POST["table_number"];
    $description = $_POST["description"];

    $stmt = $conn->prepare("INSERT INTO reservation (date, time, people, table_number, description) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiss", $date, $time, $people, $tableNumber, $description);

    if ($stmt->execute()) {
        echo "Reservation done";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();

}
}
?>

