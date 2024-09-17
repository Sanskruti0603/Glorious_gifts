<?php
session_start();
include './connection.php';
?>
<!doctype html>
<html lang="en">



<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Dec 2022 10:06:45 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Required meta tags -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Glorious Gifts</title>
    <!-- google fonts -->
    <link href="http://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&amp;display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-liberty.css">


</head>

<body>

    <script src="../../../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
    <script>
        (function() {
            if (typeof _bsa !== 'undefined' && _bsa) {
                // format, zoneKey, segment:value, options
                _bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
            }
        })();
    </script>
    <script>
        (function() {
            if (typeof _bsa !== 'undefined' && _bsa) {
                // format, zoneKey, segment:value, options
                _bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
            }
        })();
    </script>
    <script>
        (function() {
            if (typeof _bsa !== 'undefined' && _bsa) {
                // format, zoneKey, segment:value, options
                _bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
            }
        })();
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src='https://www.googletagmanager.com/gtag/js?id=G-98H8KRKT85'></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-98H8KRKT85');
    </script>

    <meta name="robots" content="noindex">

    <body>
    <div id = "preloader"></div>


        <link rel="stylesheet" href="../../../../../../assests/css/font-awesome.min.css">
        <!-- New toolbar-->
        <style>
            * {
                box-sizing: border-box;
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
            }

            #preloader{
            background:white url(GG.gif) no-repeat center center;
            background-size: 35%;
            height: 100vh;
            width: 100%;        
            position: fixed;
            z-index: 100;
            }

            #w3lDemoBar.w3l-demo-bar {
                top: 0;
                right: 0;
                bottom: 0;
                z-index: 9999;
                padding: 40px 5px;
                padding-top: 70px;
                margin-bottom: 70px;
                background: #0D1326;
                border-top-left-radius: 9px;
                border-bottom-left-radius: 9px;
            }

            #w3lDemoBar.w3l-demo-bar a {
                display: block;
                color: #e6ebff;
                text-decoration: none;
                line-height: 24px;
                opacity: .6;
                margin-bottom: 20px;
                text-align: center;
            }

            #w3lDemoBar.w3l-demo-bar span.w3l-icon {
                display: block;
            }

            #w3lDemoBar.w3l-demo-bar a:hover {
                opacity: 1;
            }

            #w3lDemoBar.w3l-demo-bar .w3l-icon svg {
                color: #e6ebff;
            }

            #w3lDemoBar.w3l-demo-bar .responsive-icons {
                margin-top: 30px;
                border-top: 1px solid #41414d;
                padding-top: 40px;
            }

            #w3lDemoBar.w3l-demo-bar .demo-btns {
                border-top: 1px solid #41414d;
                padding-top: 30px;
            }

            #w3lDemoBar.w3l-demo-bar .responsive-icons a span.fa {
                font-size: 26px;
            }

            #w3lDemoBar.w3l-demo-bar .no-margin-bottom {
                margin-bottom: 0;
            }

            .toggle-right-sidebar span {
                background: #0D1326;
                width: 50px;
                height: 50px;
                line-height: 50px;
                text-align: center;
                color: #e6ebff;
                border-radius: 50px;
                font-size: 26px;
                cursor: pointer;
                opacity: .5;
            }

            .pull-right {
                float: right;
                position: fixed;
                right: 0px;
                top: 70px;
                width: 90px;
                z-index: 99999;
                text-align: center;
            }

            /* ============================================================
RIGHT SIDEBAR SECTION
============================================================ */

            #right-sidebar {
                width: 90px;
                position: fixed;
                height: 100%;
                z-index: 1000;
                right: 0px;
                top: 0;
                margin-top: 60px;
                -webkit-transition: all .5s ease-in-out;
                -moz-transition: all .5s ease-in-out;
                -o-transition: all .5s ease-in-out;
                transition: all .5s ease-in-out;
                overflow-y: auto;
            }


            /* ============================================================
RIGHT SIDEBAR TOGGLE SECTION
============================================================ */

            .hide-right-bar-notifications {
                margin-right: -300px !important;
                -webkit-transition: all .3s ease-in-out;
                -moz-transition: all .3s ease-in-out;
                -o-transition: all .3s ease-in-out;
                transition: all .3s ease-in-out;
            }



            @media (max-width: 992px) {
                #w3lDemoBar.w3l-demo-bar a.desktop-mode {
                    display: none;

                }
            }

            @media (max-width: 767px) {
                #w3lDemoBar.w3l-demo-bar a.tablet-mode {
                    display: none;

                }
            }

            @media (max-width: 568px) {
                #w3lDemoBar.w3l-demo-bar a.mobile-mode {
                    display: none;
                }

                #w3lDemoBar.w3l-demo-bar .responsive-icons {
                    margin-top: 0px;
                    border-top: none;
                    padding-top: 0px;
                }

                #right-sidebar,
                .pull-right {
                    width: 90px;
                }

                #w3lDemoBar.w3l-demo-bar .no-margin-bottom-mobile {
                    margin-bottom: 0;
                }
            }
        </style>




        <!--/Header-->
        <?php
        include "./header.php";
        ?>
        <!--//Header-->

        <section class="w3mid-gap"></section>
        <!--/Banner-Start-->
        <!--/main-slider -->
        <section class="w3l-main-slider banner-slider position-relative" id="home">
            <div class="owl-one owl-carousel owl-theme">
                <div class="item">
                    <div class="slider-info banner-view banner-top1">
                        <div class="container">
                            <div class="banner-info header-hero-19">
                                <!-- <h5>Up To 60% Off Now</h5> -->
                                <h3 class="title-hero-19">Your Gift Their Smile!</h3>
                                <p>Experience Biss Instantly with fastest Delevery</p>
                                <a href="shop.php" class="btn btn-style btn-primary mt-sm-5 mt-4">Start Shopping <i class="fas fa-arrow-right ms-lg-3 ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="slider-info banner-view banner-top2">
                        <div class="container">
                            <div class="banner-info header-hero-19">
                                <!-- <h5>Fall Summer Clearance</h5> -->
                                <h3 class="title-hero-19">Gifts that Spark Smiles!</h3>
                                <p>Thoughtful Gifts To Celebrate Togetherness</p>
                                <a href="shop.php" class="btn btn-style btn-primary mt-sm-5 mt-4">Start Shopping <i class="fas fa-arrow-right ms-lg-3 ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slider-info banner-view banner-top3">
                        <div class="container">
                            <div class="banner-info header-hero-19">
                                <!-- <h5>Up To 60% Off Now</h5> -->
                                <h3 class="title-hero-19">Your Gift Their Smile!</h3>
                                <p>Experience Biss Instantly with fastest Delevery</p>
                                <a href="shop.php" class="btn btn-style btn-primary mt-sm-5 mt-4">Start Shopping <i class="fas fa-arrow-right ms-lg-3 ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slider-info banner-view banner-top4">
                        <div class="container">
                            <div class="banner-info header-hero-19">
                                <!-- <h5>Fall Summer Clearance</h5> -->
                                <h3 class="title-hero-19">Gifts that Spark Smiles!</h3>
                                <p>Thoughtful Gifts To Celebrate Togetherness</p>
                                <a href="shop.php" class="btn btn-style btn-primary mt-sm-5 mt-4">Start Shopping <i class="fas fa-arrow-right ms-lg-3 ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //main-slider -->
        <!-- /Free-Ship-->
        <section class="w3free-ship text-center py-md-5 py-4">
            <h2 style="text-align: center; color: #3E362E;font-size:32px">
                <marquee scrollamount="21" direction="right">Faster Delivery For You <i class="fas fa-shipping-fast ms-lg-3"></i></marquee>
            </h2>
        </section>
        <!--//Free-Ship-->
        <!--/bottom-3-grids-->
        <div class=" w3l-3-grids py-5" id="grids-3">
            <div class="container py-md-4">
                <div class="row">
                    <div class="col-md-6 mt-md-0">
                        <div class="grids3-info position-relative">
                            <a href="shop.php" class="d-block zoom"><img src="uploads/b3.jpg" style="height:274px;width:100%" alt="" class="img-fluid news-image"></a>
                            <div class="w3-grids3-info second">
                                <h4 class="gdnhy-1"><a href="shop.php">Your Gift Their <br>Smile!</a>
                                    <a class="w3item-link btn btn-style mt-4" href="shop.php">
                                        Shop Now <i class="fas fa-arrow-right ms-2"></i>
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-md-0 mt-4 grids3-info2">
                        <div class="grids3-info second position-relative">
                            <a href="shop.php" class="d-block zoom"><img src="uploads/banner1.jpg" alt="" class="img-fluid news-image"></a>
                            <div class="w3-grids3-info second">
                                <h4 class="gdnhy-1"><a href="shop.php">Gifts that Spark<br>Smiles!</a>
                                    <a class="w3item-link btn btn-style mt-4" href="shop.php">
                                        Shop Now <i class="fas fa-arrow-right ms-2"></i>
                                    </a>
                                </h4>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--//bottom-3-grids-->
        <section class="w3l-witemshny-main py-5">
            <div class="container py-md-4">
                <h3 class="title-w3l">Deals Of The Day</h3>
                <!--/row-1-->
                <div class="witemshny-grids row mt-lg-3">
                    <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                        <div class="weitemshny-grid oposition-relative">
                            <a href="shop.php?category_id=1&category_name=Cakes" class="d-block zoom"><img src="uploads/cake index.webp" alt="" class="img-fluid news-image"></a>
                            <div class="witemshny-inf">
                            </div>
                        </div>
                        <h4 class="gdnhy-1 mt-4"><a href="shop.php?category_id=1&category_name=Cakes">Dreamy cakes for every occasion</a>
                        </h4>
                    </div>
                    <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                        <div class="weitemshny-grid oposition-relative">
                            <a href="shop.php?category_id=2&category_name=Flowers" class="d-block zoom"><img src="uploads/flower index.webp" alt="" class="img-fluid news-image"></a>
                            <div class="witemshny-inf">
                            </div>
                        </div>
                        <h4 class="gdnhy-1 mt-4"><a href="shop.php?category_id=2&category_name=Flowers">Flowers
                                Petals of Happiness</a>
                        </h4>
                    </div>
                    <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                        <div class="weitemshny-grid oposition-relative">
                            <a href="shop.php?category_id=3&category_name=Chocolates" class="d-block zoom"><img src="uploads/chocolate index.webp" alt="" class="img-fluid news-image"></a>
                            <div class="witemshny-inf">
                            </div>
                        </div>
                        <h4 class="gdnhy-1 mt-4"><a href="shop.php?category_id=3&category_name=Chocolates">Chocolates
                                Sweet Temptations
                            </a>
                        </h4>
                    </div>
                    <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                        <div class="weitemshny-grid oposition-relative">
                            <a href="shop.php?category_id=8&category_name=Fashion and Lifestyle" class="d-block zoom"><img src="uploads/clo3.webp" alt="" class="img-fluid news-image"></a>
                            <div class="witemshny-inf">
                            </div>
                        </div>
                        <h4 class="gdnhy-1 mt-4"><a href="shop.php?category_id=8&category_name=Fashion and Lifestyle">Women Stylish Apparel</a>
                        </h4>
                    </div>
                    <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                        <div class="weitemshny-grid oposition-relative">
                            <a href="shop.php?category_id=9&category_name=Jewellery" class="d-block zoom"><img src="uploads/j7.webp" alt="" class="img-fluid news-image"></a>
                            <div class="witemshny-inf">
                            </div>
                        </div>
                        <h4 class="gdnhy-1 mt-4"><a href="shop.php?category_id=9&category_name=Jewellery">Accessories for everyday wearing</a>
                        </h4>
                    </div>
                    <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                        <div class="weitemshny-grid oposition-relative">
                            <a href="shop.php?category_id=5&category_name=Plants" class="d-block zoom"><img src="uploads/pl9.webp" alt="" class="img-fluid news-image"></a>
                            <div class="witemshny-inf">
                            </div>
                        </div>
                        <h4 class="gdnhy-1 mt-4"><a href="shop.php?category_id=5&category_name=Plants">Plants
                                Add greens to your living space</a>
                        </h4>
                    </div>
                </div>
                <!--//row-1-->

                <!--/row2-->

                <!--//row-2-->
                <!-- <h3 class="title-w3l mt-5 pt-lg-4"></h3> --><br>
                <!--/row2-->
                <div class="witemshny-grids row mt-lg-3">
                    <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                        <div class="weitemshny-grid oposition-relative">
                            <a href="shop.php?category_id=10&category_name=Gourment" class="d-block zoom"><img src="uploads/g11.jpg" alt="" class="img-fluid news-image"></a>
                            <div class="witemshny-inf">
                            </div>
                        </div>
                        <h4 class="gdnhy-1 mt-4"><a href="shop.php?category_id=10&category_name=Gourment">special Gourment Hamper</a>
                        </h4>
                    </div>
                    <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                        <div class="weitemshny-grid oposition-relative">
                            <a href="shop.php?category_id=7&category_name=Purse" class="d-block zoom"><img src="uploads/pu1.jpg" alt="" class="img-fluid news-image"></a>
                            <div class="witemshny-inf">
                            </div>
                        </div>
                        <h4 class="gdnhy-1 mt-4"><a href="shop.php?category_id=7&category_name=Purse">Women Clutch for every occassion</a>
                        </h4>
                    </div>
                    <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                        <div class="weitemshny-grid oposition-relative">
                            <a href="shop.php?category_id=16&category_name=Perfumes" class="d-block zoom"><img src="uploads/per7.webp" alt="" class="img-fluid news-image"></a>
                            <div class="witemshny-inf">
                            </div>
                        </div>
                        <h4 class="gdnhy-1 mt-4"><a href="shop.php?category_id=16&category_name=Perfumes">Heavenly Odor perfume</a>
                        </h4>
                    </div>
                    <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                        <div class="weitemshny-grid oposition-relative">
                            <a href="shop.php?category_id=4&category_name=Hampers" class="d-block zoom"><img src="uploads/g12.webp" alt="" class="img-fluid news-image"></a>
                            <div class="witemshny-inf">
                            </div>
                        </div>
                        <h4 class="gdnhy-1 mt-4"><a href="shop.php?category_id=4&category_name=Hampers">Gourmet selection with best Hamper</a>
                        </h4>
                    </div>
                    <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                        <div class="weitemshny-grid oposition-relative">
                            <a href="shop.php?category_id=3&category_name=Chocolates" class="d-block zoom"><img src="uploads/choc5.jpg" alt="" class="img-fluid news-image"></a>
                            <div class="witemshny-inf">
                            </div>
                        </div>
                        <h4 class="gdnhy-1 mt-4"><a href="shop.php?category_id=3&category_name=Chocolates">Heavenly chocolate bites</a>
                        </h4>
                    </div>
                    <div class="col-xl-2 col-md-4 col-6 product-incfhny mt-4">
                        <div class="weitemshny-grid oposition-relative">
                            <a href="shop.php?category_id=6&category_name=Watch" class="d-block zoom"><img src="uploads/wa9.webp" alt="" class="img-fluid news-image"></a>
                            <div class="witemshny-inf">
                            </div>
                        </div>
                        <h4 class="gdnhy-1 mt-4"><a href="shop.php?category_id=6&category_name=Watch">Sophisticated Watch for office use</a>
                        </h4>
                    </div>
                </div>
                <!--//row-2-->
            </div>
        </section>
        <!--/w3l-ecommerce-main-->
        <div style="margin: 8px auto; display: block; text-align:center;">

            <!---728x90--->



            <!-- testimonials section -->
            <section class="w3l-clients w3l-test" id="testimonials">
                <div class="container py-lg-5 py-md-4 pt-5 pb-5">
                    <div class="row">
                        <div class="col-lg-4 testimonials-con-left-info py-sm-5 pt-0 py-3">
                            <div class="title-content text-left p-xl-3"><br><br><br>
                                <h6 class="title-subw3hny">Reviews</h6>
                                <h3 class="title-w3l two">What Clients Say ?</h3>
                                <!-- <p class="test-p mt-3">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                            ultrices in ligula. Semper at tempufddfel.
                        </p> -->
                            </div>
                        </div>
                        <div class="col-lg-8 testimonials-con-right mt-lg-0 mt-3 p-xl-3 pb-4">
                            <div id="owl-demo2" class="owl-carousel owl-theme testimonials-2 py-sm-5 pt-0 py-3">
                                <div class="item">
                                    <div class="testimonial-content">
                                        <div class="testimonial">

                                            <p><i class="fas fa-quote-left me-2"></i> I couldn't be happier with my purchase from Glorious Gifts. The gift I ordered arrived promptly, beautifully packaged, and exceeded my expectations.</p>
                                        </div>
                                        <div class="bottom-info mt-4">
                                            <a class="comment-img" href="#url"><img src="assets/images/team4.jpg" class="img-fluid radius-image" alt="placeholder image"></a>
                                            <div class="people-info align-self">
                                                <h3>Prince Patel</h3>
                                                <!-- <p class="identity">Ahemedabad</p> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-content">
                                        <div class="testimonial">
                                            <p><i class="fas fa-quote-left me-2"></i> Glorious Gifts made my shopping experience effortless. I found the perfect gift for my sister's birthday, and it arrived just in time. She absolutely loved it!</p>
                                        </div>
                                        <div class="bottom-info mt-4">
                                            <a class="comment-img" href="#url"><img src="assets/images/team1.jpg" class="img-fluid radius-image" alt="placeholder image"></a>
                                            <div class="people-info align-self">
                                                <h3>Vansh chauhan</h3>
                                                <!-- <p class="identity">Surat</p> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-content">
                                        <div class="testimonial">
                                            <p><i class="fas fa-quote-left me-2"></i>Glorious Gifts is my go-to destination for unique gifts. Their selection is unmatched, and the quality of their products never disappoints. </p>
                                        </div>
                                        <div class="bottom-info mt-4">
                                            <a class="comment-img" href="#url"><img src="assets/images/team3.jpg" class="img-fluid radius-image" alt="placeholder image"></a>
                                            <div class="people-info align-self">
                                                <h3>Shreyansh Patadiya</h3>
                                                <!-- <p class="identity">Ahmedabad</p> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-content">
                                        <div class="testimonial">
                                            <p><i class="fas fa-quote-left me-2"></i>Shoutout to Glorious Gifts for helping me find the perfect birthday present for my mom. She hasn't stopped raving about it! Thanks for making me look good 😉</p>
                                        </div>
                                        <div class="bottom-info mt-4">
                                            <a class="comment-img" href="#url"><img src="assets/images/shop-5.jpg" class="img-fluid radius-image" alt="placeholder image"></a>
                                            <div class="people-info align-self">
                                                <h3>Juhi Padhiyar</h3>
                                                <!-- <p class="identity">Example City</p> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- //testimonials-section-->
            <!--/w3l-subscription-infhny-->
            <?php

            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\SMTP;
            use PHPMailer\PHPMailer\Exception;

            if ($_POST) {
                $email = $_POST['txt1'];
                $q = mysqli_query($connection, "select * from tbl_user where user_email='{$email}' ");
                $count = mysqli_num_rows($q);
                if ($count == 1) {

                    $data = mysqli_fetch_array($q);

                    $msg = $email;



                    //Load Composer's autoloader
                    require 'vendor/autoload.php';

                    //Create an instance; passing true enables exceptions
                    $mail = new PHPMailer(true);
                    try {
                        //Server settings
                        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                        $mail->isSMTP();                                            //Send using SMTP
                        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                        $mail->Username   = $email;                     //SMTP username
                        $mail->Password   = 'sgsieccaxmyeadtx';                               //SMTP password
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS

                        //Recipients
                        $mail->setFrom('project26usk@gmail.com', '$name');
                        $mail->addAddress($email, 'Joe User');     //Add a recipient


                        //

                        //Content
                        $mail->isHTML(true);                                  //Set email format to HTML
                        $mail->Subject = 'Forgot Password';
                        $mail->Body    = $msg;
                        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                        $mail->send();
                        echo "<script>alert('Password sent your emailid');</script>";
                    } catch (Exception $e) {
                        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    }
                } else {
                    echo "<script>alert('No Email Found')</script>";
                }
            }
            ?>

            <!-- <section class="w3l-subscription-infhny py-5">
                <div class="container py-md-5">
                    <div class="subscription-info text-center mx-auto">
                        <i class="far fa-envelope"></i>
                        <h3 class="title-w3l mb-2">Get On The List</h3>
                        <p>Shop Exclusive Promos & SAVE 20% on Your First Order</p>

                        <form action="#" method="post" class="w3l-signin-form mt-4 mb-3">
                            <div class="forms-gds">
                                <div class="form-input">
                                    <input type="email" name="txt1" placeholder="Your email here" required="">
                                </div>
                                <div class="form-input"><button class="btn btn-style btn-primary">Subscribe</button></div>
                            </div>
                        </form>
                        <p>By entering your email, you are accepting our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>.</p>
                    </div>
                </div>
            </section> --><br><br> <br><br>
            <div class="item">
            <a href="shop.php"><img src="ug.jpeg" style="height:100px;width:170px;margin-left:0px;"></a>
                <h1><a href="shop.php">Unique Gifts Online</a></h1>

                <a href="shop.php"><p>Curated to make every special moment a celebration</p></a>
                <br><br> <br><br>
            </div>

        </div>
        <!--/footer-->
        <?php
        include './footer.php';
        ?>
        <!--//footer-->

        <!-- Template JavaScript -->
        <!-- <script src="assets/js/jquery-3.3.1.min.js"></script> -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

        <script src="assets/js/theme-change.js"></script>
        <!-- cart-js -->
        <script src="assets/js/minicart.js"></script>
        <script>
            shopv.render();

            shopv.cart.on('shopv_checkout', function(evt) {
                var items, len, i;

                if (this.subtotal() > 0) {
                    items = this.items();

                    for (i = 0, len = items.length; i < len; i++) {}
                }
            });
        </script>
        <!-- //cart-js -->
        <!-- owlcarousel -->
        <script src="assets/js/owl.carousel.js"></script>
        <!-- script for banner slider-->
        <script>
            $(document).ready(function() {
                $('.owl-one').owlCarousel({
                    loop: true,
                    margin: 0,
                    nav: false,
                    responsiveClass: true,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    autoplaySpeed: 1000,
                    autoplayHoverPause: false,
                    responsive: {
                        0: {
                            items: 1
                        },
                        480: {
                            items: 1
                        },
                        667: {
                            items: 1
                        },
                        1000: {
                            items: 1
                        }
                    }
                })
            })
        </script>
        <!-- //script -->
        <!-- script for tesimonials carousel slider -->
        <script>
            $(document).ready(function() {
                $("#owl-demo2").owlCarousel({
                    loop: true,
                    nav: false,
                    margin: 50,
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items: 1,
                            nav: false
                        },
                        736: {
                            items: 1,
                            nav: false
                        },
                        991: {
                            items: 2,
                            margin: 30,
                            nav: false
                        },
                        1080: {
                            items: 2,
                            nav: false
                        }
                    }
                })
            })
        </script>
        <!-- //script for tesimonials carousel slider -->
        <!-- video popup -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!-- <script>
            $(document).ready(function() {
                $('.popup-with-zoom-anim').magnificPopup({
                    type: 'inline',

                    fixedContentPos: false,
                    fixedBgPos: true,

                    overflowY: 'auto',

                    closeBtnInside: true,
                    preloader: false,

                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-zoom-in'
                });

                $('.popup-with-move-anim').magnificPopup({
                    type: 'inline',

                    fixedContentPos: false,
                    fixedBgPos: true,

                    overflowY: 'auto',

                    closeBtnInside: true,
                    preloader: false,

                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-slide-bottom'
                });
            });
        </script> -->
        <!-- //video popup -->
            <span style="display:none;">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/dZzSfR0FhVs?si=pfH2Q0Ah_4GkTBrC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/dZzSfR0FhVs?si=pfH2Q0Ah_4GkTBrC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </span>
        <!-- MENU-JS -->
        <script>
            $(window).on("scroll", function() {
                var scroll = $(window).scrollTop();

                if (scroll >= 80) {
                    $("#site-header").addClass("nav-fixed");
                } else {
                    $("#site-header").removeClass("nav-fixed");
                }
            });

            //Main navigation Active Class Add Remove
            $(".navbar-toggler").on("click", function() {
                $("header").toggleClass("active");
            });
            $(document).on("ready", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
                $(window).on("resize", function() {
                    if ($(window).width() > 991) {
                        $("header").removeClass("active");
                    }
                });
            });
        </script>
        <!-- //MENU-JS -->

        <!-- disable body scroll which navbar is in active -->
        <script>
            $(function() {
                $('.navbar-toggler').click(function() {
                    $('body').toggleClass('noscroll');
                })
            });
        </script>
        <!-- //disable body scroll which navbar is in active -->

        <!-- //bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script>
            var loader = document.getElementById("preloader");
            window.addEventListener("load",function()
            {
                loader.style.display = "none";
            });
        </script>

    </body>

    <!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Dec 2022 10:07:21 GMT -->

</html>
<?php
include './bot.php';
?>