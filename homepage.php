<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FLAVYE - Men's Hottest</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="homepage.css">
</head>
<body>
   <header>
     <h1 class="logo"><a href="#">FLAVYE</a></h1>
       <nav>
        <ul class="nav-links">
            <li><a href="services.php">Services</a></li>
            <li><a href="contactUs.php">Contact Us</a></li>
        </ul>
       </nav>
       <div class="nav-btn">
           <button><a href="#">Sign up</a></button>
           <button><a href="#">Log in</a></button>
       </div>
        <i class="fa-solid fa-bars"></i>
   </header>
<hr>
       <div class="weargallery">
        <div class="shirts"   id="White-sunshine-sweater">
            <img src="Images/Street wear ideas.jpg" alt="White-sunshine-sweater">
            <h2>White-sunshine-sweater</h2>
            <p>$13.99</p>
        </div>
        <div class="shirts" id="Summer-collection">
            <img src="Images/summer collection.jpg" alt="White-sunshine-sweater">
            <h2>Summer collection</h2>
            <p>$14.99</p>
        </div>
        <div class="shirts"id="Teen-cartoon-shirt">
            <img src="Images/Teen Cartoon printed Shirt.jpg" alt="White-sunshine-sweater">
            <h2>Teen-cartoon-shirt</h2>
            <p>$13.99</p>
        </div>
        <div class="shirts" id="Men-high-street">
            <img src="Images/Men High Street Vintage Fade Snowflake Distressed Round Neck T-Shirt, Suitable For Casual Daily Wear In Spring And Summer.jpg" alt="White-sunshine-sweater">
            <h2>Purple High Street Vintage</h2>
            <p>$12.99</p>
        </div>
        <div class="shirts"  id="Men's-flame">
            <img src="Images/Men's Flame & Number Printed Short Sleeve T-Shirt And Shorts Set.jpg" alt="White-sunshine-sweater">
            <h2>White Men's Flame & Number printed</h2>
            <p>$13.99</p>
        </div>
        <div class="shirts" id="Brown-shirt">
            <img src="Images/Brown shirt.jpg" alt="White-sunshine-sweater">
            <h2>Brown Astronaut shirt</h2>
            <p>$13.99</p>
        </div>
        <div  class="shirts" id="full-kit">
            <img src="Images/full kit men's shirt.jpg" alt="White-sunshine-sweater">
            <h2>Teen-cartoon-shirt</h2>
            <p>$13.99</p>
        </div>
        <div class="shirts"id="Two-tone-hoodie">
            <img src="Images/Two tone hoodie.jpg" alt="White-sunshine-sweater">
            <h2>Two Tone hoodie</h2>
            <p>$15.99</p>
        </div>
        <div class="shirts"id="summer-flame-printed">
            <img src="Images/Men's Summer Flame Printed Letter Short-Sleeved Casual T-Shirt.jpg" alt="White-sunshine-sweater">
            <h2>Men's Summer Flame Printed</h2>
            <p>$12.99</p>
        </div>
    </div>
    </div>
    <main>
    </main>
   <footer>
    <div>
        <hr>
        <p>&#169; <em><span style="font-size: smaller;">copyright FLAVYE Labels</span></em></p>
           
    </div>
    <div class="icons">
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-pinterest"></i>
    </div>
</footer>

</body>
</html>