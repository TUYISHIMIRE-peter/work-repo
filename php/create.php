<?php
session_start();
    include 'connect.php';
    if (isset($_POST['submit'])) {
        $fname=$_POST['firstname'];
        $lname=$_POST['lastname'];
        $email=$_POST['email'];
        $pword=$_POST['password'];
        if(strlen($pword)<8){
            echo "<script>alert('Password must be above 8 letters'),window.location.replace('../index.php')</script>";
            
        }
        

$select = mysqli_query($con, "SELECT * FROM user WHERE email = '".$_POST['email']."'");
if(mysqli_num_rows($select)) {
    exit('This email address is already used!'."<script>alert('Your email exist find other one'),window.location.replace('../index.php')</script>");
}
else{
            $insert= $con->query("INSERT INTO User VALUES(NULL,'$fname','$lname','$email','$pword','is_verified')");
            if($insert){
                // echo "<script>alert('You successfully registered'),window.location.replace('email_verified.php')</script>";
            }
        }
    }
        ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">


    <title>ASSIGNMENT</title>
</head>
<body>
    <header class="text-white p-1 text-center" style="background-color:red;">
        <h5>Assignment</h5>
    </header>
    <form action="php/create.php" method="post">
<div class="d-flex justify-content-center align-items-center" style="height:550px;">
    <!-- <h1>Test</h1> -->
    <div class="border px-4 pt-4 position-relative text-center w-25">
    <i class="fa fa-user-circle text-info" aria-hidden="true" style="font-size:60px;position:absolute;top:-35px"></i>
    <?php
    $con= mysqli_connect("localhost","root","","assignment");
    $email = mysqli_real_escape_string($con, $_POST['email']);

    /* Find and get row*/
    if (isset($_POST['submit'])){
        $mail=$_POST['email'];
        $username=$_POST['lastname'];
        $select=$con->query("SELECT * FROM User WHERE email='$mail'");
        $row=mysqli_fetch_array($select);
        if(is_array($row)){
            $_SESSSION['email']=$_POST['email'];
        }
    $email = $row['email'];
    $username=$row['lastname'];
}
        ?>  
    <h5>congrat,<?php echo $email;?></h5>
        
    </form>
</body>
</html>
