<?php
session_start();
if(!isset($_SESSION['username'])){
  header("location:../../index.php");
}else{
include("include.php");

$name='';
$degree='';
$description='';
$image='';
if(isset($_GET['id'])){
  $id=intval($_GET['id']);
  $sql="select * from addcategories where id='$id'";
  $arr=mysqli_query($conn,$sql);
  $result=mysqli_fetch_array($arr);
  $name=$result['name'];
  $degree=$result['degree'];
  $shortdesc=$result['shortdesc'];
  $description=$result['description'];
  $image=$result['image'];
}

   if (isset($_POST['submit'])){
	   $name=mysqli_real_escape_string($conn,$_POST['Name']);
	   $degree=mysqli_real_escape_string($conn,$_POST['degree']);
     $shortdesc=mysqli_real_escape_string($conn,$_POST['shortdesc']);
	   $description=mysqli_real_escape_string($conn,$_POST['description']);
	   
        $id=intval($_GET['id']);
        $sql=mysqli_query($conn,"update addcategories set name='$name',degree='$degree',shortdesc='$shortdesc',description='$description'  where id='$id'");
        if($sql){
          header("location:add_new_doctor.php");
        }
        else{
          echo "<script> alert('Not Update');</script>";
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
         <h3>Add New Doctor</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add New Doctor</li>
            </ol>
          </div>
        </div>
		  <div class="col-12">
          <div class="card">
            <div class="card-header"> 
              <div class="card-tools">
                <ul class="nav nav-pills ml-auto">
                  <li class="nav-item">
                    <a class="nav-link active" href="add_new_doctor.php" data-tt="tooltip" title="" data-original-title="Click here to Add New Doctor">Doctor List</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="card-body">

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
		
		<form method="post" enctype="multipart/form-data">
		<div class="form-group">
		  <label for="Name">Name:</label>
		  <input type="text" class="form-control name" id="Name" value="<?php echo $name ?>" placeholder="Enter name" name="Name">
		</div>
		<div class="form-group">
		  <label for="degree">Profession:</label>
		  <input type="text" class="form-control degree" value="<?php echo $degree?>" id="degree" placeholder="Enter degree" name="degree">
		</div>
    <div class="form-group">
		  <label for="shortdesc">Short Description:</label>
		  <input type="text" class="form-control shortdesc" value="<?php echo $shortdesc?>" id="shortdesc" placeholder="Enter short description" name="shortdesc">
		</div>
		<div class="form-group">
		  <label for="description">Description:</label>
		  <textarea class="form-control description" value="" id="description" placeholder="Enter description" name="description"><?php echo $description ?>
		  </textarea>
		</div>
		<div class="form-group">
		  <img src="image/<?php echo $image ?>" style="border:1px solid black; width:100px; height:100px"><br><a href="changedoctorimage.php?action=edit&id=<?php echo $result['id']; ?>" class="btn btn-success mt-2">Change Image</a>
		</div>
		<button type="submit" class="btn btn-primary" name="submit">Submit</button>
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
</body>
</html>
<?php } ?>