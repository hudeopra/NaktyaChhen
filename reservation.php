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
                                <form id="bookingForm" action="/booking-submit" method="POST">
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
                                                <option value="1" data-display="No. of People">1 Person</option>
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
                                        <input class="ph-btn ph-btn__form" type="submit" value="Submit">
                                    </div>
                                </form>                                
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
                                    <img src="assets/img/banner-2.jpg" alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6 g-0">
                            <div class="ph-component__content">
                                <div class="ph-section__title">
                                    <span class="ph-section__icon">
                                        <i class="fa fa-cutlery" aria-hidden="true"></i>
                                    </span>
                                    <h2>
                                        ALL DAY EXPERIENCE
                                    </h2>
                                    <h3>
                                        At Naktya Chhen we offer a varied menu of appetisers, lunches and dinner, available every day.
                                    </h3>
                                </div>
                                <div class="ph-section__content">
                                    <p>
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore vel aspernatur dicta odio optio, odit impedit laborum ratione quisquam expedita enim debitis similique asperiores soluta autem itaque dolore? Alias ipsam id quos eveniet adipisci. Aperiam accusantium dignissimos exercitationem ullam. A nostrum quod mollitia soluta amet, fuga tempora repellat quisquam repellendus?
                                    </p>
                                    <div class="ph-btn-wrapper">
                                        <a href="" class="ph-btn">button</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="ph-frame ph-section__padding-lg--tb text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        
                        <div class="col-6 ph-section__padding-lg--b">
                            <div class="ph-section__title">
                                <span class="ph-section__icon">
                                    <i class="fa fa-cutlery" aria-hidden="true"></i>
                                </span>
                                <h2>
                                    ALL DAY EXPERIENCE
                                </h2>
                                <h3>
                                    At Naktya Chhen we offer a varied menu of appetisers, lunches and dinner, available every day.
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="ph-frame__item">
                                <div class="ph-frame__item--img">
                                    <figure>
                                        <img src="assets/img/banner.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="ph-frame__item--content">
                                    <h3>
                                        Lorem ipsum dolor
                                    </h3>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="ph-frame__item">
                                <div class="ph-frame__item--img">
                                    <figure>
                                        <img src="assets/img/banner.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="ph-frame__item--content">
                                    <h3>
                                        Lorem ipsum dolor
                                    </h3>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="ph-frame__item">
                                <div class="ph-frame__item--img">
                                    <figure>
                                        <img src="assets/img/banner.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="ph-frame__item--content">
                                    <h3>
                                        Lorem ipsum dolor
                                    </h3>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="ph-frame__item">
                                <div class="ph-frame__item--img">
                                    <figure>
                                        <img src="assets/img/banner.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="ph-frame__item--content">
                                    <h3>
                                        Lorem ipsum dolor
                                    </h3>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="ph-newsletter ph-section__padding-sm--tb">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="ph-newsletter__content">
                                <h2>Lorem ipsum dolor, sit amet.</h2>
                                <p>Lorem ipsum dolor sit amet. Voluptas dolorum  inventore quae qui? Optio.</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="ph-newsletter__form ph-input-wrapper">
                                <form id="newsletterForm" action="newsletter.php" method="POST">
                                    <input type="email" placeholder="example@email.com" name="email" id="newsletterEmail">
                                    <input class="ph-btn ph-btn__form" type="submit" value="Submit">
                                </form>
                            </div>                            
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php require('include/header.php')?>
        <?php require('include/footer.php')?>
        <?php require('include/script.php')?>
    </body>
</html>