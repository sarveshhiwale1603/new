<?php 
session_start();
if(!isset($_SESSION['username'])){
  header("location:../../index.php");
}else{
include("include.php");
$client_name='';
$link='';
if(isset($_GET['id'])){
  $id=intval($_GET['id']);
  $sql="select * from review where id='$id'";
  $arr=mysqli_query($conn,$sql);
  $result=mysqli_fetch_array($arr);
  $client_name=$result['client_name'];
  $link=$result['link'];
}

if(isset($_POST['review']))  
{  
  $client_name=$_POST['client_name']; 
  $link=$_POST['link']; 
  if(isset($_GET['id'])){
    $id=intval($_GET['id']);
    $sql=mysqli_query($conn,"update review set client_name='$client_name',link='$link' where id='$id'");  
    if($sql==1){    header("Location: testimonials.php");}
    else  {echo 'error';}  

  }else{
    $sql=mysqli_query($conn,"insert into review(client_name,link,is_delete)
    values ('$client_name','$link','0')");  
    if($sql==1) {    header("Location: testimonials.php");}
    else{echo 'error';}  
  }

}
?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->

  <?php include("Include/topbar.php");
  include("Include/sidebar.php");?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
         <h3>Add New Testimonials</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add New Testimonials</li>
            </ol>
          </div>
        </div>

		  <div class="col-md-12">
            <form class="form-horizontal" name="createUserForm" id="createUserForm" method="post">
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Add Testimonials</h3>
                </div>
                <div class="card-body">
                  <div class="form-group row">

                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Client Name</label>
                    <div class="col-sm-4">
                      <input type="text" name="client_name" value="<?php echo $client_name ;?>" class="form-control form-control-sm field_validation" id="first_name" placeholder="Client Name">
                      <span id="err_first_name" class="error invalid-feedback"></span>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Link</label>
                    <div class="col-sm-4">
                      <input type="text" name="link" value="<?php echo $link; ?>" class="form-control form-control-sm field_validation" id="link" placeholder="link">
                      <span id="err_email" class="error invalid-feedback"></span>
                    </div>
                  </div>
					
                </div>
                <div class="card-footer">
                  <input type="hidden" name="company_id" value="1">
                  <input type="hidden" name="" value="">
                  <button type="submit" name="review" id="userSubmit" class="btn btn-info">Save User</button>
                  <a href="testimonials.php" class="btn btn-default float-right">Close</a>
                 
                </div>
              </div>
            </form>
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