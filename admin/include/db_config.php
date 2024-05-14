<?php
    // Defining variables
    $hname = 'localhost';
    $uname = 'root';
    $pass = '';
    $db = 'naktya_chhen';

    // Establishing a database connection
    $con = mysqli_connect($hname, $uname, $pass, $db);

    // Check if the connection was successful
    if (!$con) {
        die("Cannot connect to database: " . mysqli_connect_error());
    }

    // Function to filter data
    function filteration($data) {
        foreach ($data as $key => $value) {
            $data[$key] = trim($value);
            $data[$key] = stripslashes($data[$key]);
            $data[$key] = htmlspecialchars($data[$key]);
            $data[$key] = strip_tags($data[$key]);
        }
        return $data;
    }

    // Function to execute a select query
    function select($sql, $values, $datatypes) {
        global $con; // Fetching the global $con variable

        // Prepare the statement
        if ($stmt = mysqli_prepare($con, $sql)) {
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



    
function insert($sql, $values, $datatypes) {
    global $con; // Fetching the global $con variable

    // Prepare the statement
    if ($stmt = mysqli_prepare($con, $sql)) {
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




    
    // Function to execute a update query
    function update($sql, $values, $datatypes) {
        global $con; // Fetching the global $con variable

        // Prepare the statement
        if ($stmt = mysqli_prepare($con, $sql)) {
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
