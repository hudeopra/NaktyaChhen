<?php
// Include connection.php file
require_once 'connection.php';

// Function to fetch booking data from the database with pagination
function fetchBookingData($offset, $limit) {
    global $conn;

    // Fetch data from the bookings table with pagination
    $query = "SELECT * FROM reservation LIMIT $offset, $limit";
    $result = mysqli_query($conn, $query);

    // Check if query executed successfully
    if ($result && mysqli_num_rows($result) > 0) {
        $bookings = array();
        // Output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            $bookings[] = $row;
        }
        return $bookings;
    } else {
        // Return empty array if no data found
        return array();
    }
}
?>
