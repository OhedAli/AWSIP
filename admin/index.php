<?php session_start();
  include_once("includes/config.php");
  include_once("includes/functions.php");
  if (!empty($_SESSION['admin_info'])) {
  echo "<script>window.location.href= 'home';</script>";
 }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Log-In</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <style type="text/css">
  	body{
  		background-image: url('images/login.jpg');
  		opacity: 0.8;
  	}
  </style>
</head>

<body class="hold-transition sidebar-mini">
    <section class="content">
      <div class="container-fluid">
        <div class="row" style="margin-top: 120px;">
          <!-- left column -->
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><b>Admin </b><small>Log-In</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email-Id">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
<!--                   <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                      <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
                    </div>
                  </div> -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                	<div class="row">
	                  <div class="col-md-6">
	                  	<input type="submit" name="loginbtn" class="btn btn-primary" value="LogIn">
	                  </div>
	                  <div class="col-md-6 text-right">
	                  	<a href="#">Forget Password</a>
	              	  </div>
                	</div>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
            <div class="col-md-3"></div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6"></div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </section>

	  <!-- Control Sidebar -->
	  <aside class="control-sidebar control-sidebar-dark">
	    <!-- Control sidebar content goes here -->
	  </aside>
	  <!-- /.control-sidebar -->

	<!-- jQuery -->
	<script src="assets/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- jquery-validation -->
	<script src="assets/plugins/jquery-validation/jquery.validate.min.js"></script>
	<script src="assets/plugins/jquery-validation/additional-methods.min.js"></script>
	<!-- AdminLTE App -->
	<script src="assets/dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="assets/dist/js/demo.js"></script>
		<script type="text/javascript">
			$(document).ready(function () {
			  $.validator.setDefaults({
			    // submitHandler: function () {
			    //   alert( "Form successful submitted!" );
			    // }
			  });
			  $('#quickForm').validate({
			    rules: {
			      email: {
			        required: true,
			        email: true,
			      },
			      password: {
			        required: true,
			        minlength: 6
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
			        minlength: "Your password must be at least 6 characters long"
			      },
			      //terms: "Please accept our terms"
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

<?php
	if (isset($_POST['loginbtn'])) {
		$email = $_REQUEST['email'];
		$password = passencrypt($_REQUEST['password']);
		$sql = "SELECT * FROM admin WHERE user_id = '$email' AND password = '$password' ";
		$result = mysqli_query($conn,$sql);
    	$num = mysqli_num_rows($result);
		if ($num > 0) {
			$_SESSION['admin_info'] = mysqli_fetch_assoc($result);
			echo "<script>window.location.href= 'home';</script>";
		}else{
			echo "<script>alert( 'Wrong Username or Password Combination... ! ')</script>";
		}
	}
?>