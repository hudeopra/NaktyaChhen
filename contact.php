<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Naktya Chhen</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php require('include/head-links.php')?>
    </head>
    <body>
        <?php require('include/header.php')?>
        <main class="ph-contact-page ph-innerpage">
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
                                <div class="ph-breadcrums">
                                    <div class="container">
                                        <ul class="ph-breadcrums__list justify-content-center">
                                            <li class="item">
                                                <a href="index.php" title="Go to Home Page">Home</a>
                                            </li>
                                            <li class="item mt_page">
                                                <strong>Contact</strong>
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
                                    <h2>Contact Us</h2>
                                    <h3>At and dinner, available every day.</h3>
                                </div>
                                <form method="POST" onsubmit="return validateContactForm()">
                                    <div class="ph-half">
                                        <div class="ph-input-wrapper">
                                            <input type="text" placeholder="Full Name" name="fullName" id="fullNameContact">
                                        </div>
                                        <div class="ph-input-wrapper">
                                            <input type="email" name="email" id="emailContact" placeholder="example@email.com">
                                        </div>
                                    </div>                                        
                                    <div class="ph-input-wrapper">
                                        <textarea placeholder="Describe yourself here..." name="message" id="messageContact"></textarea>
                                    </div>
                                    <div class="ph-input-wrapper">
                                        <input id="form-submit" class="ph-btn ph-btn__form" type="submit" value="submit" name="submit">
                                    </div>
                                </form>                                
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="ph-contact__details">
                                <div class="ph-contact__details--map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1452.7442746152371!2d85.33008070803658!3d27.712374738349133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb196de5da5741%3A0x652792640c70ede9!2sHerald%20College%20Kathmandu!5e0!3m2!1sen!2snp!4v1715344305139!5m2!1sen!2snp" width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                <div class="ph-contact__details--content">
                                    <h4>Address:</h4>
                                    <ul>
                                        <li>
                                            <a href="">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                Naxal, Kathmandu, Nepal
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ph-contact__details--content">
                                    <h4>Call Us:</h4>
                                    <ul>
                                        <li>
                                            <a href="">
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                                +977 9876-543210
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <i class="fa fa-fax" aria-hidden="true"></i>
                                                +977 9876-543210
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ph-contact__details--content">
                                    <h4>Email:</h4>
                                    <ul>
                                        <li>
                                            <a href="">
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                                example@email.com
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ph-contact__details--content">
                                    <h4>Social:</h4>                    
                                    <ul>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php
require('admin/include/db_config.php');
require('admin/include/essentials.php');

if (isset($_POST['submit'])) {
    $frm_data = filteration($_POST);
    if (empty($frm_data['fullName']) || empty($frm_data['email']) || empty($frm_data['message'])) {
        alert('error', 'Please fill out all the fields.');
    } else {
        $query = "INSERT INTO contact_form (full_name, email, message) VALUES (?,?,?)";
        $values = [$frm_data['fullName'], $frm_data['email'], $frm_data['message']];
        $res = insert($query, $values, "sss");

        if ($res == 1) {
            alert('success', 'Data sent');
        } else {
            alert('error', 'Error occurred! Try again.');
        }
    }
}
?>

            <?php require('include/newsletter.php')?>
        </main>
        <?php require('include/footer.php')?>
        <?php require('include/script.php')?>
        
        <script>
            function validateContactForm() {
                let fullName = document.getElementById('fullNameContact').value.trim();
                let email = document.getElementById('emailContact').value.trim();
                let message = document.getElementById('messageContact').value.trim();

                if (fullName === "" || email === "" || message === "") {
                    alert("Please fill out all required fields");
                    return false;
                }

                let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(email)) {
                    alert("Please enter a valid email address");
                    return false;
                }

                return true;
            }
        </script>
    </body>
</html>
