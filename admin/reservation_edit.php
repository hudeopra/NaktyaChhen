<?php
require_once('include/db_config.php');
require_once('include/essentials.php');

session_start();
if (!isset($_SESSION['adminLogin']) || $_SESSION['adminLogin'] !== true) {
    redirect('index.php');
}

$id = isset($_GET['id']) ? $_GET['id'] : null;

// Fetch reservation data based on ID
$query = "SELECT * FROM reservation WHERE id = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$data = mysqli_fetch_assoc($result);

if (!$data) {
    echo "<script>window.location.href = 'admin_reservation.php';</script>";
    exit();
}

// Handle form submission for editing
if (isset($_POST['edit'])) {
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
        echo "<script>alert('Reservation updated successfully');</script>";
        echo "<script>window.location.href = 'admin_reservation.php';</script>";
        exit();
    } else {
        echo "<script>alert('Failed to update reservation: " . mysqli_stmt_error($stmt) . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Reservation</title>
    <link rel="stylesheet" href="../FrontEnd/assets/library/bootstrap/bootstrap.css" type="text/css" media="all">
</head>
<body>
    <div class="container">
        <h2>Edit Reservation</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($data['full_name']); ?>">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($data['email']); ?>">
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" class="form-control" id="phone" name="phone" value="<?php echo htmlspecialchars($data['phone']); ?>">
            </div>
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" class="form-control" id="date" name="date" value="<?php echo htmlspecialchars($data['date']); ?>">
            </div>
            <div class="form-group">
                <label for="time">Time:</label>
                <input type="time" class="form-control" id="time" name="time" value="<?php echo htmlspecialchars($data['arrival_time']); ?>">
            </div>
            <div class="form-group">
                <label for="people">People:</label>
                <input type="number" class="form-control" id="people" name="people" value="<?php echo htmlspecialchars($data['number_of_people']); ?>">
            </div>
            <div class="form-group">
                <label for="tableNumber">Table Number:</label>
                <input type="number" class="form-control" id="tableNumber" name="tableNumber" value="<?php echo htmlspecialchars($data['table_number']); ?>">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description"><?php echo htmlspecialchars($data['notes']); ?></textarea>
            </div>
            <button type="submit" name="edit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
