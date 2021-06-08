<?php

$servername="localhost";
$username="root";
$password="";
$databaseName="driverrentalsystem";

//create connection.....
$conn=mysqli_connect($servername,$username,$password,$databaseName);

if(!$conn)
{
  echo ("Connection Failed.....".mysqli_connect_error());
}
else
{
    include 'DriverRegisterPage.html';
    if(isset($_POST['register']))
    {
        $f=$_POST['fname'];
        $l=$_POST['lname'];
        $m=$_POST['Mno'];
        $em=$_POST['email'];
        $pass=$_POST['pass'];
        $confp=$_POST['confirmpass'];

        if($pass==$confp)
        {
          $sql="INSERT INTO driverregistrationdetails VALUES('','$f','$l','$m','$em','$pass','Available','New','')";
          mysqli_query($conn,$sql);
          header('Location:../HomePage/HomePage.php',true,301);
        }
    }
}

mysqli_close($conn);

?>
