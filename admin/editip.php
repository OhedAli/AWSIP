<?php $pagetitle = "Update IP Details"; include_once "includes/autoload.php"; ?>

<?php
	$ipid = $_GET['ipid'];
	$sql = "SELECT * FROM ip_details WHERE id = '$ipid'";
	$result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    }else{
      $row = "Null";
    }
?>


<div class="content-wrapper">
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3"></div>
					<div class="col-md-6" style="margin-top: 10px;">
						<div class="login-box" style="width:500px;">
						  <div class="login-logo">
						    <a href="#"><b>Package</b>Create</a>
						  </div>
						  <!-- /.login-logo -->
						  <div class="card">
						    <div class="card-body login-card-body">
						      <p class="login-box-msg">You are only one step a way from your new Package Creation.</p>

						      <form method="POST" id="quickForm" enctype="multipart/form-data">
						        <div class="input-group mb-8">
						         <input type="number" required="" value="<?php echo $row['price']; ?>" id="myInput" name="price" class="form-control" placeholder="Package Price per month">
						          <div class="input-group-append">
						            <div class="input-group-text">
						              <!-- <span class="fas fa-address-book"></span> -->
						            </div>
						          </div>
						        </div>
						        </br>
								<div class="input-group mb-8">
						         <select class="form-control" name="iptitle" required="" id="myInput">
						         	<option value="0">Select Package title</option>
						         	<option value="Private Proxy" <?php if ($row['iptitle'] == 'Private Proxy') { echo "selected";} ?>>Private Proxy</option>
						         	<option value="Premium Proxy" <?php if ($row['iptitle'] == 'Premium Proxy') { echo "selected";} ?>>Premium Proxy</option>
						         	<option value="World Dedicated Proxy" <?php if ($row['iptitle'] == 'World Dedicated Proxy') { echo "selected";} ?>>World Dedicated Proxy</option>
						         </select>
						          <div class="input-group-append">
						            <div class="input-group-text">
						              <!-- <span class="fas fa-address-book"></span> -->
						            </div>
						          </div>
						        </div>
						        <br>
						        <div class="input-group mb-8">
						         <select class="form-control" name="proxyname" required="" id="myInput">
						         	<option value="0">Select Proxy Name</option>
						         	<option value="Exclusive Proxies" <?php if ($row['proxyname'] == 'Exclusive Proxies') { echo "selected";} ?>>Exclusive Proxies</option>
						         	<option value="Un-Exclusive Proxies" <?php if ($row['proxyname'] == 'Un-Exclusive Proxies') { echo "selected";} ?>>Un-Exclusive Proxies</option>
						         </select>
						          <div class="input-group-append">
						            <div class="input-group-text">
						              <!-- <span class="fas fa-address-book"></span> -->
						            </div>
						          </div>
						        </div>
						        <br>
						        <div class="input-group mb-8">
						         <select class="form-control" name="bandwidth" required="" id="myInput">
						         	<option value="0">Select Proxy Bandwidth</option>
						         	<option value="Unlimited Bandwidth" <?php if ($row['bandwidth'] == 'Unlimited Bandwidth') { echo "selected";} ?>>Unlimited Bandwidth</option>
						         	<option value="Limited Bandwidth" <?php if ($row['bandwidth'] == 'Limited Bandwidth') { echo "selected";} ?>>Limited Bandwidth</option>
						         </select>
						          <div class="input-group-append">
						            <div class="input-group-text">
						              <!-- <span class="fas fa-address-book"></span> -->
						            </div>
						          </div>
						        </div>
						        <br>
						        <div class="input-group mb-8">
						         <input type="number" required="" value="<?php echo $row['speed'] ?>" id="myInput" name="speed" class="form-control" placeholder="Speed in MBPS">
						          <div class="input-group-append">
						            <div class="input-group-text">
						              <!-- <span class="fas fa-address-book"></span> -->
						            </div>
						          </div>
						        </div>
						        <br>
						        <div class="input-group mb-8">
						         <input type="text" required="" value="<?php echo $row['location'] ?>" id="myInput" name="location" class="form-control" placeholder="Enter Location">
						          <div class="input-group-append">
						            <div class="input-group-text">
						              <!-- <span class="fas fa-address-book"></span> -->
						            </div>
						          </div>
						        </div>
						        <br>
						        <div class="input-group mb-8">
						         <input type="number" required="" value="<?php echo $row['uptime'] ?>" id="myInput" name="uptime" class="form-control" placeholder="Uptime in Percentage %">
						          <div class="input-group-append">
						            <div class="input-group-text">
						              <!-- <span class="fas fa-address-book"></span> -->
						            </div>
						          </div>
						        </div>
						        </br>
						       
						        <div class="row">
						          <div class="col-12">
						            <input type="submit" name="packupdatebtn" class="btn btn-primary btn-block" value="Update Package">
						          </div>
						          <!-- /.col -->
						        </div>
						      </form>
						      <?php
                                    if(isset($_POST['packupdatebtn'])){
                                    	if (!empty($_POST['price'])) {$price = $_POST['price'];}else{$price = "";}
									    if (!empty($_POST['iptitle'])) {$iptitle = formvalidation($_POST['iptitle']);}else{$iptitle = "";}
									    if (!empty($_POST['proxyname'])) {$proxyname = formvalidation($_POST['proxyname']);}else{$proxyname = "";}
									    if (!empty($_POST['bandwidth'])) {$bandwidth = $_POST['bandwidth'];}else{$bandwidth = "";}
									    if (!empty($_POST['speed'])) {$speed = $_POST['speed'];}else{$speed = "";}
									    if (!empty($_POST['location'])) {$location = $_POST['location'];}else{$location = "";}
									    if (!empty($_POST['uptime'])) {$uptime = $_POST['uptime'];}else{$uptime = "";}
                                        $result = mysqli_query($conn,"UPDATE ip_details SET price = '$price',  iptitle = '$iptitle',proxyname = '$proxyname',bandwidth = '$bandwidth', speed = '$speed' ,location = '$location', uptime = '$uptime' WHERE id = '$ipid' ");
                                        if($result){
                                            echo "<b style='color:green';>Package Update Completed</b>";
                                            pageredictedto("ip-show?Message=Updated");
                                        }else{
                                            echo "<b style='color:red';>Error! Something Wrong</b>";
                                        }
                                    }
                                ?>
						      
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
<!--end format-->

<?php include_once "includes/footer.php"; ?>




