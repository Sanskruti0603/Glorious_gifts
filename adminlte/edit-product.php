<?php
  include './connection.php';
  
    $editid=$_GET['eid'];

    if(!isset($_GET['eid']))
    {
        header("location:product-table.php");
    }
    $eq=mysqli_query($connection,"select * from tbl_product where product_id='{$editid}'");
    $data=mysqli_fetch_array($eq);

  if($_POST)
  {
    $name=$_POST['txt1'];
    $details=$_POST['txt2'];
    $photo=$_POST['txt3'];
    $price=$_POST['txt4'];
    $categoryid=$_POST['txt5'];
    $productquantity=$_POST['txt6'];

    $q=mysqli_query($connection,"update tbl_product set product_name='{$name}',
    product_details='{$details}',product_photo='{$photo}',product_price='{$price}',category_id='{$categoryid}',product_quantity='{$productquantity}' where product_id='{$editid}'");

     if($q)
     {
      echo "<script>alert('Record updated!');window.location='product-table.php'</script>";
     }
  }
?>
 <!DOCTYPE html>
<html>
<head>
<script src="jquery-3.7.1.min.js" type="text/javascript"></script>
  <script src="jquery.validate.js" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      $("#myform").validate();
    });
    </script>
    <style>
      .error 
      {
        color:red;
      }
      </style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Validation Form</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
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
            <h1>Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Forms</li>
              <li class="breadcrumb-item active">Product</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-8">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"> <small></small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  method="post" id="myform"d >
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="txt1" value="<?php echo $data['product_name']?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Details</label>
                    <input type="text" name="txt2" value="<?php echo $data['product_details']?>" class="form-control" id="exampleInputPassword1" placeholder="Enter Email"required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Photo</label>
                    <input type="text" name="txt3" value="<?php echo $data['product_photo']?>" class="form-control" id="exampleInputPassword2" placeholder="Enter Password"required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>
                    <input type="number" name="txt4" value="<?php echo $data['product_price']?>" class="form-control" id="exampleInputPassword3" placeholder="Enter Price"required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Category id</label>
                    <input type="text" name="txt4" value="<?php echo $data['category_id']?>" class="form-control" id="exampleInputPassword4" placeholder="Enter Category id"required>
                  </div>
                  <div class="form-group">Quantity</label>
                    <input type="text" name="txt4" value="<?php echo $data['product_quantity']?>" class="form-control" id="exampleInputPassword5" placeholder="Enter Quantity"required>
                  </div>
                  <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                      <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="submit" class="btn btn-primary">
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 <?php 
 
 include './themepart/footer.php';
 ?>


  
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      //alert( "Form successful submitted!" );
    }
  });
  $('#quickForm').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5
      },
      terms: {
        required: true
      },
    },
    messages: {
      email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
</body>
</html>
