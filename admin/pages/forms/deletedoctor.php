<?php
	if(isset($_GET['action']) && $_GET['action']!=''){
		$action=mysqli_real_escape_string($conn,$_GET['action']);
		if($action=='delete'){
		  $id=mysqli_real_escape_string($conn,$_GET['action']);
		  $sql = "UPDATE addcategories SET is_delete = '0' WHERE id='$id'";
		  mysqli_query($conn,$sql);
		}
	  }
    
?>