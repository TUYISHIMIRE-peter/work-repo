<?php
session_start();
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">


        <title>ASSIGNMENT</title>
    </head>
    <body>
        <header class="text-white p-1 text-center" style="background-color:red;">
            <h5>Assignment</h5>
        </header>
        <form action="php/create.php" method="post">
    <div class="d-flex justify-content-center align-items-center" style="height:550px;">
        <!-- <h1>Test</h1> -->
        <div class="border px-4 pt-4 position-relative text-center w-26">
                <i class="fa fa-user-circle text-info" aria-hidden="true" style="font-size:60px;position:absolute;top:-35px"></i>
                <?php
                $con= mysqli_connect("localhost","root","","assignment");
                $email = mysqli_real_escape_string($con, $_SESSION['email']);
                $email = $_SESSION['email'];
                    $select=$con->query("SELECT * FROM User WHERE email='$email'");
                    $row=mysqli_fetch_array($select);
                    if(is_array($row)){
                    }
                $Email = $row['email'];
                $username=$row['lastname'];
                                                
            ?>  
                <h5>congrat,<?php echo $username;?></h5>
            <div class="rounded-pill px-3 border d-flex bg-light">
            <i class="fa fa-user-circle text-info pt-1 pe-2" aria-hidden="true" ></i>
                            <?php echo $Email;?>
            </div>
            <div class='my-5 pb-5'>
                <h6>help us in the jurney of trust</h6>
            <p>check the above email to cconfirm the email ownship</p>
        </div>
           
        
        
    </div>
</form>
    </body>
    </html>