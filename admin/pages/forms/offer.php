<?php
include_once ('include.php');
session_start();
if(!isset($_SESSION['username'])){
  header("location:../../index.php");
}else{
    $link="select * from offer";
    $reviews = mysqli_query($conn,$link);
if (mysqli_num_rows($reviews)>0){
}

if(isset($_POST['review'])){
  $id=$_POST['id'];
 $file=$_FILES['link']['name'];
 $extension=substr($file,strlen($file)-4,strlen($file));
 $all_extension = array(".jpg","jpeg",".png","gif");
 if(!in_array($extension,$all_extension)){
      $msg="Invalid format. Only jpg / jpeg/ png /gif format allowed";
  } 
  else{
     $imgload=md5($file).$extension;
     move_uploaded_file($_FILES['link']['tmp_name'],"image/".$imgload);
     $status=0;
 $query="UPDATE `offer` SET `image`='$imgload' where id=' $id' ";
     $sql=mysqli_query($conn,$query);
     if($sql)
     {
     header("location:offer.php");
     }
     else{
     echo"<script> alert('Not Update');</script>";    
     }                    
 }		
}else{
  
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
            <h1> Offer Banner</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Offer Banner</li>
            </ol>
          </div>
			<div class="col-12">
          <div class="card">
            <!--<div class="card-header"> -->
            <!--  <div class="card-tools">-->
            <!--    <ul class="nav nav-pills ml-auto">-->
                  <!--<li class="nav-item">-->
                  <!--  <a class="nav-link active" href="Testimonialsform.php" data-tt="tooltip" title="" data-original-title="Click here to Add New Review">Add Review</a>-->
                  <!--</li>-->
            <!--    </ul>-->
            <!--  </div>-->
            <!--</div>-->
            <div class="card-body">
              <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4">

				  <div class="row">
				  <div class="col-sm-12">
					  <table id="example" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example_info">
                <thead>
                  <tr role="row">
                  <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="PO No." >Client ID</th>
					  <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" >Banner</th>	 
					  <th width="15%" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" >Action</th>
				</tr>
                </thead>
                <tbody> 
                <?php
											$i=1;
											while($row = mysqli_fetch_array($reviews)) {
											?>                
                <tr role="row" class="odd">
          <td><?php echo $i; ?></td>
					<td><img src="image/<?php echo $row["image"]; ?>" width="50%" heightt="40%"></td>	
                    <td>			
						<table>
							<tbody>
								<tr>
						<td class="p-2">
            <a href="offer.php?action=edit&id=<?php echo $row["id"]; ?>" title="" class="btn btn-success btn-xs delete_purchase">
		                          <i class="fas fa-edit"></i>
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

        <!--edit-->
        <?php if(isset($_GET['id'])){ 
          $id=$_GET['id'];
            $sql=mysqli_query($conn,"select * from offer where id='$id'");
            while($arr=mysqli_fetch_array($sql)){
            ?>
        <div class="col-md-12" enctype="multipart/form-data">
            <form class="form-horizontal" name="createUserForm"  enctype="multipart/form-data" id="createUserForm" method="post">
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Edit Banner</h3>
                </div>
                <div class="card-body">
                 <input type="hidden" value="<?php echo $arr['id']; ?>" name="id">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Banner</label>
                    <div class="col-sm-4">
                      <input type="file" name="link" class="form-control form-control-sm field_validation" id="link" placeholder="link">
                      <span id="err_email" class="error invalid-feedback"></span>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="review" id="userSubmit" class="btn btn-info">change banner</button>
                  <a href="offer.php" class="btn btn-default float-right">Close</a>
                 
                </div>
              </div>
            </form>
          </div>
          <?php } } ?>
          <!--edit-->

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