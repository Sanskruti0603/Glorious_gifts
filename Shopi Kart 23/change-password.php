<?php
session_start();
include './connection.php';
if(!isset($_SESSION['aid']))
{
    echo "<script>alert('login Required!');window.location='login.php';</script>";
}



include './connection.php';

if($_POST)
{
    $opass = $_POST['txt1'];
    $npass = $_POST['txt2'];
    $cpass = $_POST['txt3'];
    $aid=$_SESSION['aid'];

    $oq=mysqli_query($connection,"select * from tbl_user where user_id='{$aid}'");
    $odata=mysqli_fetch_array($oq);
    if($odata['user_password']==$opass)
    {
        if($npass==$cpass)
        {
            if($opass==$npass)
            {
                echo "<script>alert('New and old password can not be same');</script>";
            }else
            {
                $uq=mysqli_query($connection,"update tbl_user set user_password='$npass' where user_id='$aid'");
                echo "<script>alert('PASSWORD UPDATED!');</script>";
            }
        }else
        {
            echo "<script>alert('New and confirm password must  be same');</script>";
        }
    }
        else 
        {
            echo "<script>alert(' old password not match');</script>";
        }
}
    
?>

<html lang="en">


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Dec 2022 10:07:38 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
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
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
  	}
})();
</script>
<script>
(function(){
if(typeof _bsa !== 'undefined' && _bsa) {
	// format, zoneKey, segment:value, options
	_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
}
})();
</script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
  	}
})();
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src='https://www.googletagmanager.com/gtag/js?id=G-98H8KRKT85'></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-98H8KRKT85');
</script>

<meta name="robots" content="noindex">
<body><link rel="stylesheet" href="../../../../../../assests/css/font-awesome.min.css">
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
  padding-top:70px;
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
#w3lDemoBar.w3l-demo-bar .no-margin-bottom{
  margin-bottom:0;
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
  #w3lDemoBar.w3l-demo-bar a.desktop-mode{
      display: none;

  }
}
@media (max-width: 767px) {
  #w3lDemoBar.w3l-demo-bar a.tablet-mode{
      display: none;

  }
}
@media (max-width: 568px) {
  #w3lDemoBar.w3l-demo-bar a.mobile-mode{
      display: none;
  }
  #w3lDemoBar.w3l-demo-bar .responsive-icons {
      margin-top: 0px;
      border-top: none;
      padding-top: 0px;
  }
  #right-sidebar,.pull-right {
      width: 90px;
  }
  #w3lDemoBar.w3l-demo-bar .no-margin-bottom-mobile{
      margin-bottom: 0;
  }
}
</style>
<div class="pull-right toggle-right-sidebar">
<span class="fa title-open-right-sidebar tooltipstered fa-angle-double-right"></span>
</div>

<div id="right-sidebar" class="right-sidebar-notifcations nav-collapse">
<div class="bs-example bs-example-tabs right-sidebar-tab-notification" data-example-id="togglable-tabs">

    <div id="w3lDemoBar" class="w3l-demo-bar">
        <div class="demo-btns">
        <a href="https://w3layouts.com/?p=4763800000102799">
            <span class="w3l-icon -back">
                <span class="fa fa-arrow-left"></span>
            </span>
            <span class="w3l-text">Back</span>
        </a>
        <a href="https://w3layouts.com/?p=4763800000102799">
            <span class="w3l-icon -download">
                <span class="fa fa-download"></span>
            </span>
            <span class="w3l-text">Download</span>
        </a>
        <a href="https://w3layouts.com/checkout/?add-to-cart=4763800000102799" class="no-margin-bottom-mobile">
            <span class="w3l-icon -buy">
                <span class="fa fa-shopping-cart"></span>
            </span>
            <span class="w3l-text">Buy</span>
        </a>
    </div>
        <!---<div class="responsive-icons">
            <a href="#url" class="desktop-mode">
                <span class="w3l-icon -desktop">
                    <span class="fa fa-desktop"></span>
                </span>
            </a>
            <a href="#url" class="tablet-mode">
                <span class="w3l-icon -tablet">
                    <span class="fa fa-tablet"></span>
                </span>
            </a>
            <a href="#url" class="mobile-mode no-margin-bottom">
                <span class="w3l-icon -mobile">
                    <span class="fa fa-mobile"></span>
                </span>
            </a>
        </div>-->
    </div>
    <div class="right-sidebar-panel-content animated fadeInRight" tabindex="5003"
        style="overflow: hidden; outline: none;">
    </div>
