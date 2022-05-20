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
                <legend><img src="icons/user.png" alt=""></legend>
                <p>I can't wait to create account</p>
                <form action="php/create.php" method="POST">
                    <span>
                        <label for="">
                            <img src="icons/account.png" alt="">
                        </label>
                        <input type="text" name="firstname" placeholder="First Name" required>
                        <label for="">
                            <img src="icons/account.png" alt="">
                    </label>
                    <input type="text" name="lastname" placeholder="Last Name" required>
                </span>
                <div class="input_class">
                    <label for="">
                        <img src="icons/email.png" alt="">
                    </label>
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="input_class">
                    <label for="">
                        <img src="icons/key.png" alt="">
                    </label>
                    <input type="password" name="password" placeholder="Choose Password" required>
                </div><br>
                <input type="submit"  value="Next" name="register">
            </form>
            <br>
            <p>or</p>
            <button> <img src="icons/search.png" alt=""> Continue with google</button>
            <p>Already have account, <a href="login.php">SIGN IN</a></p>
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