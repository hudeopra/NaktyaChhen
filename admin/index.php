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
        <title>Naktya Chhen - Login Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php require('include/admin-head-links.php')?>
    </head>
    <body><header class="ph-header">
            <div class="ph-header__wrapper">
                <div class="ph-header__wrapper--head">   
                    <div class="ph-header__open">
                        <a class="ph-header__open--trigger" href="javascript:void(0)">
                            <i class="fa fa-angle-double-left" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="ph-header__logo">
                        <a href="index.php">
                            <img src="assets/img/NaktyaChhenLogoFull.svg" alt="Naktya Chhen Logo full">
                            <img src="assets/img/NaktyaChhenLogoHalf.svg" alt="Naktya Chhen Logo half">
                        </a>
                    </div>
                <nav class="ph-header__menu">
                    <ul>
                        <li>
                            <a href="../index.php">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                <span class="ph-menu-title">
                                    Home
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="../about.php">
                                <i class="fa fa-building" aria-hidden="true"></i>
                                <span class="ph-menu-title">
                                    About Us
                                </span>
                            </a>
                        </li>
                        <li class="ph-has-sub-menu">
                            <a  href="../menu.php" >
                                <i class="fa fa-book" aria-hidden="true"></i>
                                <span class="ph-menu-title">
                                    Menu
                                </span>
                            </a>
                            <ul class="ph-sub-menu">
                                <li>
                                    <a href="">
                                        menu1
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        menu1
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        menu1
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="../reservation.php">
                                <i class="fa fa-list" aria-hidden="true"></i>
                                <span class="ph-menu-title">
                                    Reservation
                                </span>
                            </a>
                        </li>
                            <a href="../blog.php">
                                <i class="fa fa-file-text" aria-hidden="true"></i>
                                <span class="ph-menu-title">
                                    Blogs
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="../contact.php">
                                <i class="fa fa-id-card" aria-hidden="true"></i>
                                <span class="ph-menu-title">
                                    Contact Us
                                </span>
                            </a>
                        </li>
                    </ul>
                </nav>
                </div>
                <div class="ph-wrapper">                    
                    <ul  class="ph-header__social">
                        <li>
                            <a href="https://www.facebook.com" target="_blank">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com" target="_blank">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.twitter.com" target="_blank">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.whatsapp.com" target="_blank">
                                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com" target="_blank">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="ph-header__book-now">
                        <a href="reservation.php" class="ph_header__book-now--btn ph-btn">
                            Book Now
                        </a>
                    </div>
                    <div  class="ph-header__user">
                        <div class="ph-header__user--trigger">
                            <a class="ph-user-trigger" href="index.php">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main class="ph-login-page ph-innerpage">
            <section class="ph-banner">
                <div class="">
                    <div class="ph-banner__wrapper">
                        <div class="ph-banner__item">
                            <div class="ph-banner__item--img">
                                <img src="../assets/img/banner.jpg" alt="">
                            </div>
                            <div class="ph-banner__item--content">
                                <div class="ph-banner__item--details">
                                    
                                <span class="ph-section__icon">
                                    <i class="fa fa-cutlery" aria-hidden="true"></i>
                                </span>
                                <h2>
                                    Taste Authentic Flavours
                                </h2>
                                <p>
                                    Serving food with harmony since 1991
                                </p>
                                </div>
                                <div class="ph-breadcrums"><div class="container">
                                    <ul class="ph-breadcrums__list justify-content-center">
                                        <li class="item">
                                            <a href="index.php" title="Go to Home Page">
                                                Home </a>
                                        </li>
                                        <li class="item mt_page">
                                            <strong>Login</strong>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="ph-contact ph-section__padding-lg--tb">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="ph-reservation__form">
                                <div class="ph-section__title mb-5">
                                    <span class="ph-section__icon">
                                        <i class="fa fa-cutlery" aria-hidden="true"></i>
                                    </span>
                                    <h2>
                                        Login 
                                    </h2>
                                    <h3>
                                        At and dinner, available every day.
                                    </h3>
                                </div>
                                <div class="ph-login">
                                    <h2>Login</h2>
                                    <div class="ph-form-wrapper">                     
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
                                        <div class="ph-login__option">
                                            <ul>
                                                <li>
                                                    <a href="">Forgot Password?</a>
                                                </li>
                                                <li>
                                                    <a href="signup.html">Sign Up</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>          
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="ph-contact__img">
                                <figure>
                                    <img src="../assets/img/banner-2.jpg" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer class="ph-footer ">
            <section class="ph-bottom-footer">
                <div class="ph-bottom-footer__wrapper text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <p>
                                    © Naktya Chhen, All
                                    rights
                                    reserved.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </footer>
        
        <!-- checking the data is being submitted -->
        <?php
            // Handle both admin and user login
            if (isset($_POST['login'])) {
                $frm_data = filteration($_POST);
                
                // Admin login
                $admin_query = "SELECT * FROM `admin_cred` WHERE `admin_name`=? AND `admin_pass`=?";
                $admin_value = [$frm_data['admin_name'], $frm_data['admin_pass']];
                $admin_res = select($admin_query, $admin_value, "ss");

                if (mysqli_num_rows($admin_res) > 0) {
                    $admin_row = mysqli_fetch_assoc($admin_res);
                    $_SESSION['adminLogin'] = true;
                    $_SESSION['adminId'] = $admin_row['sr_no'];
                    redirect('dashboard.php');
                }

                    // User login
                    $user_query = "SELECT * FROM `user` WHERE `email`=? AND `password`=?";
                    $user_value = [$frm_data['admin_name'], $frm_data['admin_pass']];
                    echo "User Query: $user_query\n"; // Echo the query for debugging purposes
                    $user_res = select($user_query, $user_value, "ss");


                if (mysqli_num_rows($user_res) > 0) {
                    $user_row = mysqli_fetch_assoc($user_res);
                    $_SESSION['adminLogin'] = true;
                    $_SESSION['userId'] = $user_row['sr_no'];
                    redirect('../index.php');
                }

                // If neither admin nor user login succeeds, display error message
                alert('error', 'Login Failed - Invalid Credentials');
            }

            ?>

        <?php require('../include/script.php')?>
    </body>
</html>
    
    