</div>
</div>
</div>

    <!--/Header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light stroke py-lg-0">
                <h1><a class="navbar-brand pe-xl-5 pe-lg-4" href="index.html">
                        <span class="w3yellow">Shoppy</span>Kart
                    </a></h1>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-lg-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="about.html">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#Pages" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Products <span class="fa fa-angle-down ms-1"></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item pt-2" href="products.html">Products</a></li>
                                <li><a class="dropdown-item" href="product-single.html">Product Single</a></li>
                                <li><a class="dropdown-item" href="checkout.html">Cart Page</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#Pages" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Pages <span class="fa fa-angle-down ms-1"></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item pt-2" href="blog.html">Blog Page</a></li>
                                <li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
                                <li><a class="dropdown-item" href="elements.html">Elements</a></li>
                                <li><a class="dropdown-item" href="error.html">Error Page</a></li>
                                <li><a class="dropdown-item" href="faq.html">FaQ</a></li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                        <li class="nav-item search-right">
                            <a href="#search" class="btn search-btn" title="search"><span class="fas fa-search me-2" aria-hidden="true"></span></a>
                            <!-- search popup -->
                            <div id="search" class="pop-overlay">
                                <div class="popup">
                                    <h3 class="title-w3l two mb-4 text-left">Search Here</h3>
                                    <form action="#" method="GET" class="search-box d-flex position-relative">
                                        <input type="search" placeholder="Enter Keyword here" name="search" required="required" autofocus="">
                                        <button type="submit" class="btn"><span class="fas fa-search" aria-hidden="true"></span></button>
                                    </form>
                                </div>
                                <a class="close" href="#close">×</a>
                            </div>
                            <!-- /search popup -->
                        </li>
                    </ul>

                </div>
                <ul class="header-search me-lg-4 d-flex">
                    <li class="get-btn me-2">
                        <a href="login.html" class="btn btn-style btn-primary" title="search"><i class="fas fa-user me-lg-2"></i> <span class="btn-texe-inf">Login</span></a>
                    </li>
                    <li class="shopvcart galssescart2 cart cart box_1 get-btn">
                        <form action="#" method="post" class="last">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="display" value="1">
                            <button class="top_shopv_cart" type="submit" name="submit" value="">
                                <span class="fas fa-shopping-bag me-lg-2"></span> <span class="btn-texe-inf">Cart</span>

                            </button>
                        </form>
                    </li>
                </ul>
                <!-- toggle switch for light and dark theme -->
                <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
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
                            Login </h2>
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.html">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Login </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <!--//inner-page-->
	<div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->

 
</div>
    <section class="w3l-forml-main py-5">
        <div class="form-hnyv-sec py-sm-5 py-3">
            <!--form-stars-here-->
            <div class="form-wrapv">

                <h2>Login to your account</h2>
                <form action="#" method="post">
                    <div class="form-sub-w3">
                        <input type="text" name="txt1" placeholder="Old Password " required="" />
                        <div class="icon-w3">
                            <span class="fas fa-user" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="form-sub-w3">
                        <input type="password" name="txt2" placeholder="New Password" required="" />
                        <div class="icon-w3">
                            <span class="fas fa-unlock-alt" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="form-sub-w3">
                        <input type="password" name="txt3" placeholder="Confirm Password" required="" />
                        <div class="icon-w3">
                            <span class="fas fa-unlock-alt" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="form-sub-content">
                        <p class="forgot-w3ls">Forgot Password?<a class href="forgot.php"> Click here</a></p>
                        <p class="forgot-w3ls1">New User? <a class href="#register">Signup here</a></p>
                    </div>
                    <div class="submit-button text-center">
                        <button class="btn btn-style btn-primary">Login Now</button>

                    </div>
                </form>

            </div>
            <!--//form-ends-here-->
        </div>
        <!-- //coming -->
    </section>
	<div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->
 
