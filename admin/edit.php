<?php
require_once('include/db_config.php');
require_once('include/essentials.php');

// Determine the type of edit: reservation or user
$type = isset($_GET['type']) ? $_GET['type'] : 'reservation';
$id = isset($_GET['id']) ? $_GET['id'] : null;

if ($type === 'reservation') {
    // Fetch reservation data based on ID
    $query = "SELECT * FROM reservation WHERE id = ?";
} else {
    // Fetch user data based on ID
    $query = "SELECT * FROM user WHERE id = ?";
}

$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$data = mysqli_fetch_assoc($result);

if (!$data) {
    // Redirect based on type
    $redirect_url = $type === 'reservation' ? 'edit.php' : 'admin_user.php';
    echo "<script>window.location.href = '$redirect_url';</script>";
    exit();
}

// Handle form submission for editing
if (isset($_POST['edit'])) {
    if ($type === 'reservation') {
        // Process form data and update reservation
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
    } else {
        // Process form data and update user
        $fullName = $_POST['full_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'] ? password_hash($_POST['password'], PASSWORD_DEFAULT) : $data['password']; // Hash the password if provided, otherwise keep the current one

        $update_query = "UPDATE user SET full_name=?, email=?, phone=?, password=? WHERE id=?";
        $stmt = mysqli_prepare($conn, $update_query);
        mysqli_stmt_bind_param($stmt, "ssssi", $fullName, $email, $phone, $password, $id);
    }

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('Data updated successfully');</script>";
        // Redirect based on type
        $redirect_url = $type === 'reservation' ? 'admin_reservation.php' : 'admin_user.php';
        echo "<script>window.location.href = '$redirect_url';</script>";
        exit();
    } else {
        echo "<script>alert('Failed to update data');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit <?php echo ucfirst($type); ?></title>
    <link rel="stylesheet" href="../FrontEnd/assets/library/bootstrap/bootstrap.css" type="text/css" media="all">
</head>
<body>
    <div class="container">
        <h2>Edit <?php echo ucfirst($type); ?></h2>
        <form action="" method="POST">
            <?php if ($type === 'reservation'): ?>
                <!-- Form fields for editing reservation data -->
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
            <?php else: ?>
                <!-- Form fields for editing user data -->
                <div class="form-group">
                    <label for="full_name">Full Name:</label>
                    <input type="text" class="form-control" id="full_name" name="full_name" value="<?php echo htmlspecialchars($data['full_name']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($data['email']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="<?php echo htmlspecialchars($data['phone']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="New password (leave blank to keep current password)">
                </div>
            <?php endif; ?>
            <button type="submit" name="edit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
