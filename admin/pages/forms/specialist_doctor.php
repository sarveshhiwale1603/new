<?php
session_start();
include("include.php");
if(!isset($_SESSION['username'])){
  header("location:../../index.php");
}else{

   if (isset($_POST['submit'])){
	   $name=mysqli_real_escape_string($conn,$_POST['Name']);
	   $degree=mysqli_real_escape_string($conn,$_POST['degree']);
	   $description=mysqli_real_escape_string($conn,$_POST['description']);
	   
	   $file=$_FILES['postimage']['name'];
	   
			$imgload=md5($file).$extension;
			move_uploaded_file($_FILES['postimage']['tmp_name'],"image/".$imgload);
			$status=0;
        $query="INSERT INTO `specialist`(`doctor_name`, `image`, `designation`, `degree`, `status`) VALUES ('$name','$imgload','$description','$degree','1')";
			$sql=mysqli_query($conn,$query);
			if($sql)
			{
			header("location:specialDoctor.php");
			}
			else{
			echo"<script> alert('Not Update');</script>";    
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
         <h3>Add Specialist Doctor</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Add Specialist Doctor</li>
            </ol>
          </div>
        </div>
		  <div class="col-12">
          <div class="card">
            <div class="card-header"> 
              <div class="card-tools">
                <ul class="nav nav-pills ml-auto">
                  <li class="nav-item">
                    <a class="nav-link active" href="specialDoctor.php" data-tt="tooltip" title="" data-original-title="Click here to Add New Doctor">Specialist Doctor List</a>
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
		  <label for="description">Treatment:</label>
		  <textarea class="form-control description descri"  maxlength="1000" value="<?php echo $description ?>" id="description " placeholder="Enter description" name="description">
		  </textarea>
		  <span style="color:red" id="spancatname"></span>
		</div>
		<div class="form-group">
		  <label for="image">Image:</label>
		  <input type="file" class="form-control" id="image" name="postimage" accept="image/webp,">
		  <span style="color:red">File Size must be 270 × 362 px. File type should be in webp</span>
		</div>
		<button type="submit" id="subdoc" class="btn btn-primary" name="submit">Submit</button>
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
         if(text_length > 50){
           $(".error").show();
           $(".error").text("Maximum 50 characters allowed");
           $("#description").css("border-color","red");
       }else{
            $(".error").hide();
            $("#description").css("border-color","#ced4da");
       }
      };
    });
    </script>
    <script>
    let catdnkname;
  $(document).ready(function(){
   //TEXT VALIDATION
   $("#spancatname").hide();
	    $(".descri").keyup(function(){
	     txt_check();
	   });
	   function txt_check(){
		   let txt=$(".descri").val();
		   if(txt.length > 50){
            catdnkname="no";
			  $("#spancatname").show().html("value must be less than 50 characters").css("color","red").focus();
			  txt_err=false;
			  return false;
		   }
		   else{
            catdnkname="yes";
		       $("#spancatname").hide();
		       
		   }
	   }

       $("#subdoc").click(function(){
        let catstatus=$("#catstatus").val();
        if(catdnkname =="no"){
            alert("value must be less than 750 characters");
          }
              txt_err = true;
              txt_check();
                if((txt_err==true)){
                   return true;
                }
                else{return false;}
           });
    });
    </script>
</body>
</html>
<?php } ?>