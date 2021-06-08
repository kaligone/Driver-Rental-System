<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Rent</title>
    <style media="screen">
      body{
        background: url(back1.jpg);
        background-size: 2000px 1000px;
        background-repeat: no-repeat;
      }

      .p1{
        color:yellow;
        font-size: 40px;
        position:absolute;
        top:200px;
        left:400px;
      }

      .p2{
        color:white;
        font-size: 30px;
        padding-top: 20px;
        text-decoration:underline;
        position:absolute;
        top:250px;
        left:500px;
      }

      .b
      {
        width: 70%;
        text-decoration: none;
        font-family:sans-serif;
        border: 1px solid rgba(0,0,0,.05);
        background-color:green;
        color: white;
        border-radius: 5px;
        font-size: 25px;
        padding: 0px 10px;
        position:absolute;
        top:350px;
        left:200px;
      }
      .b:hover{
        background-color:red;
        font-size: 30px;
        cursor: pointer;
      }

    </style>
  </head>
  <body>

    <p class="p1">Your request for renting driver is submitted </p>
    <p class="p2"> Check the renting status in CURRENT RENTING STATUS</p>
    <form action="rent_stat.php" method="post">
      <input class="b" type="submit" name="back" value="BACK">
    </form>

  </body>
</html>


<?php
    if(isset($_POST['back']))
    {
        header('location:welcomepage.php');
    }
 ?>
