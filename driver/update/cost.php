<?php
 session_start();
 $hrs= $_SESSION['hrs'];
 $cost = 100*floor($hrs);


     if(isset($_POST['back']))
     {
         header('location:../welcomepage.php');
     }

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>DRIVO -Cost</title>
    <link rel="stylesheet" type="text/css" href="coststyle.css">
  </head>
  <body>
          <h1 class="h1">COST</h1>

          <div class="box">
          <form class="" action="cost.php" method="post">
                <h3>Journey Completed</h3>
                <p>The rent for Journey : <?php echo $cost?> Rs</p>
                <input type="submit" name="back" value="BACK">
          </form>

          </div>
  </body>
</html>
