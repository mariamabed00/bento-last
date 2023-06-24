<?php 
   include ('connection.php') ; ?>

   <?php
   session_start();
   session_destroy();

   if(isset($_GET['logout'])){
    unset($_SESSION['']);
    session_destroy();
    header('location:login.php');}
   ?>