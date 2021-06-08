<?php

require_once "config.php";
$sql1="SELECT email_id from userregistrationdetails where password='123'";
$sql2="SELECT password from userregistrationdetails where email_id='ken@gmail.com'";
$res1=mysqli_query($conn,$sql1);
$res2=mysqli_query($conn,$sql2);

$r1=mysqli_fetch_row($res1);
print_r($r1);

$r2=mysqli_fetch_row($res2);
print_r($r2);
 ?>
