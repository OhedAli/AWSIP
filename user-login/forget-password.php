<?php session_start();
  include_once("../admin/includes/config.php");
  include_once("../admin/includes/functions.php");
  if (!empty($_SESSION['user_admin_info'])) {
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
                <h3 class="card-title"><b>Forget </b><small>Password</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email-Id">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="submit" name="loginbtn" class="btn btn-outline-primary" value="Submit">
                  <a href="index" class="btn btn-outline-primary" style="margin-left: 70%;">
	                  <b>LogIn</b>
	              	</a>
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
			    },
			    messages: {
			      email: {
			        required: "Please enter a email address",
			        email: "Please enter a vaild email address"
			      },
			    },
			    errorElement: 'span',
			    errorPlacement: function (error, element) {
			      error.addClass('invalid-feedback');
			      element.closest('.form-group').append(error);
			    }
			    
			  });
			});
		</script>
	</body>
</html>

<?php
	if (isset($_POST['loginbtn'])){
		$email = $_POST['email'];
		$sql = mysqli_query($conn,"SELECT * FROM user WHERE email = '$email' ");
		$userrow = mysqli_num_rows($sql);
		if ($userrow > 0) {
			$row = mysqli_fetch_assoc($sql);
			$email = $row['email'];
			$password = $row['password'];
			$subject = "<h3> Username And Password Recovery</h3><br>";
			$msg = "<b>User Email Id:".$email."</b><br>";
			$msg .= "<b>User Password:".$password."</b><br>";
			$to = $email;
			$headers = "From: info@gmail.com";
			mail($to, $subject, $msg, $headers);
			echo "<script type='text/javascript'>alert('Password has been sent to your registered Email-Id.');</script>";
		}else{
			echo "<script type='text/javascript'>alert('Email-Id is Invalid.');</script>";
		}
	}

?>




