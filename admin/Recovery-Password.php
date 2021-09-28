<?php $pagetitle = "Recovery Password"; include_once "includes/autoload.php"; ?>
<div class="content-wrapper">
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3"></div>
					<div class="col-md-6" style="margin-top: 35px;">
						<div class="login-box">
						  <div class="login-logo">
						    <a href="#"><b>Password</b>Change</a>
						  </div>
						  <!-- /.login-logo -->
						  <div class="card">
						    <div class="card-body login-card-body">
						      <p class="login-box-msg">You are only one step a way from your new password, recover your password now.</p>

						      <form method="POST" id="quickForm">
						        <div class="input-group mb-3">
						          <input type="password" required="" id="myInput" name="oldpassword" class="form-control" placeholder="Old Password">
						          <div class="input-group-append">
						            <div class="input-group-text">
						              <span class="fas fa-lock"></span>
						            </div>
						          </div>
						        </div>
						        <div class="input-group mb-3">
						          <input type="password" id="myInput" minlength="6" required="" name="newpassword" class="form-control myInput" placeholder="New Password">
						          <div class="input-group-append">
						            <div class="input-group-text">
						              <span class="fas fa-lock"></span>
						            </div>
						          </div>
						        </div>
						        <div class="input-group mb-3">
						          <input type="password" id="myInput" minlength="6" required="" name="renewpassword" class="form-control myInput" placeholder="Confirm Password">
						          <div class="input-group-append">
						            <div class="input-group-text">
						              <span class="fas fa-lock"></span>
						            </div>
						          </div>
						        </div>
						       	<!-- <input type="hidden" name="passid" value="<?php echo $row2['id'];?>"> -->
						        <input type="checkbox" onclick="myFunction()">&nbsp;Show Password
						        <div class="row">
						          <div class="col-12">
						            <input type="submit" name="repassbtn" class="btn btn-primary btn-block" value="Change password">
						          </div>
						          <!-- /.col -->
						        </div>
						      </form>
						    </div>
						    <!-- /.login-card-body -->
						  </div>
						</div>
						<!-- /.login-box -->
					</div>
				</div>
			</div>
		<div class="col-md-3"></div>
	</div>
</div>
<?php
$pass = "SELECT password FROM admin ";
$res = mysqli_query($conn,$pass);
mysqli_num_rows($res);
$rowss = mysqli_fetch_assoc($res);

echo md5($rowss['password']);
?>


<?php include_once "includes/footer.php"; ?>

<script>
	function myFunction() {
	  var x = document.getElementsByClassName("myInput");
	  if (x['0'].type == "password") {
	    x['0'].type = "text";
	    x['1'].type = "text";
	  } else {
	    x['0'].type = "password";
	    x['1'].type = "password";
	  }
	}
</script>

<?php 
	if (isset($_POST['repassbtn'])){
		$passid = $_SESSION['admin_info']['id'];
		$oldpassword = passencrypt($_REQUEST['oldpassword']);
		$newpassword = passencrypt($_REQUEST['newpassword']);
		$renewpassword = passencrypt($_REQUEST['renewpassword']);
		$sql1 = "SELECT * FROM admin WHERE password = '$oldpassword' ";
		$result1 = mysqli_query($conn,$sql1);
		if(mysqli_num_rows($result1) > 0){
			if ($newpassword == $renewpassword) {
				$result = mysqli_query($conn,"UPDATE admin SET password = '$newpassword' WHERE id = '$passid' ");
				if ($result){
					echo "<script>alert('Password Update Successfull')</script>";
				}else{
					echo "<script>alert('Something went wrong')</script>";
				}
			}else{
				echo "<script>alert('Password not Match.!')</script>";
			}
		}else{
			echo "<script>alert('Enter Valid Password.!')</script>";
		}
	}

 ?>