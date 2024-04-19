<?php

// error_reporting(E_ALL);
// ini_set('display_errors', 1);

$host = "localhost";
$user = "root"; // Replace with your MySQL username
$pass = ""; // Replace with your MySQL password
$dbname = "one_bite_food"; // Replace with your database name

// Connect to the MySQL database using mysqli
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die(json_encode(['error' => 'Database connection failed: ']));
}

// Do not close the connection here

// echo json_encode(['message' => 'Database connection successful']);

?>
