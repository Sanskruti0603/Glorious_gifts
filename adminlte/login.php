<?php
session_start();
include './connection.php';

if ($_POST) {
  $email = $_POST['txt1'];
  $password = $_POST['txt2'];

  $q = mysqli_query($connection, "select * from tbl_admin where 
    admin_email='{$email}' and admin_password ='{$password}'");
  $count = mysqli_num_rows($q);
  $row = mysqli_fetch_array($q);
  if ($count == 1) {
    $_SESSION['aid'] = $row['admin_id'];
    $_SESSION['aname'] = $row['admin_name'];
    $_SESSION['aemail'] = $row['admin_email'];
    header("location:dashboard.php");
  } else {
    echo "<script>alert('Login Failed');</script>";
  }
}
?>


<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


</head>

<body class="hold-transition login-page">


  <div class="login-box">
    <div class="login-logo">
      <a href="login.php"><b>Admin</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg"><b>Login</b></p>

        <form method="post" id="myForm">
          <div class="row">
            <div class="col-12">
              <div class="input-group mb-3">
                <input type="email" name="txt1" class="form-control" placeholder="Email" required>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="input-group mb-3">
                <input type="password" name="txt2" class="form-control" placeholder="Password" required>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Remember Me
                </label>
              </div>
            </div> -->
            <br><br>
            <!-- /.col -->
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">Login</button>
            </div>
            <!-- /.col -->
          </div>
        </form>


        <!-- /.social-auth-links -->
        <br>
        <p class="mb-1">
          <a href="forgotpassword.php">forgot password</a>
        </p>

      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->

  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- jquery-validation -->
  <script src="plugins/jquery-validation/jquery.validate.min.js"></script>
  <script src="plugins/jquery-validation/additional-methods.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#myForm').validate({
        rules: {
          txt1: {
            required: true,
            email: true,
          },
          txt2: {
            required: true,
            minlength: 5
          },
        },
        messages: {
          txt1: {
            required: "Please enter a email address",
            email: "Please enter a vaild email address"
          },
          txt2: {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long"
          },
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        }
      });
    });
  </script>
</body>

</html>