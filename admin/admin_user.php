<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('include/db_config.php');
require_once('include/essentials.php');

// Check if the admin is logged in
adminLogin();


// Fetch user data from the database
$query = "SELECT * FROM user";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Database query failed: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Panel - Reservations</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require('include/admin-head-links.php'); ?>
</head>
<body>
    <section>
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between p-3 w-100">
                <h3>Admin Panel</h3>
                <a href="logout.php" class="ph-btn mt-0">Logout</a>
            </div>
        </div>
    </section>
    <?php require('include/admin-header.php'); ?>
    <main>
        <section class="container">
            <div class="row">
                <div class="col-12 p-4 overflow-hidden">
                    <!-- Reservation table -->
                    <div class="card mb-5">
                        <div class="card-body">
                            <h2 class="card-title">User Details</h2>
                            <div class="table-responsive" id="reservationTable">
                                <h4>Booking Details</h4>
                                <table class="table table-bordered">
                                <thead>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Password (Hashed)</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($user = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($user['id']); ?></td>
                        <td><?php echo htmlspecialchars($user['name']); ?></td>
                        <td><?php echo htmlspecialchars($user['email']); ?></td>
                        <td><?php echo htmlspecialchars($user['number']); ?></td>
                        <td><?php echo htmlspecialchars($user['password']); ?></td>
                        <td>
                            <a href="user_edit.php?id=<?php echo $user['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                            <a href="user_delete.php?id=<?php echo $user['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php
// Free result set and close the connection
mysqli_free_result($result);
mysqli_close($conn);
?>
