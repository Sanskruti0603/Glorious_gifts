
<?php
session_start();
include './connection.php';

if($_POST)
{
    $email = $_POST['txt1'];
    $password = $_POST['txt2'];

    $q = mysqli_query($connection,"select * from tbl_user where 
    user_email='{$email}' and user_password ='{$password}'");
    $count = mysqli_num_rows($q);
    $row = mysqli_fetch_array($q);
    if($count>0)
    {
       $_SESSION['uid'] = $row['user_id'];
       $_SESSION['uname'] = $row['user_name'];
       $_SESSION['uemail'] = $row['user_email'];
      header("location:index.php");
    }else{
        echo "<script>alert('Login Failed');</script>";
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
    <title>Glorious Gifts  </title>
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

 <!--/Header-->
 <?php 
        include "./header.php";
    ?>
    <!--//Header-->
    <br><br><br><br><br>
    <!-- <section class="w3mid-gap"></section> -->
    <!--/Banner-Start-->
    <!--/inner-page-->
    <!-- <div class="inner-banner py-5"> -->
        <!-- <section class="w3l-breadcrumb text-left py-sm-5 ">
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
        </section>-->
    </div> 
    <!--//inner-page-->
	<!-- <div style="margin: 8px auto; display: block; text-align:center;"> -->

<!---728x90--->

 
</div>
<style>
.sec {
    margin: 100px;
    font-family: "Roboto", sans-serif;
    font-size: 14px;
    background-color: #fff;
}
</style>
<div class="adbTermCondition container" >
   <pre>
<p>We thank you from the bottom of our heart for placing an order with us and making us a part of your celebrations.We strive hard to 
make your celebrations memorable and wonderful.

We at Glorious gift are a group of gifting and celebration enthusiasts. We love our work and try to serve people in their celebrations and 
have fun doing so.  We try our level best that whatever we display on our website is delivered with the same quality as promised. 
In serving you we also care to follow certain guidelines, rules and processes. These terms and conditions are not there to intimidate
the user but are there so as to minimise the areas of conflict. We have listed these so that the user is aware of the processes and 
rules that can affect him/her, his/her order and the recipient.

Please read these Terms and Conditions carefully, clarify them from Customer care if you have any doubts.Be assured that our
spirit of working is that everyone should be benefited - our team, our customers and our company.
</p>

<h1>Terms and Conditions</h1>

<p>
Please read the following terms and conditions very carefully as your use of service is subject to your acceptance of and compliance with
the following terms and conditions ("Terms").

By subscribing to or using any of our services you agree that you have read, understood and are bound by the Terms, regardless of how you 
subscribe to or use the services. If you do not want to be bound by the Terms, you must not subscribe to or use our services.

Your use of the Website, services and tools are governed by the following terms and conditions ("Terms of Use") as applicable to the Website,
including the applicable policies which are incorporated herein by way of reference. If You transact on the Website, You shall be subject to 
the policies that are applicable to the Website for such transaction. By mere use of the Website, You shall be contracting with Dhawala Online
Solutions Private Limited and these terms and conditions including the policies constitute Your binding obligations, with Winni.

By impliedly or expressly accepting these Terms of Use, You also accept and agree to be bound by the Winni Privacy Policy.

For the purpose of these Terms of Use, wherever the context so requires "You" or "User" shall mean any natural or legal person who has 
agreed to become a member of the Website by providing Registration Data while registering on the Website as Registered User using 
the computer systems.The terms "we", "us", "our" shall mean Dhawala Online Solutions Private Limited.

When You use any of the services provided by us through the Website, including but not limited to, (e.g. Customer Reviews), You will be 
subjected to the rules, guidelines, policies, terms, and conditions applicable to such service, and they shall be deemed to be incorporated
into this Terms of Use and shall be considered as part and parcel of this Terms of Use. We reserve the right, at our sole discretion, to 
change, modify, add or remove portions of these Terms of Use, at any time without any prior written notice to you. It is your responsibility
to review these Terms of Use periodically for updates / changes. Your continued use of the Website following the posting of changes will mean 
that you accept and agree to the revisions. As long as You comply with these Terms of Use, We grant You a personal, non-exclusive,
non-transferable, limited privilege to enter and use the Website.

ACCESSING, BROWSING OR OTHERWISE USING THE SITE INDICATES YOUR AGREEMENT TO ALL THE TERMS AND CONDITIONS UNDER THESE TERMS OF USE, 
SO PLEASE READ THE TERMS OF USE CAREFULLY BEFORE PROCEEDING.

</p>


</div>


<!---728x90--->
 
</div>

    <!--/w3l-footer-29-main-->
    <?php 
            include "./footer.php";
        ?>
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
    <script type="text/javascript" src="tools/jquery-3.6.0.js"></script>
        <script type="text/javascript" src="tools/jquery.validate.js"></script>
        <script>
            $(document).ready(function(){
                $("#myform").validate();
            });
        </script>
        <style>
            .error{
                color:red;
            }
        </style>

</body>


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Dec 2022 10:07:38 GMT -->
</html>
<?php
include './bot.php';
?>