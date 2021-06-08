<?php
$id =  $_SESSION['id'];
  require 'config.php';
  $sql="SELECT * from historystatus where allocated_driver_id='".$id."'";
  $c=mysqli_query($conn,$sql);
  $r=mysqli_fetch_array($c);
  $u_id=$r[0];

  $sql1= "SELECT * from userregistrationdetails where id='".$u_id."'";
  $c1=mysqli_query($conn,$sql1);
  $r1=mysqli_fetch_assoc($c1);

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>DRIVO - Current Rent Status</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
      <h1 class="h1">Current  Rent Status</h1>
      <div class="box">
          <h3>Your are Rented!!</h3>
          <h5>: Journey details :</h5>

          <p>Start address : <?php echo strtoupper($r[1]) ?></p>
          <p>Destination address : <?php echo strtoupper($r[2]) ?></p>
          <p>Date : <?php echo $r[3]?></p>
          <p>Journey start Time : <?php $time=$r[4]; echo date('h:i a', strtotime($time)) ?></p>
          <p>Customer name: <?php echo strtoupper($r1['fname']); echo " ".strtoupper($r1['lname'])?></p>
          <p>Customer contact: <?php echo $r1['mobile_no']?></p>
      </div>

      <div class="back">
        <form action="rent_stat.php" method="post">
          <input type="submit" name="back" value="BACK">
        </form>
      </div>

  </body>
</html>

<?php
    if(isset($_POST['back']))
    {
        header('location:../welcomepage.php');
    }
 ?>
