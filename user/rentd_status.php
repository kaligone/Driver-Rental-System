<?php
session_start();
$id=$_SESSION['ID'];

require ('config.php');

if($conn){
  $sql1= "SELECT * from driverregistrationdetails where available_status='Available'";
  $c1=mysqli_query($conn,$sql1);
  $r1=mysqli_fetch_assoc($c1);


  if($r1==NULL){
      require 'no_driver_available.php';
      mysqli_close($conn);
  }
  else{

    require 'rentd.php';
  }
}
 ?>
