<?php include_once"includes/autoload.php";?>

    <!-- ##### Register Now Start ##### -->
    <section class="register-now section-padding-100-0 d-flex justify-content-between align-items-center" style="background-image: url(img/core-img/texture.png);">
        <!-- Register Contact Form -->
        <div class="register-contact-form mb-100 wow fadeInUp" data-wow-delay="250ms">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="forms">
                            <h4>Contact Us</h4>
                            <form method="POST">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="name" required="" class="form-control" id="text" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" required="" name="email" id="email" placeholder="Email-Id">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <input type="number" name="phone" required="" class="form-control" id="phone" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="message" required="" class="form-control" id="site" placeholder="Message">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <input type="submit" name="messagebtn" class="btn clever-btn w-100" value="Send Message">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Register Now Countdown -->
        <div class="register-now-countdown mb-100 wow fadeInUp" data-wow-delay="500ms">
            <h3>Register Now</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fermentum laoreet elit, sit amet tincidunt mauris ultrices vitae. Donec bibendum tortor sed mi faucibus vehicula. Sed erat lorem</p>
            <!-- Register Countdown -->
            <div class="register-countdown">
                <div class="events-cd d-flex flex-wrap" data-countdown="2019/03/01"></div>
            </div>
        </div>
    </section>
    <!-- ##### Register Now End ##### -->

    <!-- ##### Upcoming Events Start ##### -->
    <section class="upcoming-events section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Book Your Own IP</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Upcoming Events -->
                <?php
                    $sql = "SELECT * FROM ip_details WHERE status = 1 ORDER BY id DESC LIMIT 3";
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                ?>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-upcoming-events mb-50 wow fadeInUp" data-wow-delay="250ms">
                        <!-- Events Thumb -->
                        <div style="text-align:center;">
                            
                            <p><b><i class="fa fa-inr" aria-hidden="true" style="font-size: 24px;color:blue;"></i><span style="font-size:100px;color: green;"><?php echo $row['price']; ?></span>/mo</b></p>
                            <p style="font-size:25px;"><b><?php echo $row['iptitle']; ?></b></p>
                            <p><b><?php echo $row['proxyname']; ?></b></p>
                            <p><b><?php echo $row['bandwidth']; ?></b></p>
                            <p><b><?php echo "Upto"." ".$row['speed']." "."MBPS Speed"; ?></b></p>
                            <p><b><?php echo "Location"." ".$row['location']; ?></b></p>
                            <p><b><?php echo $row['uptime']." "."%"; ?></b></p>
                            <p><b>24x7 Service</b></p>
                            <!-- <h6 class="event-date">20/03/2020</h6> -->
                            <!-- <h4 class="event-title">this is title</h4> -->
                        </div>
                        <!-- Date & Fee -->
                        <div class="date-fee d-flex justify-content-between">
                            <div class="date">
                                <p><i class="fa fa-clock"></i><?php echo $row['dd']."-".$row['mm']."-".$row['yyyy']; ?></p>
                            </div>
                            <div class="events-fee">
                                <a href="#" data-toggle="modal" data-target="#exampleModalCenter">buynow</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                        }
                    }
                ?>
                
            </div>
        </div>
    </section>
    <!-- ##### Upcoming Events End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <section class="blog-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>From Our Blog</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Blog Area -->
                <div class="col-12 col-md-6">
                    <div class="single-blog-area mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <img src="<?php echo ASSETS;?>/img/blog-img/1.jpg" alt="">
                        <!-- Blog Content -->
                        <div class="blog-content">
                            <a href="#" class="blog-headline">
                                <h4>English Grammer</h4>
                            </a>
                            <div class="meta d-flex align-items-center">
                                <a href="#">Sarah Parker</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Art &amp; Design</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis</p>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Area -->
                <div class="col-12 col-md-6">
                    <div class="single-blog-area mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <img src="<?php echo ASSETS;?>/img/blog-img/2.jpg" alt="">
                        <!-- Blog Content -->
                        <div class="blog-content">
                            <a href="#" class="blog-headline">
                                <h4>English Grammer</h4>
                            </a>
                            <div class="meta d-flex align-items-center">
                                <a href="#">Sarah Parker</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Art &amp; Design</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Blog Area End ##### -->

    <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" >
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">User Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" id="addForm">
        <div class="modal-body">
            <!-- <div id="showerrorresult" style="color: red;display: none;"><b>Please fill all the field !</b></div> -->
             <div class="alert" id="showerrorresult" style="display: none;background-color: red;">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                <strong style="color:white;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please fill all the field !</strong>
             </div>

            <b>Name : <span style="color:red;">*</span></b>
            <input type="text" class="form-control" name="name" id="name" required="" placeholder="Enter your name">
            <br>
            <b>Email : <span style="color:red;">*</span></b>
            <input type="email" class="form-control" name="email" required="" id="emailidneed" placeholder="Enter your Email">
            <br>
            <b>Phone : <span style="color:red;">*</span></b>
            <input type="number" class="form-control" name="phone" required="" id="phonenumber" placeholder="Enter your Phone number">
            <br>
            <b>Password : (minimum 6 character) <span style="color:red;">*</span></b>
            <input type="password" class="form-control" minlength="6" name="pass1" required="" id="pass1" placeholder="Enter new password">
            <br>
            <b>No of IP : <span style="color:red;">*</span></b>
            <input type="number" class="form-control" name="ipno" required="" id="ipno" placeholder="Number of IP">
            <br>
            <b>Validity(days) : <span style="color:red;">*</span></b>
            <input type="number" class="form-control" name="validity" required="" id="validity" value="30" disabled="">
            <br>
            <b>Select Country : <span style="color:red;">*</span></b>
            <select name="country" class="form-control" required="" id="country">
                <option value="0">Select Country</option>
                <option value="India">India</option>
            </select>
            <br>
            <b>Protocol : <span style="color:red;">*</span></b>
            <select name="protocol" class="form-control" required="" id="protocol">
                <option value="0">Select Protocol</option>
                <option value="HTTP">HTTP</option>
                <option value="HTTPS">HTTPS</option>
            </select>
            <br>
            <div class="alert" id="showresult" style="display: none;background-color: green;">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                <strong style="color:white;">&nbsp;&nbsp;Your IP has been Booked.Please check your Email-Id.</strong>
             </div>
            <!-- <div id="showresult" style="color: green;display: none;"><b>Your IP has been Booked.Please check your Email-Id ! Thank You.</b></div> -->
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="button" id="submit" class="btn btn-primary" value="Submit">
            </div>
        </form>
    </div>
  </div>
