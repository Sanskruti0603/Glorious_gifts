<?php
session_start();
include './connection.php';


if (!isset($_GET['pid'])) {
    header("location:shop.php");
}

$id = $_GET['pid'];
$pq = mysqli_query($connection, "select * from tbl_product where product_id='{$id}'");
$pdata = mysqli_fetch_array($pq);
?>

<!doctype html>
<html lang="en">


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/product-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Dec 2022 10:07:33 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Glorious Gifts </title>
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
        <link rel="stylesheet" href="../../../../../../assests/css/font-awesome.min.css">
        <!-- New toolbar-->
        <style>
            * {
                box-sizing: border-box;
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
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
        <!--/inner-page-->
        <div class="inner-banner py-5">
            <section class="w3l-breadcrumb text-left py-sm-5 ">
                <div class="container">
                    <div class="w3breadcrumb-gids">
                        <div class="w3breadcrumb-left text-left">
                            <h2 class="inner-w3-title">
                                Cake Product</h2>
                        </div>
                        <div class="w3breadcrumb-right">
                            <ul class="breadcrumbs-custom-path">
                                <li><a href="index.php">Home</a></li>
                                <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Product</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </section>
        </div>
        <!--//inner-page-->
        <!--/w3l-ecommerce-main-->
        <div style="margin: 8px auto; display: block; text-align:center;">

            <!---728x90--->


        </div>
        <section class="w3l-ecommerce-main">
            <!-- /products-->
            <div class="ecom-contenthny w3l-ecommerce-main-inn py-5">
                <div class="container py-lg-5">
                    <!--/row1-->
                    <div class="sp-store-single-page row">
                        <div class="col-lg-5 single-right-left">
                            <div class="flexslider1">

                                <ul class="slides">
                                    <li data-thumb="adminlte/uploads/<?php $pdata['product_photo']; ?>">
                                        <div class="thumb-image"> <img src="adminlte/uploads/<?php echo $pdata['product_photo']; ?>" data-imagezoom="true" class="img-fluid radius-image" alt=" "> </div>
                                    </li>
                                    <!-- <li data-thumb="assets/images/cart2.jpg">
                                    <div class="thumb-image"> <img src="assets/images/cart2.jpg" data-imagezoom="true" class="img-fluid radius-image" alt=" "> </div>
                                </li>
                                <li data-thumb="assets/images/cart3.jpg">
                                    <div class="thumb-image"> <img src="assets/images/cart3.jpg" data-imagezoom="true" class="img-fluid radius-image" alt=" "> </div>
                                </li>
                                <li data-thumb="assets/images/cart4.jpg">
                                    <div class="thumb-image"> <img src="assets/images/cart4.jpg" data-imagezoom="true" class="img-fluid radius-image" alt=" "> </div>
                                </li> -->
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="eco-buttons mt-5 d-flex">

                                <div class="shopv single-item">
                                    <!-- <form action="cartprocess.php" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="shopv_item" value="Cotton Flared Kurta">
                                    <input type="hidden" name="amount" value="599.99"> -->
                                    <!-- <button type="submit" class="shopv-cart pshopv-cart add-to-cart btn btn-style btn-primary">
                                        Add to Cart
                                    </button> -->
                                    <!-- <input type="submit"  class="btn btn-style btn-primary" value="Add to Cart"> -->
                                    <form method="post" action="cartprocess.php">
                                        <div class="form-sub-w3">



                                            <!-- <li><a href="products.html" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a> </li>-->


                                            <?php
                                            if (!isset($_GET['pid'])) {
                                                header("location:shop.php");
                                            }

                                            $id = $_GET['pid'];
                                            $q = mysqli_query($connection, "select * from tbl_product where product_id='{$id}'");
                                            $qu = mysqli_fetch_array($q);
                                            $qty = $qu['product_quantity'];


                                            if (isset($_SESSION['uid'])) {
                                                if ($qty >= 1) {
                                            ?>
                                                   
                                                    <b> Qauntity : </b><input type="number" value="1" min="1" max="<?php echo $pdata['product_quantity']; ?>" name="qty">
                                                    <input type="hidden" name="pid" value="<?php echo $_GET['pid'] ?>" />

                                                    <input class="btn btn-style btn-primary" value="Add to Cart" type="submit">
                                                    <input onclick="window.location='add-to-wishlist.php?pid=<?php echo $_GET['pid'] ?>';" class="btn btn-style btn-primary" value="Wishlist" type="button" />


                                                <?php

                                                } else {
                                                ?>
                                                    <h2 style="color:red;">Out Of Stock</h2><br>
                                                    <input class="btn btn-style btn-primary" value="Add to Cart" type="submit" disabled>
                                                    <input onclick="window.location='add-to-wishlist.php?pid=<?php echo $_GET['pid'] ?>';" class="btn btn-style btn-primary" value="Wishlist" type="button" disabled>
                                                <?php
                                                }
                                            } else {
                                                ?>
                                                <a href="login.php">Login Required.</a>
                                            <?php


                                            }
                                            ?>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-7 single-right-left ps-lg-5">
                            <h3><?php echo $pdata['product_name'] ?></h3>
                            <div class="caption">

                                <ul class="rating-single">
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-star-half-o yellow-star" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-star-half yellow-star" aria-hidden="true"></span>
                                        </a>
                                    </li>
                                </ul>

                                <h6>
                                    <span class="item_price">₹<?php echo $pdata['product_price'] ?></span>
                                    Free Delivery
                                </h6>
                            </div>
                            <div class="desc_single my-4">
                                <ul class="emi-views">
                                    <!-- <li><span>Special Price</span> Get extra 5% off (price inclusive of discount)</li>
                                <li><span>Bank Offer</span> 5% Unlimited Cashback on Flipkart Axis Bank Credit Card</li>
                                <li><span>Bank Offer</span> 5% Cashback* on HDFC Bank Debit Cards</li>
                                <li><span>Bank Offer</span> Extra 5% off* with Axis Bank Buzz Credit Card</li> -->
                                </ul>
                            </div>
                            <div class="desc_single mb-4">
                                <h5>Description:</h5>
                                <p><?php echo $pdata['product_details'] ?></p>
                            </div>
                            <div class="description-apt d-grid mb-4">
                                <div class="occasional">
                                    <!-- <h5 class="sp_title mb-3">Highlights:</h5>
                                <ul class="single_specific">
                                    <li>
                                        Neck : Collar Neck</li>
                                    <li>
                                        Fit : Slim</li>

                                    <li> Sleeve : Full Sleeve
                                    </li>
                                    <li> Material : Pure Cutton</li>

                                </ul> -->

                                </div>

                                <div class="color-quality">
                                    <!-- <h5 class="sp_title">Services:</h5>
                                <ul class="single_serv">
                                    <li>
                                        <a href="#">30 Day Return Policy</a>
                                    </li>
                                    <li class="gap">
                                        <a href="#">Cash on Delivery available</a>
                                    </li>
                                </ul> -->
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!--//row1-->

            </div>
        </section>

        <!--/w3l-ecommerce-main-->
        <!-- //products-->

        <!-- //products-->
        <div style="margin: 8px auto; display: block; text-align:center;">

            <!---728x90--->

        </div>
        <!--/footer-->
        <?php
        include "./footer.php";
        ?>
        <!--//footer-->
        <!-- Template JavaScript -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="assets/js/theme-change.js"></script>
        <!-- FlexSlider -->
        <!-- price range (top products) -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/js/jquery-ui.js"></script>
        <script>
            //<![CDATA[ 
            $(window).load(function() {
                $("#slider-range").slider({
                    range: true,
                    min: 0,
                    max: 9000,
                    values: [50, 6000],
                    slide: function(event, ui) {
                        $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                    }
                });
                $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

            }); //]]>
        </script>
        <!-- //price range (top products) -->
        <script src="assets/js/jquery.flexslider.js"></script>
        <!-- single -->
        <script src="assets/js/imagezoom.js"></script>
        <!-- single -->
        <script>
            // Can also be used with $(document).ready()
            $(window).load(function() {
                $('.flexslider1').flexslider({
                    animation: "slide",
                    controlNav: "thumbnails"
                });
            });
        </script>
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


    </body>


    <!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/product-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Dec 2022 10:07:35 GMT -->

</html>
<?php
include './bot.php';
?>