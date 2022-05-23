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
            <h5>I can't wait to create an account</h5>
            <div class="first my-2 mb-3  d-flex position-relative justify-content-center m-1">
                <div style="position: relative">
                    <input type="text" name="firstname" id="" placeholder="firstname" class="form-control ps-4">
                    <i class="fa fa-solid fa-user text-info " aria-hidden="true"style="font-size: 20px;position:absolute; top: 8px;left: 7px"></i>
                </div>
                <div style="position: relative">
                <input type="text" name="lastname" id="" placeholder="lastname" class="form-control ps-4"> 
                <i class="fa fa-solid fa-user text-info " aria-hidden="true"style="font-size: 20px;position:absolute; top: 8px;left: 7px"></i>
                </div> 
                </div>
                <div class="position: relative">
                    <div tyle="position: relative">
                        <input type="email" name="email" id="" placeholder="email" class="form-control ps-4">
                        <i class="fa fa-solid fa-envelope text-info " aria-hidden="true" style="font-size: 20px; position: absolute;top:120px; left: 28px"></i>
                    <br>
                
                    </div>
                    <div position: relative>
                        
                        <input type="password" name="password" id="show_pass" placeholder="Choose password" class="form-control ps-4" >
                        <i class="fa fa-solid fa-key text-info " aria-hidden="true" style="font-size:25px; position: absolute; top: 180px; left: 28px "></i>
                        <span class="show" onclick="show_pass()"><i class="fa fa-solid fa-eye text-info " aria-hidden="true" style="font-size: 1rem; position: absolute;top: 185px; right: 29px"></i>
                        </span>
                    </div>
                    
                    <button type="submit" class="btn btn-primary form-control my-2" style="border-radius:30px;" name="submit">Next</button>
                    
                    <div class="d-flex align-items-center px-3">
                        <div class="border w-100" style="height:2px"></div>
                        <div class="px-2">or</div>
                        <div class="border w-100" style="height:2px"></div>
                    </div>
                    
                    <div>
                        <div class="first my-2 mb-3  d-flex position-relative justify-content-center m-1">
                            
                        <i class="fa fa-google-plus-square" aria-hidden="true" style="position:relative;top10px;font-size: 2rem"></i>
                        <div>
                    <button type="submit" class="btn btn-danger form-control p-0">Continue with Google</button>
                    <h6 class="" style="color:red;"><b><i><u>Already have an account?</b></i></u><a style="color:red;" href="login.php">SIGN IN</a>
                        </div>
                        
                    </div></h6>
                    
                </div>
            </div>
        </div>
    </div>
    <div>
        </form>
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