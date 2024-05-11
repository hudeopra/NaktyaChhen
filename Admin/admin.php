<?php
require('connection.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Login Panel</title>
    <link rel="stylesheet" href="../FrontEnd/assets/library/bootstrap/bootstrap.css" type="text/css" media="all">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../FrontEnd/assets/library/font-awesome/font-awesome.min.css" type="text/css" media="all">
    <style>
        div.login-from {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
        }
    </style>
</head>
<body class="bg-light">
<div class="login-from text-center rounded bg-white shadow overflow-none">
<form id="adminpanel" action="admin.php" method="POST">
        <h4 class="bg-dark text-white py-3">ADMIN LOGIN PANEL</h4>
        <div class="p-4">
            <input name="admin_name" required type="text" class="form-control shadow-none text-center" placeholder="Admin name">
        </div>
        <div class="p-4">
            <input name="admin_pass" required type="password" class="form-control shadow-none text-center" placeholder="Password">
        </div>
        <button name="login" type="submit" class="btn custom-bg text-black shadow-none">LOGIN</button>
    </form>
</div>

<?php
if (isset($_POST['login'])) {
    $frm_data = filteration($_POST);
    $query = "SELECT * FROM admin WHERE `email`=? AND `password`=?";
    
    $values = [$frm_data['admin_name'], $frm_data['admin_pass']];
    
    // Call the select() function to execute the query (assuming it's implemented)
    $res = select($query, $values, "ss");
    
    if (!$res) {
        echo "Error executing query: " . mysqli_error($conn) . "<br>";
    }
    
    // Handle the result as needed
    if ($res->num_rows == 1) {
        $row = mysqli_fetch_assoc($res);
        session_start();
        $_SESSION['adminlogin'] = true;
        $_SESSION['adminId'] = $row['sr_no'];
        echo "<script>window.location.href = 'dashboard.php';</script>"; // Corrected script syntax

    } else {
        echo <<<alert
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Login Failed!!!</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        alert;
    }
}
?>

?>


<script src="../FrontEnd/assets/library/bootstrap/bootstrap.min.js"></script>

</body>
</html>
