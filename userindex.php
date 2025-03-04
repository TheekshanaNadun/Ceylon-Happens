<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <script src="scripts.js"></script>

    <body>
    <div class="menubar" >
	  	<?php if (isset($_SESSION['first_name'])) {  ?>
	  	
	  		<header>
            <h1></h1>
            <div class="nav1">
                <a href="logout.php" class="btn">Logout</a>
            </div>


        </header>
	  	</div>
	  	<?php } 
	  	else { ?>
	  		 <header>
            <h1></h1>
            <div class="nav1">
                <a href="/CeylonHappens/login/index.php" class="btn">Login</a>
                <a href="/CeylonHappens/login/index.php" class="btn">Sign Up</a>
            </div>


        </header>
	  	<?php } ?>
	  	<div class="user"><?php if (isset($_SESSION['first_name']))
	  		echo '<span class="welcome">Welcome &nbsp;&nbsp;</span>'.$_SESSION['first_name']; ?>
	 	</div>
	</div>
       






        <div class="home">
            <img src="assets/mount2.png" class="mount2">
            <img src="assets/mount1.png" class="mount1">
            <img src="assets/bush4.png" class="bush2">

            <h1 class="title">Ceylon Happens</h1>

            <img src="assets/bush1.png" class="bush1">
            <img src="assets/leaf3.png" class="leaf2">
            <img src="assets/leaf4.png" class="leaf1">
        </div>
        <nav class="navv">
            <a href="#" id="logo"><img src="assets/logo 2.png" class="logo2"></a>
            <ul>
            <li><a href="http://localhost/CeylonHappens/index.php">home</a></li>
                <li><a href="http://localhost/CeylonHappens/aboutus/index.php">About Us</a></li>
                <li><a href="http://localhost/CeylonHappens/events/form.php">Event</a></li>
                <li><a href="http://localhost/CeylonHappens/news/news.php">News</a></li>
                <li><a href="http://localhost/CeylonHappens/contactus/contactus.html">Contact Us</a></li>
            </ul>
        </nav>
        <div class="topmenu">

	

</div>

        <div class="container">
            <div class="item-container">
                <div class="img-container">
                    <img src="./images/img1.jpg" alt="Event image">
                </div>

                <div class="body-container">
                    <div class="overlay"></div>

                    <div class="event-info">
                        <p class="title">Bubbe's Book Club</p>
                        <div class="separator"></div>
                        <p class="info">Bellmore, NY</p>
                        <p class="price">Free</p>

                        <div class="additional-info">
                            <p class="info">
                                <i class="fas fa-map-marker-alt"></i> Grand Central Terminal
                            </p>
                            <p class="info">
                                <i class="far fa-calendar-alt"></i> Sat, Sep 19, 10:00 AM EDT
                            </p>

                            
                        </div>
                    </div>
                    <button class="action">Book it</button>
                </div>
            </div>

            <div class="item-container">
                <div class="img-container">
                    <img src="./images/img2.jpg" alt="Event image">
                </div>

                <div class="body-container">
                    <div class="overlay"></div>

                    <div class="event-info">
                        <p class="title">The Overstory</p>
                        <div class="separator"></div>
                        <p class="info">New York, NY</p>
                        <p class="price">29$</p>

                        <div class="additional-info">
                            <p class="info">
                                <i class="fas fa-map-marker-alt"></i> 245 W 52nd St, New York
                            </p>
                            <p class="info">
                                <i class="far fa-calendar-alt"></i> Sat, Sep 19, 10:00 AM EDT
                            </p>

                            
                        </div>
                    </div>
                    <button class="action">Book it</button>
                </div>
            </div>

            <div class="item-container">
                <div class="img-container">
                    <img src="./images/img3.jpg" alt="Event image">
                </div>

                <div class="body-container">
                    <div class="overlay"></div>

                    <div class="event-info">
                        <p class="title">The NY Festival</p>
                        <div class="separator"></div>
                        <p class="info">New York, NY</p>
                        <p class="price">70$</p>

                        <div class="additional-info">
                            <p class="info">
                                <i class="fas fa-map-marker-alt"></i> 245 W 52nd St, New York
                            </p>
                            <p class="info">
                                <i class="far fa-calendar-alt"></i> Sat, Sep 19, 10:00 AM EDT
                            </p>

                            
                        </div>
                    </div>
                    <button class="action">Book it</button>
                </div>
            </div>

            <div class="item-container">
                <div class="img-container">
                    <img src="./images/img4.jpg" alt="Event image">
                </div>

                <div class="body-container">
                    <div class="overlay"></div>

                    <div class="event-info">
                        <p class="title">Tech Bubble Conf</p>
                        <div class="separator"></div>
                        <p class="info">New York, NY</p>
                        <p class="price">35$</p>

                        <div class="additional-info">
                            <p class="info">
                                <i class="fas fa-map-marker-alt"></i> 245 W 52nd St, New York
                            </p>
                            <p class="info">
                                <i class="far fa-calendar-alt"></i> Sat, Sep 19, 10:00 AM EDT
                            </p>

                            
                        </div>
                    </div>
                    <button class="action">Book it</button>
                </div>
            </div>
        </div>



       

        <!--Waves Container-->
        <div class="footer">
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
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
margin-left: 1px;">


            <div class="footerNav">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">News</a></li>
                    <li><a href="">About us</a></li>
                    <li><a href="">Event</a></li>
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
            <p style="padding-bottom:20px; padding-top:15px; color:white;">Copyright &copy;2024 Designed by Group 10</p>
        </div>

        <!--Content ends-->



        <script src="script.js"></script>

    </body>

</html>