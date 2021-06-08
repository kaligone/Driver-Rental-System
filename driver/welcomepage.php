<?php
session_start();
$id = $_SESSION['id'];

require 'welcomepage.html';

if(isset($_POST['rentstat']))
{
    header('location: rent_stat/status.php');
}

if(isset($_POST['history']))
{
    header('location: hitory/.php');
}

if(isset($_POST['update']))
{
    header('location: update/update.php');
}


 ?>
