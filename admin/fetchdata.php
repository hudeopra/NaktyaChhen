<?php
require_once('include/db_config.php');

function fetchReservationData($offset, $limit) {
    global $conn;  // Use the global $conn variable
    if (!$conn) {
        die("Database connection failed");
    }

    $query = "SELECT * FROM `reservation` LIMIT ?, ?";
    $stmt = $conn->prepare($query);
    if ($stmt === false) {
        die("Failed to prepare statement: " . $conn->error);
    }
    $stmt->bind_param("ii", $offset, $limit);
    $stmt->execute();
    $result = $stmt->get_result();
    $bookings = $result->fetch_all(MYSQLI_ASSOC);
    $stmt->close();
    return $bookings;
}
?>
