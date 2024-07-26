<?php
   session_start();
   include_once "./config/dbconnect.php";

?>
       
 <!-- nav -->
 
        <nav class="navv">
            <a href="#" id="logo"><img src="assets/logo 2.png" class="logo2"></a>
            <ul>
            <li><a href="http://localhost/CeylonHappens/index.php">home</a></li>
                <li><a href="http://localhost/CeylonHappens/aboutus/index.php">About Us</a></li>
                <li><a href="#">Event</a></li>
                <li><a href="#">News</a></li>
                <li><a href="http://localhost/CeylonHappens/contactus/contactus.html">Contact Us</a></li>
            </ul>
        </nav>

    
    <div class="user-cart">  
        <?php           
        if(isset($_SESSION['user_id'])){
          ?>
          <a href="" style="text-decoration:none;">
            <i class="fa fa-user mr-5" style="font-size:30px; color:#fff;" aria-hidden="true"></i>
         </a>
          <?php
        } else {
            ?>
            <a href="" style="text-decoration:none;">
                    <i class="fa fa-sign-in mr-5" style="font-size:30px; color:#fff;" aria-hidden="true"></i>
            </a>

            <?php
        } ?>
    </div>  
</nav>
