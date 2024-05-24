<?php
require_once('include/db_config.php');
require_once('include/essentials.php');

session_start();
if (!isset($_SESSION['adminLogin']) || $_SESSION['adminLogin'] !== true) {
    redirect('login.php');
}

// Determine the type of deletion: reservation or user
$type = isset($_GET['type']) ? $_GET['type'] : 'reservation';
$id = isset($_GET['id']) ? $_GET['id'] : null;

if ($type === 'reservation') {
    $query = "DELETE FROM reservation WHERE id = ?";
} else {
    $query = "DELETE FROM user WHERE id = ?";
}

$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $id);
if (mysqli_stmt_execute($stmt)) {
    echo "<script>alert('Data deleted successfully');</script>";
} else {
    echo "<script>alert('Failed to delete data');</script>";
}

echo "<script>window.location.href = 'admin_user.php';</script>";
exit();
?>
