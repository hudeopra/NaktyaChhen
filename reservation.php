<?php

    require('include/db_config.php');
    require('include/essentials.php');
    adminLogin();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Naktya Chhen - Reservation</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php require('include/head-links.php')?>
    </head>
    <body>
        <?php require('include/header.php')?>
        <main class="ph-reservation-page ph-innerpage">
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
                                            <a href="index.php" title="Go to Home
                                                Page">
                                                Home </a>
                                        </li>
                                        <li class="item mt_page">
                                            <strong>Reservation</strong>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="ph-reservation ph-section__padding-lg--tb">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <div class="ph-reservation__form">
                                <div class="ph-section__title mb-5">
                                    <span class="ph-section__icon">
                                        <i class="fa fa-cutlery" aria-hidden="true"></i>
                                    </span>
                                    <h2>
                                        ALL DAY EXPERIENCE
                                    </h2>
                                    <h3>
                                        At and dinner, available every day.
                                    </h3>
                                </div>
                                <form method="POST" onsubmit="return validateReservationForm()">
                                    <div class="ph-input-wrapper">
                                        <input type="text" name="res_fname" id="res_fname" placeholder="John Doe" required>
                                    </div>
                                    <div class="ph-half">
                                        <div class="ph-input-wrapper">
                                            <input type="email" name="res_email" id="res_email" placeholder="example@email.com">
                                        </div> 
                                        <div class="ph-input-wrapper">
                                            <input type="phone" name="res_phone" id="res_phone" placeholder="+977 9876-543210">
                                        </div>                                        
                                    </div>
                                    <div class="ph-half">
                                        <div class="ph-input-wrapper">
                                            <input type="date" name="date" id="dateBooking">
                                        </div>
                                        <div class="ph-input-wrapper">
                                            <select class="nice-select" name="arrivalTime" id="arrivalTimeBooking" style="display: none;">
                                                <option data-display="Arrival Time">5PM</option>
                                                <option value="6PM">6PM</option>
                                                <option value="7PM">7PM</option>
                                                <option value="8PM">8PM</option>
                                            </select><div class="nice-select" tabindex="0"><span class="current">Arrival Time</span><ul class="list"><li data-value="5PM" data-display="Arrival Time" class="option selected">5PM</li><li data-value="6PM" class="option">6PM</li><li data-value="7PM" class="option">7PM</li><li data-value="8PM" class="option">8PM</li></ul></div>
                                        </div>
                                    </div>
                                    <div class="ph-half">
                                        <div class="ph-input-wrapper">
                                            <select class="nice-select" name="numberOfPeople" id="numberOfPeopleBooking" style="display: none;">
                                                <option value="1" data-display="No. of People">No. of People</option>
                                                <option value="1">1 Person</option>
                                                <option value="2">2 Person</option>
                                                <option value="3">3 Person</option>
                                                <option value="4">4 Person</option>
                                            </select><div class="nice-select" tabindex="0"><span class="current">No. of People</span><ul class="list"><li data-value="1" data-display="No. of People" class="option selected">1 Person</li><li data-value="2" class="option">2 Person</li><li data-value="3" class="option">3 Person</li><li data-value="4" class="option">4 Person</li></ul></div>
                                        </div>
                                        
                                        <div class="ph-input-wrapper">
                                            <select class="nice-select" name="tableNumber" id="tableNumberBooking" style="display: none;">
                                                <option value="Table 1" data-display="Table number">Table 1</option>
                                                <option value="Table 2">Table 2</option>
                                                <option value="Table 3">Table 3</option>
                                                <option value="Table 4">Table 4</option>
                                            </select><div class="nice-select" tabindex="0"><span class="current">Table number</span><ul class="list"><li data-value="Table 1" data-display="Table number" class="option selected">Table 1</li><li data-value="Table 2" class="option">Table 2</li><li data-value="Table 3" class="option">Table 3</li><li data-value="Table 4" class="option">Table 4</li></ul></div>
                                        </div>
                                    </div>
                                        
                                    <div class="ph-input-wrapper">
                                        <textarea placeholder="Additional notes..." name="notes" id="notesBooking"></textarea>
                                    </div>
                                    <div class="ph-input-wrapper">
                                        <input class="ph-btn ph-btn__form" type="submit" value="Submit" name="submit">
                                    </div>
                                </form>                                
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="ph-reservation__image">
                                <figure>
                                    <img src="assets/img/reservation-img.jpg" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="ph-component">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-xl-6 g-0">
                            <div class="ph-component__img">
                                <figure>
                                    <img src="assets/img/reservation-feature.jpg" alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6 g-0">
                            <div class="ph-component__content">
                                <div class="ph-section__title">
                                    <h2>
                                    Secure Your Culinary Journey experience
                                    </h2>
                                    <h3>
                                    Plan Your Perfect Dining Experience
                                    </h3>
                                </div>
                                <div class="ph-section__content">
                                    <p>
                                    Secure your spot for an exceptional dining experience at Naktya Chhen. With limited availability, reserving your table ensures a seamless and memorable culinary journey. Don't wait, book now and savor every moment with us.                                    </p>
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

                    // Check for empty fields
                    if (empty($frm_data['res_fname']) || empty($frm_data['res_email']) || empty($frm_data['res_phone']) || empty($frm_data['date']) || empty($frm_data['arrivalTime']) || empty($frm_data['numberOfPeople']) || empty($frm_data['tableNumber']) || empty($frm_data['notes'])) {
                        alert('error', 'Please fill out all the fields.');
                    } else {
                        // Check for existing reservation
                        $existing_reservation_query = "SELECT * FROM reservation WHERE date = ? AND arrival_time = ? AND table_number = ?";
                        $existing_reservation_values = [
                            $frm_data['date'],
                            $frm_data['arrivalTime'],
                            $frm_data['tableNumber']
                        ];
                        $existing_reservation_res = select($existing_reservation_query, $existing_reservation_values, "sss");

                        if ($existing_reservation_res && mysqli_num_rows($existing_reservation_res) > 0) {
                            alert("error", "The reservation is already booked. Please select another time and date.");
                        } else {
                            // Insert new reservation
                            $query = "INSERT INTO reservation (full_name, email, phone, date, arrival_time, number_of_people, table_number, notes) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
                            $values = [
                                $frm_data['res_fname'],
                                $frm_data['res_email'],
                                $frm_data['res_phone'],
                                $frm_data['date'],
                                $frm_data['arrivalTime'],
                                $frm_data['numberOfPeople'],
                                $frm_data['tableNumber'],
                                $frm_data['notes']
                            ];
                            $res = insert($query, $values, "ssssssss");

                            if ($res == 1) {
                                alert('success', 'Reservation successful! Your table has been booked.');
                            } else {
                                alert('error', 'Error occurred! Please try again.');
                            }
                        }
                    }
                }
                ?>

            <?php require('include/newsletter.php')?>
        </main>
        <?php require('include/footer.php')?>
        <?php require('include/script.php')?>

       
        <script>
            function validateReservationForm() {
                var resFname = document.getElementById('res_fname').value.trim();
                var resEmail = document.getElementById('res_email').value.trim();
                var resPhone = document.getElementById('res_phone').value.trim();
                var dateBooking = document.getElementById('dateBooking').value;
                var arrivalTimeBooking = document.getElementById('arrivalTimeBooking').value;
                var numberOfPeopleBooking = document.getElementById('numberOfPeopleBooking').value;
                var tableNumberBooking = document.getElementById('tableNumberBooking').value;
                var notesBooking = document.getElementById('notesBooking').value.trim();

                // Check if all fields are filled out
                if (resFname === '' || resEmail === '' || resPhone === '' || dateBooking === '' || arrivalTimeBooking === '' || numberOfPeopleBooking === '' || tableNumberBooking === '') {
                    alert('Please fill out all the fields.');
                    return false;
                }

                // Validate email format
                var emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
                if (!resEmail.match(emailPattern)) {
                    alert('Please enter a valid email address.');
                    return false;
                }

             // Validate phone number format
             var phoneRegex = /^\+?[0-9]{1,4}?[-.\s\(\)]{0,2}?\(?[0-9]{1,3}?\)?[-.\s]{0,2}?[0-9]{1,4}[-.\s]?[0-9]{6,9}$/;
             if (!resPhone.match(phoneRegex)) {
             alert('Please enter a valid phone number with at least 10 digits.');
             return false;
             }



                return true;
            }
        </script>
        
    </body>
</html>


<?php
