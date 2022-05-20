<?php
  session_start();
  include 'php/connect.php';
  if (isset($_POST['checkEmail'])){
        $mail=$_POST['email'];
        $pword=$_POST['pword'];
        $select=$con->query("SELECT * FROM User WHERE email='$mail' AND password='$pword'");
        $row=mysqli_fetch_array($select);
        if(is_array($row)){
            $_SESSSION['email']=$_POST['email'];
            $_SESSSION['pword']=$_POST['password'];
        }
        else{
            echo "<script>alert('Invalid email')</script>";
        }
        if(isset($_SESSSION['email'])) {
            header("location:dash.php");
        }
    }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Assignment</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Assignment</h2>
        </div>
        <center>
        <fieldset>
                    <br>
                <h3>Welcome back !</h3>
                <br><br>
                <p>Sign in</p>
                <br>
                <form method="POST">
                <div class="input_class">
                    <label for="">
                        <img src="icons/account.png" alt="">
                    </label>
                    <input type="email" name="email" placeholder="Email" class="uniqueMail">
                </div>
                <div class="input_class">
                    <label for="">
                        <img src="icons/key.png" alt="">
                    </label>
                    <input type="password" name="pword" placeholder="password" class="uniqueMail">
                </div>
                    <input type="submit" value="Next" class="uniqueMail" name="checkEmail">
            </form>
            <br><br>
            <button> <img src="icons/search.png" alt=""> Continue with google</button>
            <p><a href="index.php">Create accoount</a></p>
        </fieldset>
    </center>
        <div class="footer">
            <ul>
                <li>About Us</li>
                <li>Advertising</li>
            </ul>
            <p>KigalI, Rwanda</p>
            <ul>
                <li>Home</li>
                <li>Search</li>
                <li>Work</li>
                <li>Privacy</li>
            </ul>
        </div>
    </div>
</body>
</html>