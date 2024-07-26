<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>login page</title>
</head>

<body>
        <nav class="navv">
            <a href="#" id="logo"><img src="assets/logo 2.png" class="logo2"></a>
            <ul>
            <li><a href="http://localhost/CeylonHappens/index.php">Home</a></li>
                <li><a href="http://localhost/CeylonHappens/aboutus/index.php">About Us</a></li>
                <li><a href="http://localhost/CeylonHappens/events/form.php">Event</a></li>
                <li><a href="http://localhost/CeylonHappens/news/news.php">News</a></li>
                <li><a href="http://localhost/CeylonHappens/contactus/contactus.html">Contact Us</a></li>
            </ul>
        </nav>

        
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form method="post" action="register.php">
                <h1>Login</h1>
                <br>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="--------------------">
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="--------------------">
                </div>
                <a href="#">Forget Your Password?</a>
                <button type="submit" class="btn" value="Sign In" name="signIn">Login</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form method="post" action="register.php">
                <h1 >Create Account</h1><br>
                <div class="name-group">
                    <div class="input-group">
                        <label for="first_name">Name</label>
                        <input type="text" id="name" name="first_name" placeholder="----------" required>
                    </div>
                    <div class="input-group">
                        <label for="city">City</label>
                        <input type="text" id="city" name="city" placeholder="----------" required>
                    </div>
                </div>
            
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="---------------" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="---------------" required>
                </div>
                <div class="input-group">
                    <label for="retype-password">Retype-Password</label>
                    <input type="password" id="password" name="password" placeholder="--------------" required>
                </div>
                <div class="age-gender-group">
                    <div class="input-group">
                        <label for="age">Age</label>
                        <input type="number" id="age" name="age" placeholder="--" required>
                    </div>
                    <div class="input-group">
                        <label>Gender:</label>
                        <div class="radio-group">
                        <input type="radio" id="male" name="gender" value="male">
                        <label for="male">Male</label><p> </p>
                        <input type="radio" id="female" name="gender" value="female">
                        <label for="female">Female</label>
                    </div>
                </div>
                </div>
                <div class="input-group">
                    <label>Interests:</label>
                    <div class="radio-group">
                        <input type="checkbox" id="music" name="interests" value="music">
                        <label style="font-size: small;" for="music">Music</label><p style="margin-left: 10px;"></p>
                        <input type="checkbox" id="Tech" name="interests" value="Tech">
                        <label style="font-size: small;" for="Tech">Tech</label><p style="margin-left: 10px;"></p>
                        <input type="checkbox" id="Education" name="interests" value="Education">
                        <label style="font-size: small;" for="Education">Education</label><p style="margin-left: 10px;"></p>
                        <input type="checkbox" id="Health Care" name="interests" value="Health Care">
                        <label style="font-size: small;" for="Health Care">HealthCare</label>
                    </div>
                </div>
                <button type="submit" class="btn" value="Sign Up" name="signUp">Signin</button>
            </form>
            
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <img src="ceylon.png" alt="logo" width="400px" height="300px"> 
                    <p>Dont have an account</p>
                    <button class="hidden" id="login">Sign Up</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <img src="ceylon.png" alt="logo" width="400px" height="300px"> 
                    <p>Already have an account</p>
                    <button class="hidden" id="register">Sign In</button>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>

    <!--Waves Container-->
    <div class="footer">
        <svg
          class="waves"
          xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink"
          viewBox="0 24 150 28"
          preserveAspectRatio="none"
          shape-rendering="auto"
        >
          <defs>
            <path
              id="gentle-wave"
              d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"
            />
          </defs>
          <g class="parallax">
            <use
              xlink:href="#gentle-wave"
              x="48"
              y="0"
              fill="rgb(111, 197, 182)"
            />
            <use
              xlink:href="#gentle-wave"
              x="48"
              y="3"
              fill="rgb(61, 176, 157)"
            />
            <use
              xlink:href="#gentle-wave"
              x="48"
              y="5"
              fill="rgba(255,255,255,0.3)"
            />
            <use xlink:href="#gentle-wave" x="48" y="7" fill="rgb(27, 161, 139)" />
          </g>
        </svg>
      </div>
      <!--Waves end-->
    </div>
    <!--Header ends-->

    <!--Content starts-->
    <div class="contentss flex">
    <img src="assets/logo 2.png" style=" max-width: 140px;
    max-height: fit-content;
    margin-top: 15px;
    margin-left: 1px;" >


        <div class="footerNav">
            <ul><li><a href="">Home</a></li>
                <li><a href="">News</a></li>
                <li><a href="">About us</a></li>
                <li><a href="">Evant</a></li>
                <li><a href="">Contact Us</a></li>
            </ul>
        </div>
        <div class="socialIcons">
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-instagram"></i></a>
            <a href=""><i class="fa-brands fa-twitter"></i></a>
            <a href=""><i class="fa-brands fa-google-plus"></i></a>
            <a href=""><i class="fa-brands fa-youtube"></i></a>
        </div>
        <p style="padding-bottom:20px; padding-top:15px; color:white;">Copyright &copy;2024; Designed by Group 10</p>
    </div>

    <!--Content ends-->

</body>

</html>