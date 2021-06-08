<?php
$id =  $_SESSION['id'];

  require 'config.php';
  $sql="SELECT * from historystatus where rent_stat='Current' and id='".$id."'";
  $c=mysqli_query($conn,$sql);
  $r=mysqli_fetch_assoc($c);
  $d_id = $r['allocated_driver_id'];

  //fetch first available driver ....
  $sql1= "SELECT * from driverregistrationdetails where id='".$d_id."' ";
  $c1=mysqli_query($conn,$sql1);
  $r1=mysqli_fetch_assoc($c1);


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>DRIVO - Current Rent Status</title>
    <link rel="stylesheet" type="text/css" href="rstyle.css">
  </head>
  <body>
      <h1 class="h1">Current Driver Rent Status</h1>
      <div class="box">
          <h3>Your succesfully rented a Driver !!</h3>
          <h5>: Journey details :</h5>

          <p>Start address : <?php echo strtoupper($r['start_addr']) ?></p>
          <p>Destination address : <?php echo strtoupper($r['end_addr']) ?></p>
          <p>Date : <?php echo $r['date_journey']?></p>
          <p>Journey start Time : <?php $time=$r['time_of_travel']; echo date('h:i a', strtotime($time)) ?></p>
          <p>Driver name: <?php echo strtoupper($r1['fname']); echo " ".strtoupper($r1['lname'])?></p>
          <p>Driver contact: <?php echo $r1['mobile_no']?></p>
          <h4>*Note : The rent of driver will be dependend upon the number of hours<br>And final rent is calculated at the end.<br>(Estimated cost : 100 Rs/hr)</h4>
      </div>

      <div class="back">
        <form action="c_rent_stat.php" method="post">
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
