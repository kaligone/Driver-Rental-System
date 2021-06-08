<?php
  session_start();
  $id=$_SESSION['id'];
  require 'config.php';

  //require 'current_rent_stat.html';

  $sql="SELECT * from historystatus where rent_stat='Current' and id='".$id."'";
  $c=mysqli_query($conn,$sql);
  $r=mysqli_fetch_array($c);

  if($r==NULL)
         require 'err.php';
  else
  {
    $condition= $r[8];
    if($condition!=0){
      require 'c_rent_stat.php';
    }

    if($condition==0)
    {
      require 'err.php';
    }

}

 ?>
