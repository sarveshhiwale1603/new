<?php
session_start();
include("include.php");
if(!isset($_SESSION['username'])){
  header("location:../../index.php");
}else{

    $d=$_SESSION['username'];

    if(isset($_POST["login"])){
        $password=$_POST["password"];
        $newpassword=$_POST["newpassword"];
    
    
        $sql = mysqli_query($conn,"SELECT * FROM login WHERE name='$d'") ;
            $row=mysqli_fetch_assoc($sql); 
            $verify=password_verify($password,$row['password']);
        
        $hashpassword=password_hash($newpassword,PASSWORD_BCRYPT);
    
            if($verify==1){
                $query=mysqli_query($conn,"UPDATE `login` SET `password`='$hashpassword' WHERE name='$d'");
          if($query){
            echo "<script>alert('Password Changed Successfully'),window.location='../../index.php';</script>";
          }
            }
            else{
                echo"<script>alert('Invalid Password');</script>";
            }
        
        }
    
	include("Include/topbar.php");
?>

<?php include("Include/sidebar.php");?>
  
  <!-- page-content" -->

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
         <h3>Change Password</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Change Password</li>
            </ol>
          </div>
        </div>
		  <div class="col-12">
          <div class="card">
            <div class="card-body">
            <p class="login-box-msg"> You Can Change Your Password Here</p>
			<div class="row">
	    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
			<?php if($msg){ ?>
			<div class="alert alert-danger">
				<?php echo $msg;?>
			</div>
			<?php } ?>
		</div>
	</div>

              <div class="row">
		<div class="col-md-12">
        <form method="post">
      
      <div class="form-group">
        <input type="text" class="form-control form-control-lg" name="password" id="exampleInputPassword1" placeholder="Old Password">
      </div>
       <div class="form-group">
        <input type="text" class="form-control form-control-lg" name="newpassword" id="exampleInputPassword1" placeholder="New Password">
      </div>
      <div class="mt-6">
        <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="Change Password" name="login">
      </div>
      <div class="my-2 d-flex justify-content-between align-items-center">
        
      </div>
      
</form>		
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
</div>
<!-- page-wrapper -->

<?php include("Include/script.php");?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
		<script>
		jQuery(function ($) {

    $(".sidebar-dropdown > a").click(function() {
  $(".sidebar-submenu").slideUp(200);
  if (
    $(this)
      .parent()
      .hasClass("active")
  ) {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .parent()
      .removeClass("active");
  } else {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .next(".sidebar-submenu")
      .slideDown(200);
    $(this)
      .parent()
      .addClass("active");
  }
});

$("#close-sidebar").click(function() {
  $(".page-wrapper").removeClass("toggled");
});
$("#show-sidebar").click(function() {
  $(".page-wrapper").addClass("toggled");
});

});
		</script>
    <script>
      $(document).ready(function() {
        $(".error").hide();

       $('#description').keyup(function() {
         err_func();
       });
       function  err_func(){
       let text_length = $('#description').val().length;
         if(text_length > 1000){
           $(".error").show();
           $(".error").text("Maximum 1000 characters allowed");
           $("#description").css("border-color","red");
       }else{
            $(".error").hide();
            $("#description").css("border-color","#ced4da");
       }
      });
    </script>
</body>
</html>
<?php } ?>