</div>
<div id="showresultdiv"></div>
 <?php include "includes/footer.php"; ?>   

<script type="text/javascript">
    $(document).ready(function(){
        $("#submit").click(function(){
            var name = $("#name").val();
            var email = $("#emailidneed").val();
            var phone = $("#phonenumber").val();
            var pass1 = $("#pass1").val();
            var ipno = $("#ipno").val();
            var validity = $("#validity").val();
            var country = $('#country option:selected').html();
            var protocol = $('#protocol option:selected').html();
           
            
            if(name!="" && email!="" && phone!="" && pass1!="" && ipno!="" && validity!="" && country!="" && protocol!=""){
            $.ajax({
                type: "POST",
                url: "index-process",
                data: { name :name,email :email,phone :phone,pass1 :pass1, ipno:ipno, validity:validity, country:country, protocol:protocol
                 } 
            }).done(function(data){
                $("#addForm").trigger("reset");
                $("#showresultdiv").html(data);
            });
            //alert('Your IP has been Booked.Please check your Email-Id ! Thank You.');
            var x = document.getElementById("showresult");
            if (x.style.display === "none") {
                x.style.display = "block";
                setTimeout(function() {document.getElementById('showresult').innerHTML='';},5000);
            }
            
        }else{
                var x = document.getElementById("showerrorresult");
                    if (x.style.display === "none") {
                    x.style.display = "block";
                    setTimeout(function() {document.getElementById('showerrorresult').innerHTML='';},5000);
                }
                //alert('Please fill all the field !');
            }
        });
    });
</script>

