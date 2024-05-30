<?php
require_once('include/db_config.php');
require_once('include/essentials.php');

session_start();
if (!isset($_SESSION['adminLogin']) || $_SESSION['adminLogin'] !== true) {
    redirect('index.php');
}

$id = isset($_GET['id']) ? $_GET['id'] : null;

// Fetch user data based on ID
$query = "SELECT * FROM user WHERE id = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$data = mysqli_fetch_assoc($result);

if (!$data) {
    echo "<script>window.location.href = 'admin_user.php';</script>";
    exit();
}

// Handle form submission for editing
if (isset($_POST['edit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = isset($_POST['password']) ? $_POST['password'] : $data['password']; // Use the provided password, otherwise keep the current one

    $update_query = "UPDATE user SET name=?, email=?, number=?, password=? WHERE id=?";
    $stmt = mysqli_prepare($conn, $update_query);
    mysqli_stmt_bind_param($stmt, "ssssi", $name, $email, $number, $password, $id);

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('User updated successfully');</script>";
        echo "<script>window.location.href = 'admin_user.php';</script>";
        exit();
    } else {
        echo "<script>alert('Failed to update user: " . mysqli_stmt_error($stmt) . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="../FrontEnd/assets/library/bootstrap/bootstrap.css" type="text/css" media="all">
</head>
<body>
    <div class="container">
        <h2>Edit User</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($data['name']); ?>">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($data['email']); ?>">
            </div>
            <div class="form-group">
                <label for="number">Phone:</label>
                <input type="text" class="form-control" id="number" name="number" value="<?php echo htmlspecialchars($data['number']); ?>">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="New password (leave blank to keep current password)">
            </div>
            <button type="submit" name="edit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
