<?php
    session_start();
    $id = $_SESSION['id'];
    require 'config.php';

    $sql= "SELECT * from driverregistrationdetails where id= '".$id."'";
    $arr = mysqli_query($conn,$sql);
    $r= mysqli_fetch_assoc($arr);
    $stat = $r['allocated_to_user'];

    if($stat==0)
    {
        require 'err.php';
    }
    elseif($stat!=0)
    {
        require 'rent_stat.php';
    }
    else {
      echo 'OOPS !! ERROR.....';
    }

 ?>
