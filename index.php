<?php

    require('include/db_config.php');
    require('include/essentials.php');
    adminLogin();
?>

<!DOCTYPE html><html><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Naktya Chhen</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <?php require('include/head-links.php')?>
    
</head>
<body>
    <?php require('include/header.php')?>
    <main class="ph-homepage">
        <section class="ph-banner">
            <div class="ph-banner__wrapper ph-banner__slider">
                <div class="ph-banner__item">
                    <div class="ph-banner__item--img">
                        <img src="assets/img/banner.jpg" alt="">
                    </div>
                    <div class="ph-banner__item--content">
                        <h2>
                            Taste Authentic Flavours
                        </h2>
                        <p>
                            Serving food with harmony since 1991
                        </p>
                        <a href="about.php" class="ph-btn" tabindex="0">
                            Visit Now
                        </a>
                    </div>
                </div>
                <div class="ph-banner__item">
                    <div class="ph-banner__item--img">
                        <img src="assets/img/banner-2.jpg" alt="">
                    </div>
                    <div class="ph-banner__item--content">
                        <h2>
                        Indulge in exquisite cuisine
                        </h2>
                        <p>
                        Your culinary journey begins here.
                        </p>
                        <a href="about.php" class="ph-btn" tabindex="0">
                            Visit Now
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="ph-about">
            <div class="ph-center ph-section__padding-lg--tb">
                <div class="ph-about__wrapper">
                    <div class="container">
                        <div class="row text-center">
                            <div class="col-10 mx-auto text-center">
                                <div class="ph-section__title ph-section__padding-sm--b">
                                    <span class="ph-section__icon">
                                        <i class="fa fa-cutlery" aria-hidden="true"></i>
                                    </span>
                                    <h2>
                                    Welcome to Naktya Chhen
                                    </h2>
                                    <p>
                                    Indulge in exquisite cuisine, warm hospitality, and an inviting ambiance. Your culinary journey begins here.                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-xl-4">
                                <div class="ph-about__content">
                                    <figure>
                                        <img src="assets/img/home-about-1.jpg" alt="">
                                    </figure>
                                    <p>
                                    Experience personalized service with every dish. Our servers ensure your dining journey is memorable.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-xl-4">
                                <div class="ph-about__content">
                                    <figure>
                                        <img src="assets/img/home-about-2.jpg" alt="">
                                    </figure>
                                    <p>
                                    Savor exquisite flavors crafted with passion and expertise. Discover culinary delights that tantalize your taste buds.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-xl-4">
                                <div class="ph-about__content">
                                    <figure>
                                        <img src="assets/img/home-about-3.jpg" alt="">
                                    </figure>
                                    <p>
                                    Step into a welcoming ambiance that blends comfort and elegance. Our restaurant interior creates the perfect setting for your dining experience.
                                    </p>
                                </div>
                            </div>
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
                                <img src="assets/img/home-feature-1.png" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6 g-0">
                        <div class="ph-component__content">
                            <div class="ph-section__title">
                                <h2>
                                Michelin Lunch, Dinner Or Both?
                                </h2>
                                <h3>
                                    At Naktya Chhen we offer a varied menu of appetisers, lunches and dinner, available every day.
                                </h3>
                            </div>
                            <div class="ph-section__content">
                                <p>
                                It’s the story of an everlasting love affair, Dieter Delicioz and the Atlantic Ocean. Our proximity to the abundant riches of the sea and Portugal’s excellent produce has provided a constant source of inspiration for Chef L'delicio, ever since he set foot in our kitchen 30 years ago.                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-xl-6 g-0">
                        <div class="ph-component__img">
                            <figure>
                                <img src="assets/img/home-feature-2.png" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6 g-0">
                        <div class="ph-component__content">
                            <div class="ph-section__title">
                                <h2>
                                    Chef Dieter Delicious
                                </h2>
                                <h3>
                                30 YEARS OF inspiration</h3>
                            </div>
                            <div class="ph-section__content">
                                <p>
                                    Everyday Chef Delicioz sets himself the challenge to start from scratch – his tools: ingenuity, curiosity, enthusiasm, unparalleled talent and the highest craftsmanship.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ph-menu-tab ph-section__padding-lg--tb">
            <div class="container">
                <div class="row">
                    <div class="col-10 m-auto text-center">
                        <div class="ph-section__title ph-section__padding-sm--b">
                            <span class="ph-section__icon">
                                <i class="fa fa-cutlery" aria-hidden="true"></i>
                            </span>
                            <h2>
                                Discover Culinary Bliss at Naktya Chhen
                            </h2>
                            <p>
                                Embark on a flavor-packed adventure with our menu, bursting with exquisite dishes crafted from the freshest ingredients where every bite is a journey of culinary delight.
                            </p>
                        </div>
                    </div>
                </div>
                <?php require('include/menu-tab.php') ?>
            </div>
        </section>
        <section class="ph-blog ph-section__padding-lg--b">
            <div class="container">
                <div class="row">
                    <div class="col-12">                        
                        <div class="ph-blog__wrapper ph-blog__slider">
                            <div class="ph-blog__item">
                                <figure class="ph-blog__item--content">
                                    <img src="assets/img/blog/blog_1.jpg" alt="">
                                </figure>
                                <div class="ph-blog__item--details">
                                    <a href="">
                                        <h3>
                                            Lorem, ipsum dolor
                                        </h3>
                                        <p>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum, consequuntur.
                                        </p>
                                    </a>
                                </div>
                            </div>
                            <div class="ph-blog__item">
                                <figure class="ph-blog__item--content">
                                    <img src="assets/img/blog/blog_2.jpg" alt="">
                                </figure>
                                <div class="ph-blog__item--details">
                                    <a href="">
                                        <h3>
                                            Lorem, ipsum dolor
                                        </h3>
                                        <p>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum, consequuntur.
                                        </p>
                                    </a>
                                </div>
                            </div>
                            <div class="ph-blog__item">
                                <figure class="ph-blog__item--content">
                                    <img src="assets/img/blog/blog_6.jpg" alt="">
                                </figure>
                                <div class="ph-blog__item--details">
                                    <a href="">
                                        <h3>
                                            Lorem, ipsum dolor
                                        </h3>
                                        <p>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum, consequuntur.
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div> 
                    </div>     
                </div>
            </div>
        </section>
        <?php require('include/newsletter.php')?>
    </main>
    
    <?php require('include/footer.php')?>
    <?php require('include/script.php')?>

    </body>
</html>