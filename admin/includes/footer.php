<footer class="main-footer">
    <strong>© 2021 AWS IP Sell Pvt. Ltd. | All right reserved Developed by <a href="https://arju.store/portfolio">Stuart Arju</a>.</strong>
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo ASSETS;?>/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo ASSETS;?>/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo ASSETS;?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo ASSETS;?>/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo ASSETS;?>/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo ASSETS;?>/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo ASSETS;?>/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo ASSETS;?>/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo ASSETS;?>/plugins/moment/moment.min.js"></script>
<script src="<?php echo ASSETS;?>/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo ASSETS;?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo ASSETS;?>/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo ASSETS;?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo ASSETS;?>/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo ASSETS;?>/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo ASSETS;?>/dist/js/demo.js"></script>
<!-- <script src="<?php echo ASSETS;?>/dist/js/adminlte.min.js"></script> -->
<!-- Bootstrap 4 -->
<script src="<?php echo ASSETS;?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?php echo ASSETS;?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo ASSETS;?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo ASSETS;?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo ASSETS;?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
    });
</script>

<script type="text/javascript">

function CheckUncheckAll(){
   var  selectAllCheckbox=document.getElementById("allselect");
   document.getElementById("std_all").style.display = "block";
   document.getElementById("Editbtn").style.display = "none";
   if(selectAllCheckbox.checked==true){
    var checkboxes =  document.getElementsByClassName("std_chk_box");
     for(var i=0, n=checkboxes.length;i<n;i++) {
      checkboxes[i].checked = true;
     }
    }else {
     var checkboxes =  document.getElementsByClassName("std_chk_box");
     document.getElementById("std_all").style.display = "none";
     for(var i=0, n=checkboxes.length;i<n;i++) {
      checkboxes[i].checked = false;
     }
    }
   CheckUncheckInd("std_chk_box");
   }

/* for individual student check box*/
    function CheckUncheckInd(indid){
        var checkbox = document.getElementsByClassName("std_chk_box");
        var checkrow = 0;
        
        for(i = 0; i< checkbox.length; i++){
            if (checkbox[i].checked == true) {
                checkrow = checkrow + 1;
                 document.getElementById("std_all").style.display = "block";         
            }
        }
        if (checkrow == 1) {
             document.getElementById("Editbtn").style.display = "inline-block";
        }else{
          document.getElementById("Editbtn").style.display = "none";
        }
        if (checkrow == checkbox.length) {
            document.getElementById("allselect").checked = true;
        }else{

            document.getElementById("allselect").checked = false;
        }
        if (checkrow == 0) {
            document.getElementById("std_all").style.display = "none";
        }
    }
</script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>