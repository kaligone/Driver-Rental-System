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

      .p2{
        color:white;
        font-size: 50px;
        padding-top: 20px;
        position:absolute;
        top:100px;
        left:250px;
        text-shadow:4px 4px rgba(0,0,0,0.5);
        font-family: cursive;
      }

      .b
      {
        width: 15%;
        height: 10%;
        text-decoration: none;
        font-family:sans-serif;
        border: 1px solid rgba(0,0,0,.05);
        background-color:red;
        color: white;
        border-radius: 5px;
        font-size: 25px;
        padding: 0px 10px;
        position:absolute;
        top:350px;
        left:600px;
      }
      .b:hover{
        background-color:green;
        font-size: 30px;
        cursor: pointer;
      }

    </style>
  </head>
  <body>

    <p class="p2"> OOPS !!<br>NO ANY DRIVER AVAILABLE!!</p>
    <form action="no_driver_available.php" method="post">
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
