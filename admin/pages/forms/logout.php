<?php 
session_start();
include("include.php");
if(session_destroy()){
    header("location:../../index.php");
}
else{
    header("location:dashboard.php");
    echo"<script>alert('There were some problems with your input.');</script>";
}

?>