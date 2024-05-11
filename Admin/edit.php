<?php
// Check if the ID parameter is set in the URL
if (!isset($_GET['id'])) {
    // Redirecting back to dashboard.php if ID is not provided
    echo "<script>window.location.href = 'dashboard.php';</script>";
    exit();
}

// Include connection.php file
require_once 'connection.php';

// Fetch booking data based on ID
$id = $_GET['id'];
$query = "SELECT * FROM reservation WHERE id = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$booking = mysqli_fetch_assoc($result);

// Check if booking exists
if (!$booking) {
    // Redirecting back to dashboard.php if booking not found
    echo "<script>window.location.href = 'dashboard.php';</script>";
    exit();
}

// Handling form submission for editing
if (isset($_POST['edit'])) {
    // Process form data here
    // Update the booking record in the database
    $date = $_POST['date'];
    $time = $_POST['time'];
    $people = $_POST['people'];
    $tableNumber = $_POST['tableNumber'];
    $description = $_POST['description'];
    
    $update_query = "UPDATE reservation SET date=?, time=?, people=?, tableNumber=?, description=? WHERE id=?";
    $stmt = mysqli_prepare($conn, $update_query);
    mysqli_stmt_bind_param($stmt, "ssiiis", $date, $time, $people, $tableNumber, $description, $id);
    if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('Booking updated successfully');</script>";
        // Redirect back to dashboard.php after updating
        echo "<script>window.location.href = 'dashboard.php';</script>";
        exit();
    } else {
        echo "<script>alert('Failed to update booking');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Booking</title>
    <link rel="stylesheet" href="../FrontEnd/assets/library/bootstrap/bootstrap.css" type="text/css" media="all">
</head>
<body>
    <div class="container">
        <h2>Edit Booking</h2>
        <form action="" method="POST">
            <!-- Form fields for editing booking data -->
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" class="form-control" id="date" name="date" value="<?php echo $booking['date']; ?>">
            </div>
            <div class="form-group">
                <label for="time">Time:</label>
                <input type="time" class="form-control" id="time" name="time" value="<?php echo $booking['time']; ?>">
            </div>
            <div class="form-group">
                <label for="people">People:</label>
                <input type="number" class="form-control" id="people" name="people" value="<?php echo $booking['people']; ?>">
            </div>
            <div class="form-group">
                <label for="tableNumber">Table Number:</label>
                <input type="number" class="form-control" id="tableNumber" name="tableNumber" value="<?php echo $booking['tableNumber']; ?>">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description"><?php echo $booking['description']; ?></textarea>
            </div>
            <button type="submit" name="edit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
