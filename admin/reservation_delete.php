<?php
require_once('include/db_config.php');
require_once('include/essentials.php');

session_start();
if (!isset($_SESSION['adminLogin']) || $_SESSION['adminLogin'] !== true) {
    redirect('login.php');
}

$id = isset($_GET['id']) ? $_GET['id'] : null;

$query = "DELETE FROM reservation WHERE id = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $id);
if (mysqli_stmt_execute($stmt)) {
    echo "<script>alert('Reservation deleted successfully');</script>";
} else {
    echo "<script>alert('Failed to delete reservation');</script>";
}

echo "<script>window.location.href = 'admin_reservation.php';</script>";
exit();
?>
