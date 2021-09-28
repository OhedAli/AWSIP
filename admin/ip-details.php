<?php $pagetitle = "ADD IP Details"; include_once "includes/autoload.php"; ?>

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
						         <input type="number" required="" id="myInput" name="price" class="form-control" placeholder="Package Price per month">
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
						         	<option value="Private Proxy">Private Proxy</option>
						         	<option value="Premium Proxy">Premium Proxy</option>
						         	<option value="World Dedicated Proxy">World Dedicated Proxy</option>
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
						         	<option value="Exclusive Proxies">Exclusive Proxies</option>
						         	<option value="Un-Exclusive Proxies">Un-Exclusive Proxies</option>
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
						         	<option value="Unlimited Bandwidth">Unlimited Bandwidth</option>
						         	<option value="Limited Bandwidth">Limited Bandwidth</option>
						         </select>
						          <div class="input-group-append">
						            <div class="input-group-text">
						              <!-- <span class="fas fa-address-book"></span> -->
						            </div>
						          </div>
						        </div>
						        <br>
						        <div class="input-group mb-8">
						         <input type="number" required="" id="myInput" name="speed" class="form-control" placeholder="Speed in MBPS">
						          <div class="input-group-append">
						            <div class="input-group-text">
						              <!-- <span class="fas fa-address-book"></span> -->
						            </div>
						          </div>
						        </div>
						        <br>
						        <div class="input-group mb-8">
						         <input type="text" required="" id="myInput" name="location" class="form-control" placeholder="Enter Location">
						          <div class="input-group-append">
						            <div class="input-group-text">
						              <!-- <span class="fas fa-address-book"></span> -->
						            </div>
						          </div>
						        </div>
						        <br>
						        <div class="input-group mb-8">
						         <input type="number" required="" id="myInput" name="uptime" class="form-control" placeholder="Uptime in Percentage %">
						          <div class="input-group-append">
						            <div class="input-group-text">
						              <!-- <span class="fas fa-address-book"></span> -->
						            </div>
						          </div>
						        </div>
						        </br>
						       
						        <div class="row">
						          <div class="col-12">
						            <input type="submit" name="packbtn" class="btn btn-primary btn-block" value="Create Package">
						          </div>
						          <!-- /.col -->
						        </div>
						      </form>
						      <?php
                                    if(isset($_POST['packbtn'])){
                                        $price= $_REQUEST['price'];
                                        $iptitle = $_REQUEST['iptitle'];
                                        $proxyname = $_REQUEST['proxyname'];
                                        $bandwidth = $_REQUEST['bandwidth'];
                                        $speed = $_REQUEST['speed'];
                                        $location = $_REQUEST['location'];
                                        $uptime = $_REQUEST['uptime'];
                                        $dd = date("d");
                                        $mm = date("M");
                                        $yyyy = date("Y");
                                        $sql = "INSERT INTO ip_details (price,iptitle,proxyname,bandwidth,speed,location,uptime,dd,mm,yyyy) VALUES('$price','$iptitle','$proxyname','$bandwidth','$speed','$location','$uptime','$dd','$mm','$yyyy')";
                                        $result=mysqli_query($conn,$sql);
                                        if($result){
                                            echo "<b style='color:green';>Package Creation Completed</b>";
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




