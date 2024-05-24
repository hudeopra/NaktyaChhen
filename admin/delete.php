<?php

// Include connection.php file
require_once('include/db_config.php');

// Check if the ID parameter is set in the URL
if (!isset($_GET['id'])) {
    // Redirecting back to dashboard.php if ID is not provided
    echo "<script>window.location.href = 'admin_reservation.php';</script>";
    exit();
}

// Delete booking based on ID
$id = $_GET['id'];
$query = "DELETE FROM reservation WHERE id = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);

// Redirect back to dashboard.php after deleting
echo "<script>window.location.href = 'admin_reservation.php';</script>";
?>
