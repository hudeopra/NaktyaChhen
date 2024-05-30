<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Include necessary files
require_once('include/db_config.php');
require('include/essentials.php');
require('fetchdata.php');

// Check if user is logged in as admin
adminLogin();

// Set pagination variables
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$limit = 10; // Number of records per page
$offset = ($page - 1) * $limit;

// Fetch booking data with pagination
$reservation = fetchReservationData($offset, $limit); // Assuming your function name is fetchReservationData

// Calculate total number of pages
$totalReservations = count(fetchReservationData(0, PHP_INT_MAX)); // Assuming your function name is fetchReservationData
$totalPages = ceil($totalReservations / $limit);
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
                            <h2 class="card-title">Reservation Details</h2>
                            <div class="table-responsive" id="reservationTable">
                                <h4>Booking Details</h4>
                                <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>ID</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>People</th>
                                        <th>Table Number</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>

                                    <tbody>
                                        <?php
                                        // Check if data is available
                                        if (!empty($reservation)) {
                                            // Output data
                                            foreach ($reservation as $booking) {
                                                echo "<tr>";
                                                // Display the new columns for Full Name, Email, and Phone
                                                echo "<td>" . $booking['full_name'] . "</td>"; // Display Full Name
                                                echo "<td>" . $booking['email'] . "</td>"; // Display Email
                                                echo "<td>" . $booking['phone'] . "</td>"; // Display Phone
                                                echo "<td>" . $booking['id'] . "</td>"; // Display ID
                                                echo "<td>" . $booking['date'] . "</td>"; // Display Date
                                                echo "<td>" . $booking['arrival_time'] . "</td>"; // Display Time
                                                echo "<td>" . $booking['number_of_people'] . "</td>"; // Display Number of People
                                                echo "<td>" . $booking['table_number'] . "</td>"; // Display Table Number
                                                echo "<td>" . $booking['notes'] . "</td>"; // Display Description
                                                // Edit and Delete buttons
                                                echo "<td>";
                                                echo "<a href='reservation_edit.php?id=" . $booking['id'] . "' class='btn btn-primary btn-sm'>Edit</a> ";
                                                echo "<a href='reservation_delete.php?id=" . $booking['id'] . "' class='btn btn-danger btn-sm'>Delete</a>";
                                                echo "</td>";
                                                echo "</tr>";
                                                
                                            }
                                        } else {
                                            // Output if no data found
                                            echo "<tr><td colspan='9'>No bookings found</td></tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>

                                <!-- Pagination -->
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <?php if ($page > 1): ?>
                                            <li class="page-item"><a class="page-link" href="?page=<?php echo $page - 1; ?>">Previous</a></li>
                                        <?php endif; ?>
                                        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                                            <li class="page-item <?php echo ($page == $i) ? 'active' : ''; ?>"><a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                        <?php endfor; ?>
                                        <?php if ($page < $totalPages): ?>
                                            <li class="page-item"><a class="page-link" href="?page=<?php echo $page + 1; ?>">Next</a></li>
                                        <?php endif; ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php require('../include/script.php'); ?>
    <?php require('include/admin-scripts.php'); ?>
</body>
</html>
