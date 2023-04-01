

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- css link -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/sign.css">
  <title>Cycle Online Shop</title>
</head>
<body>
  <header class="header">
    <nav>
    <div class="nav-img-title">
        <a class="nav-car-title" href="signIn.php"> Cycle Shop Online</a>
      </div>
      <div class="nav-left-box">
        <a class="nav-left" href="signIn.php">Sign in</a>
      </div>
    </nav>
  </header>

  <section class="sec-1">
        <form action="create.php" class="sign-up-main"  method = "post" id="login-area" enctype="multipart/form-data">
            <!-- <div class="two-part left-part common">
                <img class="left-img" src="images/signupbackground1.jpg" alt="">
            </div> -->
            <div class="two-part right-part common right">
                <div class="right-first right-back">
                    <h1 class="signup-title">First Name</h1>
                    <input class="input-box" type="text" placeholder="First Name" name = "fname">
                    <h1 class="signup-title">Last Name</h1>
                    <input class="input-box" type="text" placeholder="Last Name" name = "lname">
                    <h1 class="signup-title">Email</h1>
                    <input class="input-box" type="text" placeholder="Email" name = "email">

                    <div>
                        <input class="btn btn-dark" name="submit" type="submit" value = "Sign Up">
                    </div>
                </div>
                <div class="right-last right-back">
                    <h1 class="signup-title">Password</h1>
                    <input class="input-box" type="password" placeholder="Password" name = "pass">
                    <h1 class="signup-title">Phone Number</h1>
                    <input class="input-box" type="number" placeholder="Phone Number" name = "num">
                    <h1 class="signup-title">Date of Birth</h1>
                    <input class="input-box" type="date" placeholder="Birth Date" name = "bdate">
                </div>
            </div>
        </form>
    </section>


    
    
  </body>
</html>