<?php
session_start();
$id=$_SESSION['ID'];

require ('config.php');

if($conn)
{
  require('rentd.html');

  if(isset($_POST['rent']))
  {
      $s=$_POST['start'];
      $d=$_POST['end'];
      $date=$_POST['date'];
      $hrs=$_POST['time_period'];

  /*    $sql="SELECT * FROM `historystatus` WHERE id='".$id."'";
      $d=mysqli_query($conn,$sql);
      $r=mysqli_fetch_array($d);

      if($r[6]==1)
      {

        $v=1;
        $sql="INSERT INTO historystatus VALUES('$id','$s','$d','$date','$hrs','current','$v')";
        mysqli_query($conn,$sql) or die(mysqli_error());

        header('Location: rent_stat.php',true,301);
      }
      else{
          */
          $sql2="SELECT max(no_of_journey) from historystatus where id='".$id."'";
          $count=mysqli_query($conn,$sql2);
          $c=mysqli_fetch_array($count);
          $r=$c[0];

          if($r==0)
              $r=1;
            else {
              $r +=1;
            }

          $query = "INSERT INTO historystatus VALUES('$id','$s','$d','$date','$hrs','Current','$r','Pending','') ";
          mysqli_query($conn,$query);

          $sql1= "SELECT * from driverregistrationdetails where available_status='Available'";
          $c1=mysqli_query($conn,$sql1);
          $r1=mysqli_fetch_assoc($c1);
          $v = $r1['id'];

          $query1 = "UPDATE driverregistrationdetails set allocated_to_user='".$id."',available_status='No' where id='".$v."' ";
          mysqli_query($conn,$query1);

          /*$sql2= "SELECT * from driverregistrationdetails where available_status='Available' and allocated_to_user='".$id."'";
          $c2=mysqli_query($conn,$sql2);
          $r2=mysqli_fetch_assoc($c2);
          $v1 = $r2['id'];
*/
          $query2 =  "UPDATE historystatus set allocated_driver_id='".$v."' where id='".$id."' and rent_stat='Current'";
          mysqli_query($conn,$query2);

          header('Location: rent_stat.php',true,301);
      /*}*/


  }
}
else {
  echo ("Connection Failed.....".mysqli_connect_error());
}

 ?>
