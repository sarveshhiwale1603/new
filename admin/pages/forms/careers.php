<?php
session_start();
include("include.php");
if(!isset($_SESSION['username'])){
  header("location:../../index.php");
}else{
  include ('api.php');
  if(isset($_GET['id']) && $_GET['id']!=''){
      $id=mysqli_real_escape_string($conn,$_GET['id']);
      $sql = "UPDATE addcategories set is_delete= '1' WHERE id='$id'";
      mysqli_query($conn,$sql);
    }
if (mysqli_num_rows($carrers)>0){

}
include("Include/topbar.php");

// if(isset($_GET['delid'])){
//   $id=$_GET['delid'];
//   $sql=mysqli_query($conn,"DELETE FROM `carrers` WHERE id='$id'");

//   if($sql)
// 			{
// 			header("location:careers.php");
// 			}
// 			else{
// 			echo"<script> alert('Not Deleted');</script>";    
// 			}

// }




  ?>

  <?php
    if(isset($_POST['deletepassword'])){
        $checkPassword1=$_POST['checkPassword1'];
        $id=$_POST['id1'];
        $sql=mysqli_query($conn,"select * from universalpassword");
        while ($row=mysqli_fetch_array($sql)){ 
          $rowPass=$row['password'];
            $pass=password_verify($checkPassword1,$rowPass);
            if($pass==1){
                $sql=mysqli_query($conn,"DELETE FROM `carrers` WHERE id='$id'");
                header("location:careers.php");
            }
            else{
                echo"<script>alert('invalid Password');</script>";
            }
    
        }
    }
    ?>

<?php
if(isset($_POST['carupdate'])){
  $id=$_POST['id'];
$status=$_POST['status'];
$remark=$_POST['remark'];


$sql=mysqli_query($conn,"UPDATE `carrers` SET `status`='$status',`remark`='$remark'  WHERE id='$id'");
  
  if($sql==1){
     header("location:careers.php");
  }else{
    echo"<script> alert('Not updated');</script>";   
  }

}
?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<?php include("Include/sidebar.php");?>
<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">

   <div class="modal fade" id="modal-delete">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Password</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12 form-group">
                                    <input type="hidden" name="id1" id="deleteid" >
                                    <label class="col-form-label" for="name">Enter Password</label>
                                    <input type="password" class="form-control" name="checkPassword1" required="">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-end">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary sub" data-toggle="modal"  name="deletepassword">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3>Carrers List</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
            <li class="breadcrumb-item active">Carrers List</li>
          </ol>
        </div>
      </div>
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            Carrers
          </div>
          <div class="card-body">
            <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4">

              <div class="row">
                <div class="col-sm-12">
                  <table id="example1" class="table table-bordered table-striped dataTable" role="grid"
                    aria-describedby="example_info">
                    <thead>
                      <tr role="row">
                        <th>ID</th>
                        <th>Applicant Name</th>
                        <th>Phone Number
                        </th>
                        <th>Email</th>
                        <!--<th>Message</th>-->
                        <th>Resume</th>
                        <th>Status</th>
                        <th>Last Remark</th>
                        <th>Action</th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php
											while($row = mysqli_fetch_array($carrers)) {
											?>
                      <tr role="row" class="odd">
                        <td><?php echo $row["id"]; ?></td>

                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["phone"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <!--<td><?php echo $row["message"]; ?></td>-->
                        <td><a class="btn btn-primary"target="_blank" href="image/<?php echo $row["resume"]; ?>"><i
                              class="fas fa-eye"></i></a>
                        </td>
                        <td style="text-align:center"><?php
                                                $status=$row['status'];
                                             if($status=='Came'){
                                                    echo '<span class="badge badge-success">Came</span>';
                                                }
                                                 else if($status=='In Progress'){
                                                    echo '<span class="badge" style="background-color: 	#ff5621;color:white">In Progress</span>';
                                                }
                                                else if($status=='dont call'){
                                                    echo '<span class="badge badge-danger"> Don&#39;t call</span>';
                                                }
                                                ?></td>
                        <td><?php echo $row["remark"]; ?></td>
                        <td>
                          <a href="#m<?php echo $row['id'] ?>" class="btn btn-primary btn-rounded btn-icon carupdate"
                            data-toggle="modal" data-target="#exampleModal" data-id='<?php echo $row['id']; ?>'
                            style="color: aliceblue"> <i class="fas fa-pen"></i>
                          </a>
                          <a class="btn btn-danger delete_id" data-toggle="modal" data-id="<?php echo $row['id']; ?>"><i
                              class="fas fa-trash"></i></a>
                        </td>

                      </tr>
                      <?php
											}
											?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div><!-- /.container-fluid -->
  </section>


</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
  <div class="float-right d-none d-sm-block">
    <b>Version</b> 3.1.0
  </div>
  <strong>Copyright &copy; 2014-2021.</strong> All rights reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php include("Include/script.php");?>
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<!--<script src="../../dist/js/adminlte.min.js"></script>-->
<!-- AdminLTE for demo purposes -->
<!--<script src="assets/dist/js/adminlte.min.js"></script>-->
<!-- AdminLTE for demo purposes -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    bsCustomFileInput.init();
  });
</script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
       "sorting":false,
      "buttons": ["csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });


  $(document).on('click','.delete_id',function(){
    let id=$(this).data('id');
    $('#deleteid').val(id);
    $('#modal-delete').modal('show');
})





  $(document).ready(function () {
    $('.carupdate').click(function () {
      let dnkk = $(this).data('id');

      $.ajax({
        url: 'action.php',
        type: 'post',
        data: {
          car: dnkk
        },
        success: function (response5) {
          $('.carupdatemodal').html(response5);
          $('#carupdate').modal('show');
        }
      });
    });


  });
</script>
<div class="modal fade" id="carupdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Careers List</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post">
      <div class="modal-body carupdatemodal">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="carupdate"class="btn btn-primary">Save changes</button>
      </div>
</form>
    </div>
  </div>
</div>
</body>

</html>
<?php } ?>