</div>
    <!--/w3l-footer-29-main-->
    <footer class="w3l-footer-29-main">
        <div class="footer-29 py-5">
            <div class="container py-lg-4">
                <h2>Special Offer All Branded Sandals are <br>Flat 50% Discount</h2>
                <div class="row footer-top-29 mt-md-5">
                   <div class="col-lg-3 col-md-6 footer-list-29 footer-3 pe-lg-5">
                        <h6 class="footer-title-29">USeful Links</h6>
                        <div class="footer-listw3-grids">
                            <ul class="footer-listw3">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="blog.html">Blogs</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="#support">Support</a></li>
                                <li><a href="#news">News & Media</a></li>
                                <li><a href="#Careers">Careers</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-list-29 footer-1 ps-lg-5 mt-lg-0 mt-md-5 mt-4">
                        <h6 class="footer-title-29">Information</h6>
                        <div class="footer-listw3-grids">
                            <ul class="footer-listw3">
                                <li><a href="#terms">Terms & Conditions</a></li>
                                <li><a href="#deivery">Delivery Terms</a></li>
                                <li><a href="#order">Order Tracking</a></li>
                                <li><a href="#returns">Returns Policy</a></li>
                                <li><a href="#support">Privacy Policy</a></li>
                                <li><a href="#faq">FAQ</a></li>
                                <li><a href="#shop">The Shop</a></li>

                            </ul>

                        </div>

                    </div>
                    <div class="col-lg-3 col-md-6 footer-list-29 footer-3 mt-lg-0 mt-md-5 mt-4 pe-lg-5">
                        <h6 class="footer-title-29">Address</h6>
                        <div class="footer-listw3-grids">
                            <ul class="footer-listw3">
                                <li>London, UK</li>
                                <li>998 13h Street, Office 436</li>
                                <li>Harlo 61466</li>
                                <li><a href="tel:+(21) 255 999 8888">+(21) 255 999 8888</a></li>
                                <li><a href="mailto:ShoppyKart@mail.com" class="mail">ShoppyKart@mail.com</a></li>

                            </ul>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-list-29 footer-4 mt-lg-0 mt-md-5 mt-4  ps-lg-5">
                        <h6 class="footer-title-29">Payment Method</h6>
                        <ul class="pay-method-grids">
                            <li><a class="pay-method" href="#"><span class="fab fa-cc-visa" aria-hidden="true"></span></a>
                            </li>
                            <li><a class="pay-method" href="#"><span class="fab fa-cc-discover" aria-hidden="true"></span></a>
                            </li>
                            <li><a class="pay-method" href="#"><span class="fab fa-cc-paypal" aria-hidden="true"></span></a>
                            </li>
                            <li><a class="pay-method" href="#"><span class="fab fa-cc-mastercard" aria-hidden="true"></span></a>
                            <li><a class="pay-method" href="#"><span class="fab fa-cc-stripe" aria-hidden="true"></span></a>
                            <li><a class="pay-method" href="#"><span class="fab fa-cc-amex" aria-hidden="true"></span></a>
                            </li>
                            <li><a class="pay-method" href="#"><span class="fab fa-cc-jcb" aria-hidden="true"></span></a>
                            </li>
                            <li><a class="pay-method" href="#"><span class="cc-diners-club" aria-hidden="true"></span></a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="row bottom-copies">
                    <p class="copy-footer-29 col-lg-8">© 2021 ShoppyKart. All rights reserved | Designed by <a href="https://w3layouts.com/" target="_blank">W3layouts</a></p>
                    <div class="col-lg-4 main-social-right mt-lg-0 mt-4">
                        <div class="main-social-footer-29">
                            <a href="#facebook" class="facebook"><span class="fab fa-facebook-f"></span></a>
                            <a href="#twitter" class="twitter"><span class="fab fa-twitter"></span></a>
                            <a href="#instagram" class="instagram"><span class="fab fa-instagram"></span></a>
                            <a href="#linkd" class="linkd"><span class="fab fa-linkedin-in"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- move top -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
            <span class="fa fa-angle-up"></span>
        </button>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }

        </script>
        <!-- //move top -->
    </footer>
    <!-- Template JavaScript -->
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


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Dec 2022 10:07:38 GMT -->
</html>
