<?php $pagetitle = "Dashboard | Home | Admin Panel"; include_once "includes/autoload.php"; ?>
  <?php 
    $contact = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM contact "));  
    $user = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM user "));  
    $totalip = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM ip_details "));  
    // $callback = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM user "));   
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3 style="text-align: center;"><?php echo $user?></h3>

                <p style="text-align: center;color: white;">User Information Peoples</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="User-Information" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3 style="text-align: center;"><?php echo $contact?></h3>

                <p style="text-align: center;color: white;">Contact Peoples</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="Contact-People" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3 style="text-align: center;"><?php echo $totalip?></h3>

                <p style="text-align: center;color: white;">AWS IP</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="ip-show" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>

        <section class="content">
            <div class="container-fluid">
              <div class="row">
                  <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">User Information</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <form method="POST">
                          <table id="example1" class="table table-bordered table-striped">
                              <thead>
                                <tr style="">
                                  <td colspan="10">
                                    <div id="std_all" style="display: none;">
                                      <input type="submit" class="btn btn-outline-info btn-sm" name="suspendbtn" value="Suspend">
                                      <input type="submit" class="btn btn-outline-success btn-sm" name="unsuspendbtn" value="Unsuspend">
                                      <span class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#exampleModalCenter">Send Message</span>
                                      <input type="submit" class="btn btn-outline-warning btn-sm" name="deletebtn" value="Delete">
                                      <input type="submit" style="display: none;" class="btn btn-outline-dark btn-sm" name="editbtn" id="Editbtn" disabled="" value="Edit">
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <th style="text-align: center;"><input type="checkbox" name="allselect" id="allselect" onclick="CheckUncheckAll()"> All</th>
                                  <th>User</th>
                                  <th>SL</th>
                                  <th>Name</th>
                                  <th>Email-Id(s)</th>
                                  <th>Phone No</th>
                                  <th>Password</th>
                                  <th>Date</th>
                                  <th>Status</th>
                                </tr>
                              </thead>

                             <tbody>
                                <?php
                                  $sql = "SELECT  * FROM user ORDER BY id DESC LIMIT 7";
                                  $result = mysqli_query($conn, $sql);
                                  if (mysqli_num_rows($result) > 0) {
                                    $sl=1;
                                    while($row = mysqli_fetch_assoc($result)) {
                                      if ($row['status'] == 0) {
                                        $status = "Suspend";
                                      }else{
                                        $status = "Unsuspend";
                                      }   
                                ?>
                                <tr>
                                    <td><input type="checkbox" name="stdarr[]" class = "std_chk_box" value = "<?php echo $row['id'];?>" id = "std_<?php echo $row['id'];?>" onclick="CheckUncheckInd(this.class);">
                                    </td>
                                    <td><a class="btn btn-outline-success" href="gotouser?uid=<?php echo $row['id'];?>" target="_blank">User</a></td>
                                    <td><?php echo $sl; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><span id = "getemail_<?php echo $row['id'];?>"><?php echo $row['email'];?></span></td>
                                    <td><?php echo $row['phone']; ?></td>
                                    <td><?php echo datadecode(datadecode($row['password'])); ?></td>
                                    <td><?php echo $row['dd']."-".$row['mm']."-".$row['yyyy']; ?></td>
                                    <td><b><?php echo $status ?></b></td>
                                  </tr>
                                    <?php   
                                        $sl ++;
                                            }
                                        }else{
                                            
                                        }
                                    ?>
                              </tbody>
                              <tfoot>
                                <tr>
                                  <th>All</th>
                                  <th>User</th>
                                  <th>Sl</th>
                                  <th>Name</th>
                                  <th>Email-Id(s)</th>
                                  <th>Phone No</th>
                                  <th>Password</th>
                                  <th>Date</th>
                                  <th>Status</th>
                                </tr>
                            </tfoot>
                          </table>
                        </form>
                        </div>
                      <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
      </section>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  


<!-- Modal start -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Send Message</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <textarea class="form-control" name="mess11234" id="getmessageid"></textarea>
          <!-- <input type="text" class="form-control" name="mess11234" id="getmessageid"> -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button id="sendmsgbtn" data-dismiss="modal" class="btn btn-primary">Send Message
          </button>
          <!-- <input type="submit" name="sendmsgtoemail" value="submit" class="btn btn-primary"> -->
        </div>
      </div>
    </div>
  </div>
<!-- demo model end -->

<?php include_once "includes/footer.php"; ?>

<script type="text/javascript">
  $(document).ready(function() {
    $("#sendmsgbtn").click(function(){
     var vidarr = [];
      $('.std_chk_box:checkbox:checked').each(function(){
        var stdid = $(this).val();
        vidarr.push($("#getemail_" + stdid).text());
        //var GetMessage = $("#getmessageid").val();
      });
      $.ajax({
          type : "POST",
            url : "home-process.php",
            data : { GetAllEmail: vidarr, GetMessage: $("#getmessageid").val(), ActionPurpose: "SendMessageToSelectedEmail"}
      }).done(function(data){
        $("#response").html(data);
      });
    });
  });
</script>

<?php
  if (isset($_REQUEST['suspendbtn'])) {
  $stda = $_REQUEST['stdarr'];
   foreach ($stda as $key) {
          mysqli_query($conn,"UPDATE user SET status = 0 WHERE id = '$key'");
   }
    pageredictedto("home?Message=Suspended");
  }elseif (isset($_REQUEST['unsuspendbtn'])) {
  $stda = $_REQUEST['stdarr'];
   foreach ($stda as $key) {
          mysqli_query($conn,"UPDATE user SET status = 1 WHERE id = '$key'");
   }
    pageredictedto("home?Message=Unsuspended");
  }elseif (isset($_REQUEST['deletebtn'])) {
  $stda = $_REQUEST['stdarr'];
   foreach ($stda as $key) {
          mysqli_query($conn,"DELETE FROM user WHERE id = '$key'");
   }
    pageredictedto("home?Message=Deleted");
  }

?>