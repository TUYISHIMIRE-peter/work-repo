<?php
session_start();
include 'php/connect.php';
if($_POST>0)
{
  $email=$_SESSION['email'];
  $current_pass=$_POST['current_pass'];
  $pass=$_POST['new_pass'];
  $select=mysqli_query($con,"UPDATE user SET password='$pass' where email='$email'");
  if ($select) {
      echo 'password changed successfully';
      header('location:dash.php');
}
else {
    echo 'current password is incorect';
}
}
?>