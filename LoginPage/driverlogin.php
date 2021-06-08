<?php

require_once "config.php";

require 'driverLoginPage.html';

if($_SERVER["REQUEST_METHOD"]=='POST' && isset($_POST['login']))
{
  if($conn)
  {
      $email = $_POST['username'];
      $pass =$_POST['Password'];

      $query="SELECT * FROM driverregistrationdetails WHERE email_id = '".$email."'";
      $result=mysqli_query($conn,$query) or die(mysqli_error());
      $row=mysqli_fetch_array($result);
      $result1= $row[4];
      $result2= $row[5];
      $id=$row[0];

      if($email == $result1 && $pass == $result2)
      {
          session_start();
          $_SESSION['id']=$id;
          header('location: ../driver/welcomepage.php',true,301);

      }
      else
      {
          //  <p class='error_popup'></p> work pending...
      }
    }
}

?>
