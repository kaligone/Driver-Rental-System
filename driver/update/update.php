<?php
session_start();
$id =  $_SESSION['id'];
  require 'config.php';
  $sql="SELECT * from historystatus where allocated_driver_id='".$id."'";
  $c=mysqli_query($conn,$sql);
  $r=mysqli_fetch_array($c);
  $u_id=$r[0];

  $sql1= "SELECT * from userregistrationdetails where id='".$u_id."'";
  $c1=mysqli_query($conn,$sql1);
  $r1=mysqli_fetch_assoc($c1);

  if($conn)
  {
      require 'update.html';
      if(isset($_POST['update']))
      {
        $j=$_POST['rentcomp'];
        $hrs=$_POST['hrs'];


        if($j="yes")
        {
            $sql1 = "SELECT * from driverregistrationdetails where id ='".$id."'";
            $c1 = mysqli_query($conn,$sql1);
            $r1= mysqli_fetch_assoc($c1);
            $u_id = $r1['allocated_to_user'];

            $sql2 = "UPDATE driverregistrationdetails set available_status='Available', allocated_to_user=0 where id='".$id."'";
            mysqli_query($conn,$sql2);

            $sql3 = "UPDATE historystatus set rent_stat='Old', allocated_driver_id=0 where id='".$u_id."'";
            mysqli_query($conn,$sql3);

        }

        if($j="yes")
        {
              $_SESSION['hrs']=$hrs;
              header('location: cost.php',true,301);
              exit;
        }
        else {
          header('location : ../driver/welcomepage.php',true,301);
        }
      }
  }
  else {

  }
 ?>
