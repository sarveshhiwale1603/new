<?php
include_once ('include.php');

$selectquery="select * from addcategories where is_delete='0'";
$doctors = mysqli_query($conn,$selectquery);

$selectquery="select * from appointment ORDER BY `id` DESC";
$appointment = mysqli_query($conn,$selectquery);


$selectquery1="select * from carrers ORDER BY `id` DESC";
$carrers = mysqli_query($conn,$selectquery1);

  

$selectquery="select * from contactus ORDER BY `id` DESC";
$contactus = mysqli_query($conn,$selectquery);

  
  

$selectquery="select * from call_back ORDER BY `id` DESC";
$callback = mysqli_query($conn,$selectquery);

$link="select * from review where is_delete='0'";
$reviews = mysqli_query($conn,$link);
?>