<?php

    require('include/db_config.php');
    require('include/essentials.php');

    // Start the session to access session variables
    session_start();

    // Check if the session variable "adminLogin" is set and true
    if (isset($_SESSION["adminLogin"]) && $_SESSION["adminLogin"] === true) {
        redirect('dashboard.php');
    }

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin Pannel login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php 
        
            require('include/admin-head-links.php');
        ?>
    </head>
    <body >
        <section class="container ph-section__padding-lg--tb">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 mx-auto">
                    <div class="d-flex align-items-center flex-wrap">
                        <h2 class="mb-3">admin login pannel</h2>
                        <div class="ph-form-wrapper w-100 ">                                
                            <form id="loginAdminForm" action="" method="POST">
                                <div class="ph-input-wrapper">
                                    <input type="text" name="admin_name" id="loginUsername" placeholder="JohnDoe" required>
                                </div>
                                <div class="ph-input-wrapper">
                                    <input type="password" name="admin_pass" id="loginPassword" placeholder="********" required>
                                </div>
                                <div class="ph-input-wrapper">
                                    <input class="ph-btn ph-btn__form" name="login" type="submit" value="Login">
                                </div>
                            </form>
                        </div>  
                    </div>
            
                </div>
            </div>
        </section>
        
        <!-- checking the data is being submitted -->
        <?php
        
            if(isset($_POST['login']))
            {
                $frm_data = filteration($_POST);
                $query = "SELECT * FROM `admin_cred` WHERE `admin_name`=? AND `admin_pass`=?";
                $value = [$frm_data['admin_name'], $frm_data['admin_pass']];

                $res = select($query, $value,"ss" );

                // testing login
                // Check if a record is found
                if (mysqli_num_rows($res) > 0) {
                    // Handle further actions (e.g., session setup, redirect)
                    $row = mysqli_fetch_assoc($res);

                    $_SESSION['adminLogin'] = true;
                    $_SESSION['adminId'] = $row['sr_no'];
                    redirect('dashboard.php');
                } else {
                    // Login failed
                    alert('error', 'Login Failed - Invalid Credentials');
                }
            }
        ?>
        <?php require('../include/script.php')?>
    </body>
</html>