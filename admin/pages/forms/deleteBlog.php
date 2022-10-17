<?php
	$id = $_POST['id'];
    $conn = new mysqli("localhost","u188140722_dentist","Admin@123","u188140722_dentist");
    $sql = "UPDATE blogs SET is_delete = '1' WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
	  echo json_encode(array('status' => 300,'message' => 'Blog has been deleted Successfully'));
	} else {
		echo json_encode(array('status' => 200,'message' => "Error deleting record: " . $conn->error));
	}
    
?>