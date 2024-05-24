<?php
$servername = "localhost"; // Change this to your server name if different
$username = "root";        // Change this to your MySQL username
$password = "";            // Change this to your MySQL password
$dbname = "naktya_chhen";  // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to filter data

// Check if the function exists before declaring it
if (!function_exists('filteration')) {
    // Declare the filteration() function
    function filteration($data) {
        foreach ($data as $key => $value) {
            $data[$key] = trim($value);
            $data[$key] = stripslashes($data[$key]);
            $data[$key] = htmlspecialchars($data[$key]);
            $data[$key] = strip_tags($data[$key]);
        }
        return $data;
    }
}



// Function to execute a select query
function select($sql, $values, $datatypes) {
    global $conn; // Fetching the global $conn variable

    // Prepare the statement
    if ($stmt = mysqli_prepare($conn, $sql)) {
        // Bind parameters to the prepared statement
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values); // Spread operator
        
        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            $res = mysqli_stmt_get_result($stmt);
            return $res; // Return result set
        } else {
            // If execution fails, close statement and handle error
            mysqli_stmt_close($stmt);
            die("Query cannot be executed - Select");
        }
    } else {
        // If statement cannot be prepared, handle error
        die("Query cannot be prepared - Select");
    }
}

// Function to execute an insert query
function insert($sql, $values, $datatypes) {
    global $conn; // Fetching the global $conn variable

    // Prepare the statement
    if ($stmt = mysqli_prepare($conn, $sql)) {
        // Bind parameters to the prepared statement
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values); // Spread operator
        
        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res; // Return result set
        } else {
            // If execution fails, close statement and handle error
            mysqli_stmt_close($stmt);
            die("Query cannot be executed - Insert");
        }
    } else {
        // If statement cannot be prepared, handle error
        die("Query cannot be prepared - Insert");
    }
}

// Function to execute an update query
function update($sql, $values, $datatypes) {
    global $conn; // Fetching the global $conn variable

    // Prepare the statement
    if ($stmt = mysqli_prepare($conn, $sql)) {
        // Bind parameters to the prepared statement
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values); // Spread operator
        
        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res; // Return result set
        } else {
            // If execution fails, close statement and handle error
            mysqli_stmt_close($stmt);
            die("Query cannot be executed - Update");
        }
    } else {
        // If statement cannot be prepared, handle error
        die("Query cannot be prepared - Update");
    }
}
?>
