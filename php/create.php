<?php
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
                echo "<script>alert('You successfully registered'),window.location.replace('../email_verified.php')</script>";
            }
        }
    }
        ?>