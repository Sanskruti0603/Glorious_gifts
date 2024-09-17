<?php
  include './connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Glorious Gift</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
 <?php
    include './themepart/header-menu.php';
 ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 <?php
 include './themepart/sidebar.php';
 ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="card" style="width: 12rem;height:12rem;margin-left:10px;background-color:#A9CCE3;">
          <div class="card-body">
            <h5><b>Admin</b></h5>
          
            <p class="card-text">
             <?php
               $dq = mysqli_query($connection,"select * from tbl_admin");

               if($total_admin=mysqli_num_rows($dq))
               {
                  echo "<h4 class=mb-0>".$total_admin."</h4>";
               }
               else
               {
                echo "<h4 class=mb-0>NO DATA</h4>";
               }
     
              ?>
            </p>
           
          </div>
          <a href="table.php" class="card-link" style="margin-bottom:9px;margin-left:10px;">View Details</a>
        </div>

        <div class="card" style="width: 12rem;height:12rem;margin-left:10px;background-color:#A3E4D7;">
          <div class="card-body">
            <h5><b>Users</b></h5>
            <p class="card-text">
             <?php
               $dq = mysqli_query($connection,"select * from tbl_user");

               if($total_user=mysqli_num_rows($dq))
               {
                  echo "<h4 class=mb-0>".$total_user."</h4>";
               }
               else
               {
                echo "<h4 class=mb-0>NO DATA</h4>";
               }
     
              ?>
            </p>
            </div>
          <a href="user-table.php" class="card-link" style="margin-bottom:9px;margin-left:10px">View Details</a>
        </div>

        <div class="card" style="width: 12rem;height:12rem;margin-left:10px;background-color:#D7BDE2;">
          <div class="card-body">
            <h5 ><b>Categories</b></h5>
            <p class="card-text">
             <?php
               $dq = mysqli_query($connection,"select * from tbl_category");

               if($total_category=mysqli_num_rows($dq))
               {
                  echo "<h4 class=mb-0>".$total_category."</h4>";
               }
               else
               {
                echo "<h4 class=mb-0>NO DATA</h4>";
               }
     
              ?>
            </p>
            </div>
          <a href="category-table.php" class="card-link" style="margin-bottom:9px;margin-left:10px">View Details</a>
        </div>


        <div class="card" style="width: 12rem;height:12rem;margin-left:10px;background-color:#A3E4D7">
          <div class="card-body">
            <h5><b>Products</b></h5>
          
            <p class="card-text">

            <?php
               $dq = mysqli_query($connection,"select * from tbl_product");

               if($total_product=mysqli_num_rows($dq))
               {
                  echo "<h4 class=mb-0>".$total_product."</h4>";
               }
               else
               {
                echo "<h4 class=mb-0>NO DATA</h4>";
               }
     
              ?>
            </p>
            </div>
          <a href="product-table.php" class="card-link" style="margin-bottom:9px;margin-left:10px">View Details</a>
        </div>

        <div class="card" style="width: 12rem;height:12rem;margin-left:10px;background-color:#A9CCE3;">
          <div class="card-body">
          <h5><b>Total Sales</b></h5>
          
          <p class="card-text">

          <?php
             $dq = mysqli_query($connection,"select * from tbl_ordermaster");

             if($total_order=mysqli_num_rows($dq))
             {
                echo "<h4 class=mb-0>".$total_order."</h4>";
             }
             else
             {
              echo "<h4 class=mb-0>NO DATA</h4>";
             }
   
            ?>
          </p>
            </div>
          <a href="ordermaster-table.php" class="card-link" style="margin-bottom:9px;margin-left:10px">View Details</a>
        </div>
      </div>
    </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  
    <!-- Content Header (Page header) -->
   
    <!-- /.content-header -->

    <!-- Main content -->
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
   
  
<?php
    include './themepart/footer.php';
?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard3.js"></script>
</body>
</html>
