<script>
  function checkdelete()
  {
    return confirm("sure?");
  }
</script>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | DataTables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Shipping</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tables</li>
              <li class="breadcrumb-item active">Shipping</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <!-- <h3 class="card-title">Shipping</h3> -->
 
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Shipping ID</th>
                      <th>User mobile number</th>
                      <th>Shipping address</th>
                      <th>Shipping name</th>
                      <th>Order ID</th>
                      <th>Shipping Date</th>
    
                    </tr>
                  </thead>
                  <tbody>
                   <?php
                    include './connection.php';

                    if(isset($_GET['did']))
                    {
                        $deleteid=$_GET['did'];
                        $dq=mysqli_query($connection,"delete from tbl_shipping where shipping_id='{$deleteid}'");

                        if($dq)
                        {
                          echo "<script>alert('Record deleted!');</script>";
                         }
                    }
                    $sq=mysqli_query($connection,"select * from tbl_shipping");
                    
                    while($data=mysqli_fetch_array($sq))
                    {
                      $oq=mysqli_query($connection,"select * from tbl_ordermaster where order_id='{$data['order_id']}'");
                      $odata=mysqli_fetch_array($oq);
                      // $pq=mysqli_query($connection,"select * from tbl_ where product_id='{$data['product_id']}'");
                      // $pdata=mysqli_fetch_array($pq);
                      echo "<tr>";
                      echo "<td>{$data['shipping_id']}</td>";
                      echo "<td>{$data['user_mobile']}</td>";
                      echo "<td>{$data['shipping_address']}</td>";
                      echo "<td>{$data['shipping_name']}</td>";
                      echo "<td>{$odata['order_id']}</td>";
                      echo "<td>{$data['shipping_date']}</td>";
                    // echo "<td><a href='edit-shipping.php?eid={$data['shipping_id']}'>Edit</a> |
                    //   <a href='shipping-table.php?did={$data['shipping_id']}' onclick='return checkdelete();'>Delete</a></td>";
                    //   echo "</tr>";
                    }
                
                   ?>
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
  <!-- /.content-wrapper -->
  
 
</div>
<?php 
 
 include './themepart/footer.php';
 ?>

<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
