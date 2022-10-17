<?php
session_start();
include("include.php");
if(!isset($_SESSION['username'])){
  header("location:../../index.php");
}else{
  include ('api.php');
  if(isset($_GET['id']) && $_GET['id']!=''){
      $id=mysqli_real_escape_string($conn,$_GET['id']);
      $sql = "UPDATE specialist set status= '0' WHERE id='$id'";
      mysqli_query($conn,$sql);
    }
if (mysqli_num_rows($specialist)>0){

}
include("Include/topbar.php");

  ?>

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include("Include/sidebar.php");?>
  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
         <h3>Specialist Doctor List</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Specialist Doctor List</li>
            </ol>
          </div>
        </div>
		  <div class="col-12">
          <div class="card">
            <div class="card-header"> 
              <div class="card-tools">
                <ul class="nav nav-pills ml-auto">
                  <li class="nav-item">
                    <a class="nav-link active" href="specialist_doctor.php" data-tt="tooltip" title="" data-original-title="Click here to Add New Doctor">Add Specialist Doctor</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="card-body">
              <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4">

				  <div class="row">
				  <div class="col-sm-12">
					  <table id="example" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example_info">
                <thead>
                  <tr role="row">
                  <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="PO No." >ID</th>
					  <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="PO No." >Doctor Name</th>
					  <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" >Degree</th>	 
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" >Images</th>	 
					  <th width="15%" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" >Action</th>
				</tr>
                </thead>
                <tbody> 
                <?php
                $doctors=mysqli_query($conn,"select * from specialist where status='1'");
											$i=0;
											while($row = mysqli_fetch_array($doctors)) {
											?>                
                <tr role="row" class="odd">
                <td><?php echo $row["id"]; ?></td>

					<td><?php echo $row["doctor_name"]; ?></td>
					<td><?php echo $row["degree"]; ?></td>	
          <td><img src="image/<?php echo $row["image"]; ?>" style="width: 50px;"></td>				
					<td>
						<table>
							<tbody>
              <td><a class="btn btn-primary editBlog" href="editspecialdoctor.php?action=delete&id=<?php echo $row['id']; ?>" title="Edit Blog"><i class="far fa-edit"></i></a> <a class="btn btn-danger" href="specialDoctor.php?action=delete&id=<?php echo $row['id']; ?>" title="Delete Blog"><i class="far fa-trash-alt"></i></a></td>

            </tbody>
					</table>
					</td>
					</tr>
          <?php
											$i++;
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
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});

</script>
</body>
</html>
<?php } ?>