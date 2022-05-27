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
        <form action="php/comfirm.php" method="post">
    <div class="d-flex justify-content-center align-items-center" style="height:550px;">
        <!-- <h1>Test</h1> -->
        <div class="border px-4 pt-4 position-relative text-center w-26">
                <i class="fa fa-user-circle text-info" aria-hidden="true" style="font-size:60px;position:absolute;top:-35px"></i>
                <?php
                 if (isset($_POST['submit'])) {
                   $_SESSION['email']= $email=$_POST['email'];
                    $con= mysqli_connect("localhost","root","","assignment");
                $email = mysqli_real_escape_string($con, $email);
                    $select=$con->query("SELECT * FROM User WHERE email='$email'");
                    $row=mysqli_fetch_array($select);
                $username=$row['lastname'];
                 } 
                                            
            ?>  
                <h5>hi,<?php echo $username;?></h5>
            <div class="rounded-pill px-3 border d-flex bg-light">
            <i class="fa fa-user-circle text-info pt-1 pe-2" aria-hidden="true" ></i>
                            <?php echo $email;?>
            </div>
            <div position: relative class="py-4">            
                <input type="password" name="password" id="show_pass" placeholder="Choose password" class="form-control ps-4" >
                <i class="fa fa-solid fa-key text-info " aria-hidden="true" style="font-size:25px; position: absolute; top: 115px; left: 28px "></i>
                <span class="show" onclick="show_pass()"><i class="fa fa-solid fa-eye text-info " aria-hidden="true" style="font-size: 1rem; position: absolute;top: 115px; right: 29px"></i>
                </span>
            </div>
            <button type="submit" class="btn btn-primary form-control my-2" style="border-radius:30px;" name="submit">Next</button>        
    </div>
</form>
<footer class="d-flex bg-primary justify-content-between py-2 fixed-bottom">
         <a href="#" class="text-white mx-3">About us</a>
        <a href="#" class="text-white">Advertisement</a>
        <a href="#" class="text-white">Kigali, Rwanda</a>
        <a href="#" class="text-white">How Search Work</a>
        <a href="#" class="text-white mx-3">Privacy</a> 
    </footer>
    </body>
    </html>
    <script>
        function show_pass(){
            var x = document.getElementById("show_pass");
            if(x.type=='password'){
                x.type = "text";
                y.style.diplay = "block";
            }
            else{
                x.type = "password";
                y.style.diplay = "block";
            }
        }
        </script>