<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Naktya Chhen - Sign Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php require('include/head-links.php')?>
    </head>
    <body>
        <?php require('include/header.php')?>
        <main class="ph-login-page ph-innerpage">
            <section class="ph-banner">
                <div class="">
                    <div class="ph-banner__wrapper">
                        <div class="ph-banner__item">
                            <div class="ph-banner__item--img">
                                <img src="assets/img/banner.jpg" alt="">
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
                                            <a href="" title="Go to Home
                                                Page">
                                                Home </a>
                                        </li>
                                        <li class="item mt_page">
                                            <strong>Our Menu</strong>
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
                        <div class="col-6">
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
                                        <form id="signupForm" action="/login" method="POST">
                                            <div class="ph-input-wrapper">
                                                <input type="text" name="fullname" id="signupName" placeholder="John Doe">
                                            </div>
                                            <div class="ph-half">                                                
                                                <div class="ph-input-wrapper">
                                                    <input type="email" name="email" id="signupEmail" placeholder="example@gemail.com">
                                                </div>
                                                <div class="ph-input-wrapper">
                                                    <input type="number" name="phonenumber" id="signupPassword" placeholder="+977 987-6543210">
                                                </div>
                                            </div>
                                            <div class="ph-half">                                                
                                                <div class="ph-input-wrapper">
                                                    <input type="password" name="password" id="signupPasswordRe" placeholder="********">
                                                </div>
                                                <div class="ph-input-wrapper">
                                                    <input type="password" name="password" id="signupPassword" placeholder="********">
                                                </div>
                                            </div>
                                            <div class="ph-input-wrapper">
                                                <input class="ph-btn ph-btn__form" type="submit" value="Sign Up">
                                            </div>
                                        </form>
                                        <div class="ph-login__option">
                                            <ul>
                                                <li>
                                                    Already a User?
                                                    <a href="login.html">Login In</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>          
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="ph-contact__img">
                                <figure>
                                    <img src="assets/img/banner-2.jpg" alt="">
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
        <?php require('include/script.php')?>
    </body>
</html>
    
    