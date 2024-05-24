<?php
require_once('include/db_config.php');

// Check if the ID parameter is set in the URL
if (!isset($_GET['id'])) {
    // Redirecting back to admin_reservation.php if ID is not provided
    echo "<script>window.location.href = 'admin_reservation.php';</script>";
    exit();
}

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
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    
    $update_query = "UPDATE reservation SET date=?, arrival_time=?, number_of_people=?, table_number=?, notes=?, full_name=?, email=?, phone=? WHERE id=?";
    $stmt = mysqli_prepare($conn, $update_query);
    mysqli_stmt_bind_param($stmt, "ssiissssi", $date, $time, $people, $tableNumber, $description, $name, $email, $phone, $id);
    if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('Booking updated successfully');</script>";
        // Redirect back to admin_reservation.php after updating
        echo "<script>window.location.href = 'admin_reservation.php';</script>";
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
    <style>
        /* Add your custom CSS styles here */
        .container {
            margin-top: 50px;
        }
        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Edit Booking</h2>
        <form action="" method="POST">
            <!-- Form fields for editing booking data -->
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $booking['full_name']; ?>">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $booking['email']; ?>">
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $booking['phone']; ?>">
            </div>
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" class="form-control" id="date" name="date" value="<?php echo $booking['date']; ?>">
            </div>
            <div class="form-group">
                <label for="time">Time:</label>
                <input type="time" class="form-control" id="time" name="time" value="<?php echo $booking['arrival_time']; ?>">
            </div>
            <div class="form-group">
                <label for="people">People:</label>
                <input type="number" class="form-control" id="people" name="people" value="<?php echo $booking['number_of_people']; ?>">
            </div>
            <div class="form-group">
                <label for="tableNumber">Table Number:</label>
                <input type="number" class="form-control" id="tableNumber" name="tableNumber" value="<?php echo $booking['table_number']; ?>">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description"><?php echo $booking['notes']; ?></textarea>
            </div>
            <button type="submit" name="edit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>