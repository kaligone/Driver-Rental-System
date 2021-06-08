<?php     session_start();
    $id = $_SESSION['id'];
    require 'config.php';
echo $id."<br>";

    $sql= "SELECT * from driverregistrationdetails where id= '".$id."'";
    $arr = mysqli_query($conn,$sql);
    $r= mysqli_fetch_assoc($arr);
    $stat = $r['allocated_to_user'];
    echo $stat;
     ?>
