<?php
// Starting the session
session_start();
if (!isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true) {
    // Redirecting to index.php
    echo "<script>window.location.href = 'admin.php';</script>";
}

// Define variables for pagination
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 10;
$offset = ($page - 1) * $limit;

// Include fetch_data.php file
require_once 'fetchdata.php';

// Fetch booking data with pagination
$bookings = fetchBookingData($offset, $limit);

// Calculate total number of pages
$totalPages = ceil(count(fetchBookingData(0, PHP_INT_MAX)) / $limit);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../FrontEnd/assets/library/bootstrap/bootstrap.css" type="text/css" media="all">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../FrontEnd/assets/library/font-awesome/font-awesome.min.css" type="text/css" media="all">
</head>
<body class="bg-light">
    <div class="container-fluid bg-dark text-light p-3 d-flex align-item-center justify-content-between">
        <h3 class="mb-0">ADMIN PANEL</h3>
        <a href="logout.php" class="btn btn-light btn-sm"> LOG OUT</a>
    </div>

    <div class="container mt-4">
        <h4>Booking Details</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>People</th>
                    <th>Table Number</th>
                    <th>Description</th>
                    <th>Actions</th> <!-- New column for Edit and Delete buttons -->
                </tr>
            </thead>
            <tbody>
                <?php
                // Check if data is available
                if (!empty($bookings)) {
                    // Output data
                    foreach ($bookings as $booking) {
                        echo "<tr>";
                        echo "<td>" . $booking['id'] . "</td>";
                        echo "<td>" . $booking['date'] . "</td>";
                        echo "<td>" . $booking['time'] . "</td>";
                        echo "<td>" . $booking['people'] . "</td>";
                        echo "<td>" . $booking['tableNumber'] . "</td>";
                        echo "<td>" . $booking['description'] . "</td>";
                        // Edit and Delete buttons
                        echo "<td>";
                        echo "<a href='edit.php?id=" . $booking['id'] . "' class='btn btn-primary btn-sm'>Edit</a> ";
                        echo "<a href='delete.php?id=" . $booking['id'] . "' class='btn btn-danger btn-sm'>Delete</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    // Output if no data found
                    echo "<tr><td colspan='7'>No bookings found</td></tr>";
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
</body>
</html>
