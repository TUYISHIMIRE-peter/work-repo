
<?php
session_start();
include 'connect.php';
if (isset($_POST['submit'])) {
    $email=$_SESSION['email'];
    $pword=$_POST['password'];
    $select = mysqli_query($con, "SELECT * FROM user WHERE email = '$email' ");
    $user = mysqli_fetch_object($select);
    if ($user->password==$pword) {
        if ($user -> is_verified ) {
            header('location:../dash.php');
        } else {
            exit(''."<script>alert('This email is not verified!, plesae go to your email to verify'),window.location.replace('../index.php')</script>");
                                };
        }else{
                echo 'password is incorect ';
            } 
        }