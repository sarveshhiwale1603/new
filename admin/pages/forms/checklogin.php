<?php
session_start();
include("include.php");
$msg='';
ini_set('display_errors',1);
if(isset($_POST['login']) && !empty($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
  $query=mysqli_query($conn,"select * from login where email='$username' ");
  
  $num=mysqli_fetch_array($query);

  if($num>0){
    $uname=$num['name'];
    $hasspassword=$num['password'];
    if(password_verify($password ,$hasspassword)){
      header("location:pages/forms/dashboard.php");
      $_SESSION['username']=$uname;
    }
    else{
      $msg="username and password is not correct";
    }
  }
  else{
    $msg="username doesn't match";
  }
}
	
	?>











