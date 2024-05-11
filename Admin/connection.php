<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'one_bite_food';

$conn = mysqli_connect($hostname, $username, $password, $dbname);

if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

function filteration($data){
    foreach($data as $key => $value){
        // Remove leading and trailing whitespace
        $data[$key] = trim($value);
        // Convert special characters to HTML entities
        $data[$key] = htmlspecialchars($data[$key]);
        // Strip HTML tags
        $data[$key] = strip_tags($data[$key]);
        // Optionally, you can add more sanitization methods here
    }
    return $data;
}


function select($sql, $values, $datatypes) {
    $con = $GLOBALS['conn']; // Corrected variable name
    if ($stmt = mysqli_prepare($con, $sql)) {
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
        if (mysqli_stmt_execute($stmt)) {
            $res = mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        } else {
            mysqli_stmt_close($stmt);
            die("Query cannot be executed - Select");
        }
    } else {
        die("Query preparation failed - Select");
    }
}
?>
