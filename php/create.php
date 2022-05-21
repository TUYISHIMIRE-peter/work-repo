<?php
    include 'connect.php';
    if (isset($_POST['register'])) {
        $fname=$_POST['firstname'];
        $lname=$_POST['lastname'];
        $email=$_POST['email'];
        $pword=$_POST['password'];
        if(strlen($pword)<8){
            echo "<script>alert('Password must be above 8 letters'),window.location.replace('../index.php')</script>";
            
        }
        else{
            $insert= $con->query("INSERT INTO User VALUES(NULL,'$fname','$lname','$email','$pword')");
            if($insert){
                echo "<script>alert('You successfully registered'),window.location.replace('../Login.php')</script>";
            }
            else{
                "<script>alert('Your email exist find other one'),window.location.replace('../index.php')</script>";
            }
        }
    }
?>