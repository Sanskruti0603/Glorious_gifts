<?php
session_start();
include './connection.php';
?>

<!doctype html>
<html lang="en">


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/products.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Dec 2022 10:07:32 GMT -->
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

 
</div>

      <!--/Header-->
      <?php 
        include "./header.php";
        ?>

   
         <?php
    $msg = "Products";
         if(isset($_GET['category_id']))
         {
             $cid=$_GET['category_id'];
             $cname=$_GET['category_name'];

             $q= mysqli_query($connection,"select * from tbl_product where category_id='{$cid}'");
             $msg = $cname ." Products";

         }

         else if(isset($_GET['search']))
         {
             $cid=$_GET['search'];
             $q= mysqli_query($connection,"select * from tbl_product where product_name like '%{$cid}%'");
             $msg = $cid ." Products";

         }
         else
         {//$connection = mysqli_connect("localhost","root","","project");
             $q= mysqli_query($connection,"select * from tbl_product ORDER BY RAND()");
         }
         $count=mysqli_num_rows($q);

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
                    <h2 class="inner-w3-title"> <?php  echo $msg; ?> </h2>
                            
                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.php">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Products </li>
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
   <!-- //w3l-ecommerce-main -->
    <section class="w3l-ecommerce-main">
        <!-- /products-->
        <div class="ecom-contenthny w3l-ecommerce-main-inn py-5">
            <div class="container py-lg-5">
                <div class="ecommerce-grids row">
                    <div class="ecommerce-left-hny col-lg-4">
                        <!--/ecommerce-left-hny-->
                        <aside class="pe-lg-4">
                            <div class="sider-bar">
                                <!-- /Gallery-imgs -->

                                <div class="single-gd mb-5">
                                <h4>Search</h4>
                                <form>
                            <div class="form-group">
                                <input type="text" name="search" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Name">
                            </div>
                            <br/>
                            <button type="submit" class="btn btn-primary">Search</button> <br/><br/>
                        </form>
                                    <h4>Product Categories</h4>
                                    <ul class="list-group single">
                                        <?php
                                            $cq = mysqli_query($connection,"select * from tbl_category");
                                            while($cdata=mysqli_fetch_array($cq))
                                            {
                                                echo "<li class='list-group-item d-flex justify-content-between align-items-center'><a href='shop.php?category_id={$cdata['category_id']}&category_name={$cdata['category_name']}'>{$cdata['category_name']}</a></li>";
                                            }
                                        ?>
                                        
                                        <!-- <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Suits
                                            <span class="badge badge-primary badge-pill">18</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Footwear
                                            <span class="badge badge-primary badge-pill">12</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Blazers
                                            <span class="badge badge-primary badge-pill">10</span>
                                        </li> -->
                                    </ul>
                                </div>


                                <!-- <div class="single-gd left-side mb-5">
                                    <h4>Customer Ratings</h4>
                                    <ul class="ratingshyny">
                                        <li>
                                            <a href="#">
                                                <span class="fas fa-star" aria-hidden="true"></span>
                                                <span class="fas fa-star" aria-hidden="true"></span>
                                                <span class="fas fa-star" aria-hidden="true"></span>
                                                <span class="fas fa-star" aria-hidden="true"></span>
                                                <span class="fas fa-star" aria-hidden="true"></span>
                                                <span>5.0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="fas fa-star" aria-hidden="true"></span>
                                                <span class="fas fa-star" aria-hidden="true"></span>
                                                <span class="fas fa-star" aria-hidden="true"></span>
                                                <span class="fas fa-star" aria-hidden="true"></span>
                                                <span class="fas fa-star-half-alt" aria-hidden="true"></span>
                                                <span>4.0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="fas fa-star" aria-hidden="true"></span>
                                                <span class="fas fa-star" aria-hidden="true"></span>
                                                <span class="fas fa-star" aria-hidden="true"></span>
                                                <span class="fas fa-star-half-o" aria-hidden="true"></span>
                                                <span class="fas fa-star-half-alt" aria-hidden="true"></span>
                                                <span>3.5</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="fas fa-star" aria-hidden="true"></span>
                                                <span class="fas fa-star" aria-hidden="true"></span>
                                                <span class="fas fa-star" aria-hidden="true"></span>
                                                <span class="fas fa-star-half-alt" aria-hidden="true"></span>
                                                <span class="fas fa-star-half-alt" aria-hidden="true"></span>
                                                <span>3.0</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="fas fa-star" aria-hidden="true"></span>
                                                <span class="fas fa-star" aria-hidden="true"></span>
                                                <span class="fas fa-star-half-alt" aria-hidden="true"></span>
                                                <span class="fas fa-star-half-alt" aria-hidden="true"></span>
                                                <span class="fas fa-star-half-alt" aria-hidden="true"></span>
                                                <span>2.5</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div> -->

                                <!-- <div class="single-gd mb-5 border-0">
                                    <h4>Recent Products</h4>
                                    <div class="row special-sec1 mt-4">
                                        <div class="col-4 img-deals">
                                            <a href="product-single.html"><img src="assets/images/shop-8.jpg" class="img-fluid radius-image" alt=""></a>
                                        </div>
                                        <div class="col-8 img-deal1">
                                            <h5 class="post-title">
                                                <a href="product-single.html">Blue Sweater</a>
                                            </h5>

                                            <a href="product-single.html" class="price-right">$499.00</a>
                                        </div>

                                    </div>
                                    <div class="row special-sec1 mt-4">
                                        <div class="col-4 img-deals">
                                            <a href="product-single.html"><img src="assets/images/shop-7.jpg" class="img-fluid radius-image" alt=""></a>
                                        </div>
                                        <div class="col-8 img-deal1">
                                            <h5 class="post-title">
                                                <a href="product-single.html">White T-Shirt</a>
                                            </h5>
                                            <a href="product-single.html" class="price-right">$575.00</a>
                                        </div>

                                    </div>

                                </div> -->

                            </div>
                        </aside>
                        <!--//ecommerce-left-hny-->
                    </div>
                    <!-- /row-->
                    <div class="ecommerce-right-hny col-lg-8">
                        <div class="row ecomhny-topbar">
                            <!-- <div class="col-6 ecomhny-result">
                                <h4 class="ecomhny-result-count"> Showing all 9 Results</h4>
                            </div> -->
                            <!-- <div class="col-6 ecomhny-topbar-ordering">

                                <div class="ecom-ordering-select d-flex">
                                    <span class="fa fa-angle-down" aria-hidden="true"></span>
                                    <select>
                                        <option value="menu_order" selected="selected">Default Sorting</option>
                                        <option value="popularity">Sort by Popularity</option>
                                        <option value="rating">Sort by Average rating</option>
                                        <option value="date">Sort by latest</option>
                                        <option value="price">Sort by Price: low to high</option>
                                        <option value="price-desc">Sort by Price: high to low</option>
                                    </select>
                                </div>

                            </div> -->
                        </div>
                        <div class="ecom-products-grids row">

                        <h1><?php  echo $msg; ?></h1>

                      
 
                   <?php
                                
                                while($data=mysqli_fetch_array($q))
                                {
                            ?>
                          <!-- //Product start -->
                            <div class="col-lg-4 col-6 product-incfhny mt-4">
                                <div class="product-grid2">
                                    <div class="product-image2">
                                        <a href="details.php?pid=<?php echo $data['product_id']; ?>">
                                            <img width="150" class="pic-1 img-fluid radius-image"  src="adminlte/uploads/<?php echo $data['product_photo'];?>">
                                            <img width="150" class="pic-2 img-fluid radius-image"  src="adminlte/uploads/<?php echo $data['product_photo'];?>">
                                        </a>
                                        <ul class="social">
                                            <li><a href="details.php?pid=<?php echo $data['product_id']; ?>" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>
                                            
                                        </ul>
                                        <div class="shopv single-item">
                                            <!-- <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart">
                                                <input type="hidden" name="add" value="1">
                                                <input type="hidden" name="shopv_item" value="Pink Bag ">
                                                <input type="hidden" name="amount" value="599.99">
                                                <button type="submit" class="shopv-cart pshopv-cart add-to-cart">
                                                    Add to Cart
                                                </button>
                                            </form> -->
                                        </div>
                                    </div>
                                    <div class="product-content">
                                   
                                       <h3 class="title"><a href="details.php?pid=<?php echo $data['product_id']; ?>"><?php echo $data['product_name']; ?></a></h3>
                                            <span class="price">₹<?php echo $data['product_price']; ?></span>
                                    </div>
                                </div>

                            </div> 
                            <?php
                                }
                            ?>
                                
                            <!-- //Product start -->
                        </div>
 
                    </div>
                </div>

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


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/07-12-2021/shoppykart-liberty-demo_Free/1589417704/web/products.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Dec 2022 10:07:33 GMT -->
</html>
<?php
include './bot.php';
?>