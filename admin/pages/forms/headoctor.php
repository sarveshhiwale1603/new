<?php
session_start();
include("include.php");
if(!isset($_SESSION['username'])){
  header("location:../../index.php");
}else{
include("Include/topbar.php");

if(isset($_POST['submit'])){
  $file=$_FILES['files']['name'];    
  $name=mysqli_real_escape_string($conn,$_POST['name']);
  $shortdesc=mysqli_real_escape_string($conn,$_POST['shortdesc']);

if(empty(($_FILES['files']['tmp_name'])) && ($_POST['image_name'])){
    $ba_image = $_POST['image_name'];
    $sql=mysqli_query($conn,"UPDATE `headoctor` SET `name`='$name',`shortdesc`='$shortdesc',`image`='$ba_image' WHERE id='1'");
        if($sql==1){
            echo "<script>alert('hello');</script>";
            header("location:headoctor.php");
        }else{
            mysqli_error($conn);
        }
    }
    
else if(!empty($_FILES['files']['tmp_name']) && ($_POST['image_name']) || !empty($_FILES['files']['tmp_name']) && (empty($_POST['image_name']))){
    $file_size =$_FILES['files']['size'];
  $filedet=$_FILES['files']['tmp_name'];
  $loc="imag/".$file;
  move_uploaded_file($filedet,$loc);

  $sql=mysqli_query($conn,"UPDATE `headoctor` SET `name`=' $name',`shortdesc`='$shortdesc',`image`='$file' WHERE id='1'");
  
  if($sql==1){
     header("location:headoctor.php");
  }else{
      mysqli_error($conn);
  }

}
 echo "<script>alert('h');</script>";
    
}

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
         <h3>Add New Doctor</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Add New Doctor</li>
            </ol>
          </div>
        </div>
		  <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4">

				  <div class="row">
				  <div class="col-sm-12">
					  <table id="example" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example_info">
                <thead>
                  <tr role="row">
                  <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="PO No." >ID</th>
					  <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="PO No." >Doctor Name</th>
					  <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" >Designation</th>	 
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" >Images</th>	 
					  <th width="15%" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" >Action</th>
				</tr>
                </thead>
                <tbody> 
                <?php
                $sql=mysqli_query($conn,"select * from headoctor");
											$i=0;
											while($row = mysqli_fetch_array($sql)) {
											?>                
                <tr role="row" class="odd">
                <td><?php echo $i; ?></td>

					<td><?php echo $row["name"]; ?></td>
					<td><?php echo $row["shortdesc"]; ?></td>	
          <td><img src="image/<?php echo $row["image"]; ?>" style="width: 50px;"></td>				
					<td>
						<table>
							<tbody>
              <td><a class="btn btn-primary editBlog" href="headoctor.php?id=<?php echo $row['id']; ?>" title="Edit Blog"><i class="far fa-edit"></i></a> </td>

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
													  	<?php if(isset($_GET['id'])){
													  	$query=mysqli_query($conn,"select * from headoctor");
													  	while($arr=mysqli_fetch_array($query)){
													  	?>
													  	
	<div class="col-md-12">
		
		<form method="post" enctype="multipart/form-data">
		<div class="form-group">
		  <label for="Name">Name:</label>
		  <input type="text" class="form-control name" id="Name" value="<?php echo $arr['name'] ?>" placeholder="Enter name" name="name">
		</div>
        <div class="form-group">
		  <label for="shortdesc">short Description:</label>
		  <input type="text" class="form-control shortdesc" value="<?php echo $arr['shortdesc'] ?>" id="shortdesc" placeholder="Enter short description" name="shortdesc">
		</div>
		<div class="form-group">
		  <label for="image">Image:</label>
		  		  <input type="file" class="form-control" id="image" name="files">

		  <?php if(isset($_GET['id'])){

?>
<img width="200" src="image/<?php echo $arr["image"]; ?>" />
<input type="hidden" name="image_name" value="<?php echo $arr["image"]; ?>" />
<?php } ?>
		</div>
		<button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>		
		</div>
			<?php }} ?>											  </div>
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