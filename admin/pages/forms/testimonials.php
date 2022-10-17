<?php
session_start();
if(!isset($_SESSION['username'])){
  header("location:../../index.php");
}else{
include ('api.php');
if (mysqli_num_rows($reviews)>0){
}
if(isset($_GET['id']) && $_GET['id']!=''){
    $id=mysqli_real_escape_string($conn,$_GET['id']);
    $sql = "UPDATE review SET is_delete = '1' WHERE id='$id'";
    mysqli_query($conn,$sql);
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
            <h1> Testimonials</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active"> Testimonials</li>
            </ol>
          </div>
			<div class="col-12">
          <div class="card">
            <div class="card-header"> 
              <div class="card-tools">
                <ul class="nav nav-pills ml-auto">
                  <li class="nav-item">
                    <a class="nav-link active" href="Testimonialsform.php" data-tt="tooltip" title="" data-original-title="Click here to Add New Review">Add Review</a>
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
                  <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="PO No." >Client ID</th>
					  <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="PO No." >Client Name</th>
					  <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" >Youtube Link</th>	 
					  <th width="15%" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" >Action</th>
				</tr>
                </thead>
                <tbody> 
                <?php
											$i=0;
											while($row = mysqli_fetch_array($reviews)) {
											?>                
                <tr role="row" class="odd">
          <td><?php echo $row["id"]; ?></td>
					<td><?php echo $row["client_name"]; ?></td>
					<td><?php echo $row["link"]; ?></td>				
					<td>
						<table>
							<tbody>
								<tr>
						<td class="p-2">
            <a href="Testimonialsform.php?action=edit&id=<?php echo $row["id"]; ?>" title="" class="btn btn-success btn-xs delete_purchase">
		                          <i class="fas fa-edit"></i>
		                        </a>
				        </td>
						<td class="p-2">
            <a href="?action=delete&id=<?php echo $row["id"]; ?>" title="" class="btn btn-danger btn-xs delete_purchase">
		                          <i class="fas fa-trash"></i>
		                        </a>
						</td>
						</tr>
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