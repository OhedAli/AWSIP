<?php $pagetitle = "AWS IP Manage"; include_once "includes/autoload.php"; ?>
  <div class="wrapper">
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                  <div class="col-12">
              <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">AWS IP Manage</h3>
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
                                      <input type="submit" style="display: none;" class="btn btn-outline-dark btn-sm" name="editbtn" id="Editbtn" value="Edit">
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <th style="text-align: center;"><input type="checkbox" name="allselect" id="allselect" onclick="CheckUncheckAll()">Select all</th>
                                  <th>Sl</th>
                                  <th>IP Price</th>
                                  <th>IP Title</th>
                                  <th>Proxy Name</th>
                                  <th>Bandwidth</th>
                                  <th>Speed</th>
                                  <th>Location</th>
                                  <th>Up Time</th>
                                  <th>Date</th>
                                  <th>Status</th>
                                </tr>
                              </thead>

                             <tbody>
                                <?php
                                  $sql = "SELECT  * FROM ip_details ORDER BY id DESC";
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
                                    <td><input type="checkbox" name="stdarr[]" class = "std_chk_box" value = "<?php echo $row['id'];?>" id = "std_<?php echo $row['id'];?>" onclick="CheckUncheckInd(this.class);"></td>
                                    <td><?php echo $sl; ?></td>
                                    <td><?php echo $row['price']; ?></td>
                                    <td><?php echo $row['iptitle']; ?></td>
                                    <td><?php echo $row['proxyname']; ?></td>
                                    <td><?php echo $row['bandwidth']; ?></td>
                                    <td><?php echo $row['speed']; ?></td>
                                    <td><?php echo $row['location']; ?></td>
                                    <td><?php echo $row['uptime']; ?></td>
                                    <!-- <td><img src="<?php //echo $row['image']; ?>" alt = "img" height="50" width = "50"></td> -->
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
                                  <th>Select All</th>
                                  <th>Sl</th>
                                  <th>IP Price</th>
                                  <th>IP Title</th>
                                  <th>Proxy Name</th>
                                  <th>Bandwidth</th>
                                  <th>Speed</th>
                                  <th>Location</th>
                                  <th>Up Time</th>
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
    </div>
  </div>


<?php include_once "includes/footer.php"; ?>

<?php
  if (isset($_REQUEST['suspendbtn'])) {
    $stda = $_REQUEST['stdarr'];
     foreach ($stda as $key) {
            mysqli_query($conn,"UPDATE ip_details SET status = 0 WHERE id = '$key'");
     }
      pageredictedto("ip-show?Message=Suspended");
    }elseif (isset($_REQUEST['unsuspendbtn'])) {
    $stda = $_REQUEST['stdarr'];
     foreach ($stda as $key) {
            mysqli_query($conn,"UPDATE ip_details SET status = 1 WHERE id = '$key'");
     }
      pageredictedto("ip-show?Message=Unsuspended");
    }elseif (isset($_REQUEST['deletebtn'])) {
    $stda = $_REQUEST['stdarr'];
     foreach ($stda as $key) {
            mysqli_query($conn,"DELETE FROM ip_details WHERE id = '$key'");
     }
      pageredictedto("ip-show?Message=Deleted");
    }
    if (isset($_REQUEST['editbtn'])) {
      $stda = $_REQUEST['stdarr'];
      $id = $stda['0'];
      pageredictedto("editip?ipid=".$id."Message=Edit");
    }
?>