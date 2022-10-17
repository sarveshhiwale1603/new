<?php
	$id = $_POST['id'];
     $conn = new mysqli("localhost","u188140722_dentist","Admin@123","u188140722_dentist");
    $sql = "SELECT * FROM blogs WHERE is_delete = '0' AND id='$id'";
    $result = $conn->query($sql);
    $data  = $result->fetch_row();
    echo json_encode(array('status' => 200,'blog' => $data));
?>