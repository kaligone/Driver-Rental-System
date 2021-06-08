<?php
    session_start();
    require 'welcomepage.html';
    $id=$_SESSION['id'];
  

    if(isset($_POST['rentd']))
    {
        session_start();
        $_SESSION['ID']=$id;
       header('Location: rentd.php');
    }

    if(isset($_POST['history']))
    {
      session_start();
      $_SESSION['ID']=$id;
       header('location:history.php');
    }

    if(isset($_POST['logout']))
    {
      session_unset();
      session_destroy();
       header('Location: ../homepage/homepage.php');
       exit;
    }

 ?>
