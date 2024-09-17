<?php
session_start();
include './connection.php';
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if($_POST)
{
    $uid=$_SESSION['uid'];
    $udata=mysqli_query($connection,"select * from tbl_user where user_id='{$uid}'");
    $row=mysqli_fetch_array($udata);
    $email=$row['user_email'];
    $name = $row['user_name'];
    // $q = mysqli_query($connection,"select * from tbl_user where user_email='{$name}' ");
    $count = mysqli_num_rows($udata);
    if($count==1)
    {
   
        // $data = mysqli_fetch_array($q);

        $msg = "Hello $name,<br/>Thankyou for placing an order with Glorious Gifts!<br/>Your order will be reached within 4-5 days.<br>";

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
    $mail->Username   = 'project26usk@gmail.com';                     //SMTP username
    $mail->Password   = 'sgsieccaxmyeadtx';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS

    //Recipients
    $mail->setFrom($email, 'GLORIOUS GIFS');
    $mail->addAddress($email, 'Joe User');     //Add a recipient
    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Order Confirmed';
    $mail->Body    = $msg;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    // echo "<script>alert('Password sent your emailid');</script>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

    }else{
        echo "<script>alert('No Email Found')</script>";
    }
}

// session_start();
// include './connection.php';


if (!isset($_SESSION['uid'])) {
    header("location:login.php");
}

