<?php
ob_start();
session_start();
include './connection.php';
?>

<!doctype html>
<html lang="en">


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Dec 2022 10:07:35 GMT -->
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
                                Wishlist </h2>
                        </div>
                        <div class="w3breadcrumb-right">
                            <ul class="breadcrumbs-custom-path">
                                <li><a href="index.html">Home</a></li>
                                <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Wishlist</li>
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
            <div class="ecom-contenthny py-5">
                <div class="container py-lg-5">
                    <!-- about -->
                    <div class="ecom-contenthny-w3lcheckout privacy">
                        <h3>Wishlist</span></h3>
                        <div class="checkout-right">


                            <?php

                            // if (isset($_POST['bt'])) {
                            //     $pid = $_POST['pid'];
                            //     $q = mysqli_query($connection, "select * from tbl_product where product_id='{$pid}'");
                            //     $pdata = mysqli_fetch_array($q);
                            //     $price = $pdata['product_price'];
                            //     $qty = 1;
                            //     $user = $_SESSION['uid'];

                            //     $iq = mysqli_query($connection, "insert into tbl_cart(product_id,quantity,price,user_id) 
                            // values('{$pid}','{$qty}','{$price}','{$user}')");
                            // if($iq)
                            // {
                            //     echo "<script></script>";
                            // }

                                // header("location:cartprocess.php");

                            // }

                            if (!isset($_SESSION['uid'])) {
                                header("location:login.php");
                            } else {
                                $userid  = $_SESSION['uid'];
                            }

                            if (isset($_GET['did'])) {
                                $did = $_GET['did'];
                                $dq = mysqli_query($connection, "delete from tbl_wishlist where wishlist_id='{$did}'");

                                if ($dq) {
                                    echo "<script>alert('Product Removed');window.location='wishlist.php';</script>";
                                }
                            }
                            $q = mysqli_query($connection, "select * from tbl_wishlist where user_id='{$userid}'");
                            $count = mysqli_num_rows($q);

                            if ($count > 0) {
                            ?>
                                <table class="timetable_sub">
                                    <thead>
                                        <tr>
                                            <th>SL No.</th>
                                            <th>Product</th>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Remove</th>
                                            <!-- <th>Add to cart</th> -->
                                            <!-- <th>Cart</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $i = 0;
                                        $grandtotal = 0;
                                        while ($data = mysqli_fetch_array($q)) {


                                            $pq = mysqli_query($connection, "select * from tbl_product where product_id='{$data['product_id']}'");
                                            $pdata = mysqli_fetch_array($pq);

                                            $i++;

                                        ?>
                                            <tr class="rem1">
                                                <td class="invert"><?php echo $i; ?></td>
                                                <td class="invert-image"><a href="product-single.html">
                                                        <a href="details.php?pid=<?php echo "{$data['product_id']}" ?>"> <img src="<?php echo "uploads/{$pdata['product_photo']}"; ?>" class="img-fluid radius-image" alt=""></a>
                                                    </a></td>

                                                <td class="invert"><?php echo $pdata['product_name']; ?></td>

                                                <td class="invert"><?php echo $pdata['product_price']; ?></td>
                                                
                                                <td class="invert">
                                                    <div class="rem">
                                                        <div class="close1">

                                                             <a href='wishlist.php?did=<?php echo $data['wishlist_id']; ?>'>X</a> 



                                                        </div>
                                                        

                                                </td>
                                                <!-- <td><button class="btn btn-style btn-primary" value="Add" name="bt" onclick="window.location='cartprocess.php?pid=
                                                <*?php echo $pdata['product_id'] ?>';">Cart</td> -->
                                            </tr>

                                        <?php
                                        }
                                        ?>



                                    </tbody>
                                </table>


                        </div>
                        <!-- <div class="row checkout-left mt-5">
                        <div class="col-md-4 checkout-left-basket">
                            <h4>Continue to basket</h4>
                            <ul> 
                              
                                
                                <li>Total <i>-</i> <span><?php echo $grandtotal; ?></span></li>
                            </ul>
                        </div>
                        
                    </div>
                    <input type="button" onclick="window.location='checkout.php';" value="Place Order" class="btn btn-success"/> -->

                    <?php

                            } else {
                    ?>

                        <p>Wishlist is Empty</p>
                    <?php
                            }
                    ?>
                    </div>
                    <!-- //about -->
                </div>
            </div>
        </section>
        <!-- //products-->
        <div style="margin: 8px auto; display: block; text-align:center;">

            <!---728x90--->

        </div>
        <!--/w3l-footer-29-main-->
        <?php
        include './footer.php';
        ?>
        <!-- Template JavaScript -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="assets/js/theme-change.js"></script>
        <!-- js -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <!-- //js -->
        <!--quantity-->
        <script>
            $('.value-plus').on('click', function() {
                var divUpd = $(this).parent().find('.value'),
                    newVal = parseInt(divUpd.text(), 10) + 1;
                divUpd.text(newVal);
            });

            $('.value-minus').on('click', function() {
                var divUpd = $(this).parent().find('.value'),
                    newVal = parseInt(divUpd.text(), 10) - 1;
                if (newVal >= 1) divUpd.text(newVal);
            });
        </script>
        <!--quantity-->
        <script>
            $(document).ready(function(c) {
                $('.close1').on('click', function(c) {
                    $('.rem1').fadeOut('slow', function(c) {
                        $('.rem1').remove();
                    });
                });
            });
        </script>
        <script>
            $(document).ready(function(c) {
                $('.close2').on('click', function(c) {
                    $('.rem2').fadeOut('slow', function(c) {
                        $('.rem2').remove();
                    });
                });
            });
        </script>
        <script>
            $(document).ready(function(c) {
                $('.close3').on('click', function(c) {
                    $('.rem3').fadeOut('slow', function(c) {
                        $('.rem3').remove();
                    });
                });
            });
        </script>

        <!-- //js -->
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


    <!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Dec 2022 10:07:38 GMT -->

</html>
<?php
include './bot.php';
?>