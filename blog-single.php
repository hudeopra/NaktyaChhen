
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
        <title>Naktya Chhen - Blog Single</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php require('include/head-links.php')?>
    </head>
    <body>
        <?php require('include/header.php')?>
        <main class="ph-blog-page ph-innerpage">
            <section class="ph-banner">
                <div class="">
                    <div class="ph-banner__wrapper">
                        <div class="ph-banner__item">
                            <div class="ph-banner__item--img">
                                <img src="assets/img/blog/blog_1.jpg" alt="">
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
                                            <a href="index.php" title="Go to HomePage">
                                                Home </a>
                                        </li>
                                        <li class="item">
                                            <a href="blog.php" title="Go to Blog Page">
                                                Blogs </a>
                                        </li>
                                        <li class="item mt_page">
                                            <strong>Blog Single</strong>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="ph-blog-single ph-section__padding-lg--tb">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <div class="ph-blog-single__banner">
                                <figure>
                                    <img src="assets/img/blog/blog_1.jpg" alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="ph-blog-single__head">
                                <h3>
                                    How to choose the best type of combi oven
                                </h3>
                                <p>
                                    Are you looking for a solid cloud-based point of sale system? Does your restaurant offer delivery, and do you need a way to manage it? If so, Sapaad may be right for you.
                                </p>                                
                                <ul class="ph-blog__tab--list">
                                    <li> 
                                        <b>chef</b> 
                                        <span>John doe </span>
                                    </li>
                                    <li> 
                                        <b>Category</b> 
                                        <span>Pasta </span>
                                    </li>
                                    <li> 
                                        <b>Adipisicing</b> 
                                        <span>500g </span>
                                    </li>
                                    <li> 
                                        <b>Tags</b> 
                                        <span>Food, Lifestyle, Vincemt</span>
                                    </li>
                                    <li> 
                                        <b>Date</b> 
                                        <span>February 28, 2024</span>
                                    </li>
                                    <li> 
                                        <b>Website</b> 
                                        <span>naktyachhen.com.np </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 mt-4">
                            <h4>
                            What are the benefits of combi ovens?
                            </h4>
                            <p>
                                Although a combi oven is a large investment, it’s worth the price when you consider the total cost of the equipment package. This versatile unit is a smart investment for the following reasons.    
                            </p>
                            <p>
                                Condense your Cook Line A combi oven can easily replace a steamer or convection oven. It can also be used to perform many of the same functions as a proofer or holding cabinet. Although the initial investment is higher than for any one piece of equipment, it is still cheaper than purchasing multiple pieces.
                            </p>
                            <p>
                                Although a combi oven is a large investment, it’s worth the price when you consider the total cost of your commercial restaurant equipment. This versatile unit is a smart investment for the following reasons.
                            </p>
                        </div>
                        <div class="col-12 col-sm-6 my-2">
                            <div class="ph-blog-single__gallery">
                                <figure>
                                    <img src="assets/img/blog/blog_2.jpg" alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6  my-2">
                            <div class="ph-blog-single__gallery">
                                <figure>
                                    <img src="assets/img/blog/blog_3.jpg" alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="col-12  mt-4">
                            <h4>
                            There are three types of cooking: Steam, convection, and combination
                            </h4>
                            <p>
                            Three cooking modes are available for commercial combi ovens to achieve all the functions: steam, convection, and a combination steam/convection.
                            </p>
                            <p>
                            Steam Mode This steamer mode uses steam heat to keep products moist during cooking. This is ideal for poaching and steaming vegetables and seafood.
                            </p>
                            <p>
                            Convection Mode combi oven Hot Air is forced around an oven cavity, just like in convection ovens. This creates a dry heat that browns food and removes moisture. This mode is great for baking, oven-frying, and roasting foods such as cookies, French fries, and pizza.
                            </p>
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
        <?php require('include/footer.php')?>
        <?php require('include/script.php')?>

    </body>
</html>