if ($_POST) {
    $uid = $_SESSION['uid'];
    $txt1 = $_POST['sname'];
    $txt2 = $_POST['smobile'];
    $txt3 = $_POST['saddress'];
    $txt4 = $_POST['paymentoption'];
    $date = date('d-m-Y');
    $status = "Confirm";
    $uid = $_SESSION['uid'];
    $grand = $_GET['sub'];
    //Order Master
    $orderq = mysqli_query($connection, "insert into tbl_ordermaster(ordermaster_date,ordermaster_status,user_id) values('{$date}','{$status}','{$uid}')");
    //Order ID 
    $orderid = mysqli_insert_id($connection);
    //shopping order"
    $shippingq = mysqli_query($connection, "insert into tbl_shipping(shipping_name,user_mobile,shipping_address,order_id,shipping_date) values('{$txt1}','{$txt2}','{$txt3}','{$orderid}','{$date}')");
    $paymentq = mysqli_query($connection, "insert into tbl_payment(user_id,payment_method,payment_amount,order_id) values('{$uid}','{$txt4}','{$grand}','{$orderid}')");

    //Cart 
    $cartq = mysqli_query($connection, "select * from tbl_cart where user_id='{$uid}'");
    while ($cartdata = mysqli_fetch_array($cartq)) {
        $pid = $cartdata['product_id'];
        $qty = $cartdata['quantity'];
        //product data
        $pq = mysqli_query($connection, "select * from tbl_product where product_id='{$pid}'");
        $pdata = mysqli_fetch_array($pq);
        $price = $pdata['product_price'];
        $final = $qty * $price;
       
        //order detail add
        $orderdetailq = mysqli_query($connection, "insert into tbl_orderdetail(order_id,product_id,orderdetail_quantity,product_price)
         values('{$orderid}','{$pid}','{$qty}','{$final}')");

        $new = $pdata['product_quantity'] - $qty;
        $qqq = mysqli_query($connection, "update tbl_product set product_quantity ='{$new}' where product_id='{$pid}' ");
        //cart remove
        mysqli_query($connection, "delete from tbl_cart where cart_id='{$cartdata['cart_id']}'");
    }
    header("location:thanks.php");
}
?>




<html lang="en">


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Dec 2022 10:07:38 GMT -->
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

            .radio1 {
                display: flex;
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
        <!-- <section class="w3mid-gap"></section> -->
        <!--/Banner-Start-->
        <!--/inner-page-->
        <!-- <div class="inner-banner py-5">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title">
                            Sign up </h2>
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.html">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Sign up </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section> -->
        <!-- </div> -->
        <!--//inner-page-->
        <br><br>
        <div style="margin: 8px auto; display: block; text-align:center;">

            <!---728x90--->


        </div>
        <section class="w3l-forml-main py-5">
            <div class="form-hnyv-sec py-sm-5 py-3" style="background-image: url('back.jpeg');background-repeat:no-repeat;display:flex;background-size:cover;">
                <!--form-stars-here-->
                <div class="form-wrapv" style="border: 2px solid lightgray;border-radius: 10px;padding: 30px;background-color:white;box-shadow: 5px 5px 5px 5px lightgray;">

                    <h2>Shipping</h2>
                    <form action="#" method="post" id="myform">
                        <?php
                         $uid = $_SESSION['uid'];
                         $od = mysqli_query($connection,"select * from tbl_user where user_id='{$uid}'");
                         $uod = mysqli_fetch_array($od);
                         $name = $uod['user_name'];
                         $mobile = $uod['user_mobile'];
                         $add = $uod['address'];
                        ?>
                        <div class="form-sub-w3">

                            <input type="text" name="sname" value="<?php echo "$name"?>" required="" />
                        </div>
                        <div class="form-sub-w3">

                            <input type="text" name="smobile" value="<?php echo "$mobile"?>" required="" />
                        </div>
                        <div class="form-sub-w3">

                            <style>
                                .w3l-forml-main .form-sub-w3 textarea {
                                    width: 100%;
                                    padding: 15px 45px 15px 15px;
                                    text-align: left;
                                    background-color: var(--bg-grey);
                                    font-size: 16px;
                                    font-weight: 600;
                                    color: var(--font-color);
                                    outline: 0;
                                    border: 1px solid var(--bg-grey);
                                    border-radius: 4px;
                                }
                            </style>
                            <textarea cols="21" name="saddress"  required><?php echo "$add"?> </textarea><br>
                        </div>

                        <!-- <input type="text" name="txt4" placeholder="Enter your mobile number" required="" /> -->



                        <select class="form-control" name="paymentoption" id="paymentoption" onchange="return payment_method()">
                            <option value="Cash">Cash</option>
                            <option value="UPI">UPI</option>
                            <option value="Card">Card</option>
                        </select>
                        <!-- <div class="icon-container" style="margin-left: 190px;">
                            <i class="fa fa-cc-visa" style="color:navy;"></i>
                            <i class="fa fa-cc-amex" style="color:blue;"></i>
                            <i class="fa fa-cc-mastercard" style="color:red;"></i>
                            <i class="fa fa-cc-discover" style="color:orange;"></i>
                        </div> -->


                        <div id="upiimg">
                            <img src="https://storage.googleapis.com/dara-c1b52.appspot.com/daras_ai/media/a3202e58-17ef-11ee-9a70-8e93953183bb/cleaned_qr.png" style="width:100px;height:100px;">

                            <p><b>Either Scan Image or Enter UPI No</b></p>
                        </div>
                        <div class="form-group" id="upitxt">
                            <input type="radio" name="upi_method" value="GPay" onchange="return enter_upi_id()">
                            <img src="https://t3.ftcdn.net/jpg/06/16/18/18/360_F_616181843_l404nbV07vMiXDZ1IhWiqZRDpetpuigu.jpg" style="width: 150px;">
                            <br>
                            <input class="form-control uip_id" type="varchar" name="txt1" placeholder="UPI ID" required>
                        </div>


                        <div class="form-group" id="txt1">

                            <label for="">Name<span>*</span></label>
                            <input class="form-control" type="varchar" name="txt1" placeholder="Name" required>
                        </div>
                        <div class="form-group" id="txt2">
                            <label for="">Card No<span>*</span></label>
                            <input class="form-control" type="number" name="txt2" placeholder="4134 - 1024 - 3640 - 1345" required>
                        </div>
                        <div class="form-group" id="txt3">
                            <label for="">CVV<span>*</span></label>
                            <input class="form-control" type="number" name="txt3" placeholder="Card No" required>
                        </div>


                        <div class="form-sub-w3">

                        </div>
                        <!-- <div class="form-sub-content">
                        <p class="forgot-w3ls">Forgot Password?<a class href="forgot.php"> Click here</a></p>
                        <p class="forgot-w3ls1">New User? <a class href="#register">Signup here</a></p>
                    </div> -->
                        <div class="submit-button text-center">
                            <button class="btn btn-style btn-primary" style="width:100%;">Place Order</button>

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
        <?php
        include './footer.php';
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
        <script type="text/javascript">
            function payment_method() {
                var paymentoption = $("#paymentoption").val();
                if (paymentoption == "Card") {
                    $("#txt1").show();
                    $("#txt2").show();
                    $("#txt3").show();
                    $("#upitxt").hide();
                    $("#upiimg").hide();
                } else if (paymentoption == "UPI") {
                    $("#txt1").hide();
                    $("#txt2").hide();
                    $("#txt3").hide();
                    $("#upitxt").show();
                    $("#upiimg").show();
                } else {
                    $("#txt1").hide();
                    $("#txt2").hide();
                    $("#txt3").hide();
                    $("#upitxt").hide();
                    $("#upiimg").hide();
                }
            }

            $(document).ready(function() {
                $("#txt1").hide();
                $("#txt2").hide();
                $("#txt3").hide();
                $("#upitxt").hide();
                $("#upiimg").hide();
            });

            $(".uip_id").hide();

            function enter_upi_id() {
                $(".uip_id").show();
            }
        </script>

        <script>
            $("#pay_now").click();
        </script>
        <script type="text/javascript" src="tools/jquery-3.6.0.js"></script>
        <script type="text/javascript" src="tools/jquery.validate.js"></script>
        <script>
            $(document).ready(function() {
                $("#myform").validate();
            });
        </script>
        <style>
            .error {
                color: red;
            }
        </style>
    </body>


    <!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Dec 2022 10:07:38 GMT -->

</html>
<?php
include './bot.php';
?>