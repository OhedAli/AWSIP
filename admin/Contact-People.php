<?php $pagetitle = "Contact Peoples"; include_once "includes/autoload.php"; ?>
  <div class="wrapper">
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                  <div class="col-12">
              <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Contact Peoples</h3>
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
                                  <th style="text-align: center;"><input type="checkbox" name="allselect" id="allselect" onclick="CheckUncheckAll()">Select all</th>
                                  <th>Sl</th>
                                  <th>Name</th>
                                  <th>Email-Id(s)</th>
                                  <th>Phone No</th>
                                  <th>Message</th>
                                  <th>Date</th>
                                </tr>
                              </thead>

                             <tbody>
                                <?php
                                  $sql = "SELECT  * FROM contact ORDER BY id DESC";
                                  $result = mysqli_query($conn, $sql);
                                  if (mysqli_num_rows($result) > 0) {
                                    $sl=1;
                                    while($row = mysqli_fetch_assoc($result)) {
                                      // if ($row['status'] == 0) {
                                      //   $status = "Suspend";
                                      // }else{
                                      //   $status = "Unsuspend";
                                      // }   
                                ?>
                                <tr>
                                    <td><input type="checkbox" name="stdarr[]" class = "std_chk_box" value = "<?php echo $row['id'];?>" id = "std_<?php echo $row['id'];?>" onclick="CheckUncheckInd(this.class);"></td>
                                    <td><?php echo $sl; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><span id = "getemail_<?php echo $row['id'];?>"><?php echo $row['email'];?></span></td>
                                    <td><?php echo $row['phone']; ?></td>
                                    <td><?php echo $row['message']; ?></td>
                                    <td><?php echo $row['dd']."-".$row['mm']."-".$row['yyyy']; ?></td>
                                   <!--  <td><b><?php echo $status ?></b></td> -->
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
                                  <th>Name</th>
                                  <th>Email-Id(s)</th>
                                  <th>Phone No</th>
                                  <th>Message</th>
                                  <th>Date</th>
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
          <!--<input type="text" class="form-control" name="mess11234" id="getmessageid">-->
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
            url : "process-contact.php",
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
            mysqli_query($conn,"UPDATE contact SET status = 0 WHERE id = '$key'");
     }
      pageredictedto("Contact-People?Message=Suspended");
    }elseif (isset($_REQUEST['unsuspendbtn'])) {
    $stda = $_REQUEST['stdarr'];
     foreach ($stda as $key) {
            mysqli_query($conn,"UPDATE contact SET status = 1 WHERE id = '$key'");
     }
      pageredictedto("Contact-People?Message=Unsuspended");
    }elseif (isset($_REQUEST['deletebtn'])) {
    $stda = $_REQUEST['stdarr'];
     foreach ($stda as $key) {
            mysqli_query($conn,"DELETE FROM contact WHERE id = '$key'");
     }
      pageredictedto("Contact-People?Message=Deleted");
    }

?>