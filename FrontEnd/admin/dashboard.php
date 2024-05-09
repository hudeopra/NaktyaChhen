<?php

    require('include/db_config.php');
    require('include/essentials.php');
    adminLogin()
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin Panel - Dashboard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php 
        
            require('../include/head-links.php');
        ?>
    </head>
    <body>
        <header>
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between p-3 w-100">
                    
                <h3>Admin Panel</h3>
                <a href="logout.php" class="ph-btn mt-0">logout</a>
                </div>
            </div>
        </header>
        <?php require('../include/script.php')?>
    </body>
</html>