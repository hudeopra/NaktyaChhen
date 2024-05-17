<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Naktya Chhen - Sign Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require('include/head-links.php') ?>
</head>
<body>
    <?php require('include/header.php') ?>
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
                                <h2>Taste Authentic Flavours</h2>
                                <p>Serving food with harmony since 1991</p>
                            </div>
                            <div class="ph-breadcrums">
                                <div class="container">
                                    <ul class="ph-breadcrums__list justify-content-center">
                                        <li class="item">
                                            <a href="index.php" title="Go to Home Page">Home</a>
                                        </li>
                                        <li class="item mt_page">
                                            <strong>Sign Up</strong>
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
                                <h2>Login</h2>
                                <h3>At and dinner, available every day.</h3>
                            </div>
                            <div class="ph-login">
                                <h2>Login</h2>
                                <div class="ph-form-wrapper">
                                    <form id="signupForm" action="" method="POST" onsubmit="return validateForm()">
                                        <div class="ph-input-wrapper">
                                            <input type="text" name="fullname" id="signupName" placeholder="John Doe">
                                        </div>
                                        <div class="ph-half">
                                            <div class="ph-input-wrapper">
                                                <input type="email" name="email" id="signupEmail" placeholder="example@gmail.com">
                                            </div>
                                            <div class="ph-input-wrapper">
                                                <input type="text" name="phonenumber" id="signupPhoneNumber" placeholder="+977 987-6543210" autocomplete="tel">
                                            </div>

                                        </div>
                                        <div class="ph-half">
                                            <div class="ph-input-wrapper">
                                                <input type="password" name="password" id="signupPassword" placeholder="********" autocomplete="new-password">
                                            </div>
                                            <div class="ph-input-wrapper">
                                                <input type="password" name="confirm_password" id="signupPasswordRe" placeholder="********" autocomplete="new-password">
                                            </div>
                                        </div>

                                        <div class="ph-input-wrapper">
                                            <input class="ph-btn ph-btn__form" type="submit" name="submit" value="Sign Up">
                                        </div>
                                    </form>
                                    <div class="ph-login__option">
                                        <ul>
                                            <li>Already a User? <a href="login.html">Login In</a></li>
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
    <footer class="ph-footer">
        <section class="ph-bottom-footer">
            <div class="ph-bottom-footer__wrapper text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <p>© Naktya Chhen, All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script>
        // Function to display a message
        function showMessage(message, type) {
            let messageBox = document.createElement('div');
            messageBox.classList.add('alert');
            messageBox.classList.add('alert-' + type);
            messageBox.innerText = message;

            // Append message box to the body
            document.body.appendChild(messageBox);

            // Remove the message after 3 seconds
            setTimeout(function() {
                messageBox.remove();
            }, 3000);
        }

        // PHP code to check if the email already exists
        <?php
        require('admin/include/db_config.php');
        require('admin/include/essentials.php');

        if (isset($_POST['submit'])) {
            $frm_data = filteration($_POST);
            if (empty($frm_data['fullname']) || empty($frm_data['email']) || empty($frm_data['phonenumber']) || empty($frm_data['password'])) {
                showMessage('Please fill out all the fields.', 'error');
            } else {
                $checkUser = "SELECT * FROM user WHERE email = ?";
                $stmt = $conn->prepare($checkUser);
                $stmt->bind_param("s", $frm_data['email']);
                $stmt->execute();
                $result = $stmt->get_result();
                $count = $result->num_rows;
                $stmt->close();
                
                if ($count > 0) {
                    // User already exists, show error message
                    showMessage('User already signed up. Please log in instead.', 'error');
                } else {
                    // User doesn't exist, proceed with signup
                    $password_hashed = password_hash($frm_data['password'], PASSWORD_BCRYPT);
                    $query = "INSERT INTO user (name, email, number, password) VALUES (?, ?, ?, ?)";
                    $values = [$frm_data['fullname'], $frm_data['email'], $frm_data['phonenumber'], $password_hashed];
                    $res = insert($query, $values, "ssss");

                    if ($res == 1) {
                        showMessage('Signup successful.', 'success');
                    } else {
                        showMessage('Error occurred! Please try again.', 'error');
                    }
                }
            }
        }
        ?>
</script>

    </footer>
    <?php require('include/script.php') ?>

    <script>
        function validateForm() {
            let name = document.getElementById('signupName').value.trim();
            let email = document.getElementById('signupEmail').value.trim();
            let number = document.getElementById('signupPhoneNumber').value.trim();
            let password = document.getElementById('signupPassword').value.trim();
            let confirmPassword = document.getElementById('signupPasswordRe').value.trim();

            if (name === "" || email === "" || number === "" || password === "" || confirmPassword === "") {
                alert("Please fill out all required fields");
                return false;
            }

            let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert("Please enter a valid email address");
                return false;
            }

            let passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}$/;
            if (!passwordRegex.test(password)) {
                alert("Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one number, and one special character");
                return false;
            }

            if (password !== confirmPassword) {
                alert("Passwords do not match");
                return false;
            }

            let phoneRegex = /^\d{10}$/;
            if (!phoneRegex.test(number)) {
                alert("Phone number must be 10 digits long");
                return false;
            }

            return true;
        }
    </script>
</body>
</html>
