<?php
 session_start();
 $email=$_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body{
            background-color:#edf0ee;
        }
        a{
            text-decoration: none;
            
        }
        a{
            color: black ;
        }
        .menus {
            border-bottom: solid skyblue;
        }
        .menus {
            background-color: ;
        }
        .set {
            width: 360px;
        }
        .profile-pic {
            border-radius: 50px;
            height: 95px;
            width: 95px;
            top: 18px;
            border: 3px;
        }
        .picc {
            border-radius: 50px;
            height: 30px;
            width: 30px;
        }
    </style>
</head>
<body>
    <!-- heading -->
    <header class="d-flex bg-danger justify-content-between align-items-center text-white p-1 text-center">
        <h5>Assignment</h5>
        <div class="dropdown">
            <a class="btn btn-danger dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            <img class="picc" src="images/mane.jpg" width="700">  <?php
                $con= mysqli_connect("localhost","root","","assignment");
                $email = mysqli_real_escape_string($con, $email);
                    $select=$con->query("SELECT * FROM User WHERE email='$email'");
                    $row=mysqli_fetch_array($select);
                    if(is_array($row)){
                    }
                    $Email=$_SESSION['email'];
                    echo $row['lastname'];
                                                
            ?>
            </a>
            <ul class="dropdown-menu bg-danger" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="php/logout.php">Log out</a></li>
            </ul>
        </div>
    </header>

    <!-- fontainer -->

    <div class="row mx-5 mt-2">
        <div class="col-md-9">
            <!-- <div class="w-100"> -->
                <div class="cover h-50 position-relative" style="background: url('images/mane.jpg');">
                    <img src=""  class="">
                    <div class="profile position-absolute" style="top:90px; left: 20px">
                    <a href="background.php"><img class="rounded-circle border border-white border-3" src="images/mane.jpg" width="100" height="100"> </a>
                        <p class="fw-bold text-white" style="margin-top:-3rem; margin-left:6.5rem;"><?php echo $email?></p>
                    </div>
                </div>
                <form action="change.php" method="post">
                <div class="change">
                    <div class="headline card mt-4">
                        <p class="mx-3 fw-bold">Headline <a href="#"><i class="fas fa-edit"></i></a> </p>
                        <p class="mx-3">Software Engineer | Data Analyst </p>
                    </div>
                    <div class="change-password mt-2">
                        <div class="bg-primary text-white" ><i class="fa fa-key mx-2"></i> Change Passwrod</div>
                        Current Password <input type="text" name="current_pass" id="" class="form-control" wi>
                        New Password <input type="text" name="new_pass" id="" class="form-control">
                        <button type="submit_password" class="btn btn-primary my-1">Set New Password</button>
                    </div>
                    </form>
                </div>
            <!-- </div> -->
        </div>
            <div class="col-md-3">
                <div class="settings">
                <!-- header-setting -->
                <div style="top: 3px;" class="shadow-lg mx-3 w-100" style="width: 200px;">
                    <div class="d-flex justify-content-center align-items-center ps-6">
                    <p class="ps-4 mt-2 text-primary fw-bold shadow set">ACCOUNT SETTING</p>
                    </div>
                    <!-- <div class="menus card ps-4">
                        <a href=""><i class="fa fa-pencil"></i> Edit Profile</a>
                    </div> -->
                    <div class="menus card ps-4 text-danger">
                        <a href="#"><i class="fas fa-edit text-primary"></i> edit profile</a>
                    </div>
                    <div class="menus card ps-4" >
                        <a href="#"><i class="fas fa-key text-primary"></i> Change Password</a>
                    </div>
                    <div class="menus card ps-4">
                        <a href="#"><i class="fa fa-flash text-primary"></i> Sign in Activities</a>
                    </div>
                    <div class="menus card ps-4">
                        <a href="php/logout.php"><i class="fa fa-clock-o text-primary"></i> Session Timeout</a>
                    </div>
                    <div class="menus card ps-4">
                        <a href="#"><i class="fa fa-heartbeat text-primary"></i> Memorialisation</a>
                    </div>
                    <div class="menus card ps-4">
                        <a href="#"><i class="fa fa-tag text-primary"></i> Jobs Feed Content</a>
                    </div>
                    <div class="menus card ps-4">
                        <a href="#"><i class="fa fa-envelope text-primary"></i> Email & SMS Notification</a>
                    </div>
                    <div class="menus card ps-4">
                        <a href="#"><i class=" fa fa-bell text-primary"></i> Push Notification</a>
                    </div>
                    <div class="menus card ps-4">
                        <a  data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-trash text-primary"></i> Delete my Account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">confirm delete</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <p>Are you sure you want to delete your account</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <a href="delete.php" class="btn btn-primary">delete</a>
      </div>
    </div>
  </div>
</div>
    <!-- footer -->
    <footer class="d-flex bg-primary justify-content-between py-2 fixed-bottom">
         <a href="#" class="text-white mx-3">About us</a>
        <a href="#" class="text-white">Advertisement</a>
        <a href="#" class="text-white">Kigali, Rwanda</a>
        <a href="#" class="text-white">How Search Work</a>
        <a href="#" class="text-white mx-3">Privacy</a> 
    </footer>
</body>
</html>