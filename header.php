<style>
    .nav-link {
        background-color: none;
    }
</style>

<!--/Header-->
<header id="site-header" class="fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light stroke py-lg-0">
            <h1><a class="navbar-brand pe-xl-5 pe-lg-4" href="index.html">
                    <span class="w3yellow">Glorious</span>Gifts
                </a></h1>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-lg-auto my-2 my-lg-0 navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="index.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="shop.php">Shop</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#Pages" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categories <span class="fa fa-angle-down ms-1"></span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <?php

                            $cq = mysqli_query($connection, "select * from tbl_category");
                            while ($cdata = mysqli_fetch_array($cq)) {
                                echo "<li ><a class='dropdown-item' href='shop.php?category_id={$cdata['category_id']}&category_name={$cdata['category_name']}'>{$cdata['category_name']}</a></li>";
                            }
                            ?>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <?php
                    if (isset($_SESSION['uid'])) {
                    ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#Pages" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Hi, <?php echo $_SESSION['uname']; ?> <span class="fa fa-angle-down ms-1"></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item pt-2" href="view-profile.php">Profile</a></li>
                                <li><a class="dropdown-item pt-2" href="change-password.php">Change Password</a></li>
                                <li><a class="dropdown-item pt-2" href="view-feedback.php">View Feedback</a></li>
                                <li><a class="dropdown-item" href="view-order.php">My Order</a></li>
                                <li><a href='logout.php' class='dropdown-item'>Logout</a></li>
                            </ul>
                        </li>

                </ul>
                </li>
            <?php


                        // echo "<li><a href='login.php' class='nav-link'>Hii {$_SESSION['uname']}</a></li>";

                    } else {
                        echo "<li><a href='login.php' class='nav-link'>Login</a></li>";
                    }
            ?>

            <li class="nav-item search-right">
                <a href="#search" class="btn search-btn" title="search"><span class="fas fa-search me-2" aria-hidden="true"></span></a>
                <!-- search popup -->
                <div id="search" class="pop-overlay">
                    <div class="popup">
                        <h3 class="title-w3l two mb-4 text-left">Search Here</h3>
                        <form action="shop.php" method="GET" class="search-box d-flex position-relative">
                            <input type="search" placeholder="Search for Gifts" name="search" required="required" style="color:white" autofocus="">
                            <button type="submit" class="btn"><span class="fas fa-search" aria-hidden="true"></span></button>
                        </form>
                    </div>
                    <a class="close" href="#close">×</a>
                </div>
                <!-- /search popup -->
            </li>
            </ul>
            <!--/search-right-->



            <div class="popup">
                <?php
                if (isset($_SESSION['uid'])) {
                ?>

                    <button type="submit" class="btn"><a href="view-profile.php"><span class="fas fa-user" aria-hidden="true"></span></a> </button>
                <?php
                }
                ?>

                <button type="submit" class="btn"><a href="wishlist.php"><span class="fas fa-heart" aria-hidden="true"></span></a> </button>

            </div>

            </div>
            <ul class="header-search me-lg-4 d-flex">
                <li class="get-btn me-2">
                    <a href="cart.php" class="btn btn-style btn-primary" title="search"><i class="fas fa-shopping-bag me-lg-2"></i> <span class="btn-texe-inf">Cart</span></a>
                </li>

            </ul>
            <!--//search-right-->
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