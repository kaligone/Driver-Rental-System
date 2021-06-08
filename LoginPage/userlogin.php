<?php

session_start();

require_once "config.php";

require 'userLoginPage.html';

if($_SERVER["REQUEST_METHOD"]=='POST' && isset($_POST['login']))
{
  if($conn)
  {
      $email = $_POST['username'];
      $pass =$_POST['Password'];

      $query="SELECT * FROM userregistrationdetails WHERE email_id = '".$email."'";
      $result=mysqli_query($conn,$query) or die(mysqli_error());
      $row=mysqli_fetch_array($result);
      $result1= $row[4];
      $result2= $row[5];
      $id=$row[0];

      if($email == $result1 && $pass == $result2)
      {

          $_SESSION['id']=$id;
          header('location: ../user/welcomepage.php',true,301);

      }
      else
      {
          //  <p class='error_popup'></p> work pending...
      }
    }
}

?>
