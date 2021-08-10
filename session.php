<?php
  include 'config/connection.php';
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select phone from user where phone = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['phone'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
?>