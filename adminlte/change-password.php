<?php
session_start();
include './connection.php';
if (!isset($_SESSION['aid'])) {
  echo "<script>alert('login Required!');window.location='login.php';</script>";
}



include './connection.php';

if ($_POST) {
  $opass = $_POST['txt1'];
  $npass = $_POST['txt2'];
  $cpass = $_POST['txt3'];
  $aid = $_SESSION['aid'];

  $oq = mysqli_query($connection, "select * from tbl_admin where admin_id='{$aid}'");
  $odata = mysqli_fetch_array($oq);
  if ($odata['admin_password'] == $opass) {
    if ($npass == $cpass) {
      if ($opass == $npass) {
        echo "<script>alert('New and old password can not be same');</script>";
      } else {
        $uq = mysqli_query($connection, "update tbl_admin set admin_password='$npass' where admin_id='$aid'");
        echo "<script>alert('PASSWORD UPDATED!');</script>";
      }
    } else {
      echo "<script>alert('New and confirm password must  be same');</script>";
    }
  } else {
    echo "<script>alert(' old password not match');</script>";
  }
}


// $q = mysqli_query($connection,"select * from tbl_admin where admin_email='{$email}' and admin_password ='{$password}'");
// $count = mysqli_num_rows($q);
// $row = mysqli_fetch_array($q);
// if($count==1)
// {
//    $_SESSION['aid'] = $row['admin_id'];
//    $_SESSION['aname'] = $row['admin_name'];
//    $_SESSION['aemail'] = $row['admin_email'];
//   header("location:widgets.html");
// }else{
//     echo "<script>alert('Login Failed');</script>";
// }

?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin GG | Log in</title>
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
      <a href="index2.html"><b>Admin</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg"><b>Change Password</b></p>

        <form method="post" id="myForm">
          <div class="row">
            <div class="col-12">
              <div class="input-group mb-3">
                <input type="password" name="txt1" class="form-control" placeholder="Old Password" required>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="input-group mb-3">
                <input type="password" name="txt2" class="form-control" placeholder="New Password" required>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="input-group mb-3">
                <input type="password" name="txt3" class="form-control" placeholder="Confirm Password" required>
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
  <script src="plugins/jquery-validation/jquery.validate.min.js"></script>
  <script src="plugins/jquery-validation/additional-methods.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#myForm').validate({
        rules: {
          txt1: {
            required: true,
            minlength: 5
          },
          txt2: {
            required: true,
            minlength: 5
          },
          txt3: {
            required: true,
            minlength: 5
          },
        },
        messages: {
          txt1: {
            required: "Please enter a email address",
            minlength: "Your password must be at least 5 characters long"
          },
          txt2: {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long"
          },
          txt3: {
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