<!DOCTYPE html>
<html>
<head>
    <title>Show Signups</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .pagination {
            display: inline-block;
        }

        .pagination a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
            border: 1px solid #ddd;
            margin: 0 4px;
        }

        .pagination a.active {
            background-color: #f2f2f2;
        }

        .pagination a:hover:not(.active) {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <h2>Signup Information</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Password</th>
        </tr>
        <?php
        include 'connection.php'; // Include the database connection file

        // Number of results per page
        $results_per_page = 10;

        // Get current page number
        if (!isset($_GET['page']) || $_GET['page'] < 1) {
            $current_page = 1;
        } else {
            $current_page = $_GET['page'];
        }

        // Calculate the starting index for the current page
        $start_index = ($current_page - 1) * $results_per_page;

        // Query to fetch data for the current page
        $sql = "SELECT * FROM user LIMIT $start_index, $results_per_page";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output the data in a table format
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                <td>".$row['name']."</td>
                <td>".$row['email']."</td>
                <td>".$row['number']."</td>
                <td>".$row['password']."</td>
            </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No signups found</td></tr>";
        }

        // Display pagination links
        echo "<div class='pagination'>";
        if ($current_page > 1) {
            echo "<a href='fetch_signup.php?page=".($current_page - 1)."'>Previous</a>";
        }

        $total_rows_sql = "SELECT COUNT(*) AS total FROM user";
        $total_rows_result = $conn->query($total_rows_sql);
        $total_rows = $total_rows_result->fetch_assoc()['total'];

        // Calculate total number of pages
        $total_pages = ceil($total_rows / $results_per_page);

        if ($current_page < $total_pages) {
            echo "<a href='fetch_signup.php?page=".($current_page + 1)."'>Next</a>";
        }
        echo "</div>";

        // Close the database connection
        $conn->close();
        ?>
    </table>
</body>
</html>
