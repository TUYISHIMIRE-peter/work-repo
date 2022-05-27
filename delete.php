<?php
include 'php/connect.php';
session_start();
$email=$_SESSION['email'];
$querry=mysqli_query($con,"DELETE FROM `user` WHERE `user`.`email` = '$email'");

if ($querry) {
    echo 'account deleted successfully';
    header('location:index.php');
}
else{
    echo 'failed to delete account';
}





?>