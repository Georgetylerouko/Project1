<?php
session_start();
include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A business informatics website">
    <title> NEEYONE- To Become</title>
    <link rel="stylesheet" href="style.css">
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
    rel="stylesheet"
/>
<link rel="stylesheet"
href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    </head>
    <body>
      <div style="text-align:center; padding:15%;">
        <p  style="font-size:50px; font-weight:bold;">
         Hello  <?php 
         if(isset($_SESSION['email'])){
          $email=$_SESSION['email'];
          $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
          while($row=mysqli_fetch_array($query)){
              echo $row['firstName'].' '.$row['lastName'];
          }
         }
         ?>
         :)
        </p>
        <a href="logout.php">Logout</a>
      </div>
      <header>
        <h1 class="logo">FRUITY TYLER</h1>
        <nav>
            <ul class="nav-links">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <div class="main">
       <a href="#" class="user"><i class="ri-user-fill"></i>Sign in</a>
       <a href="#">Login</a>
        </div>
        <div class="box-menu" id="menu-icon">
          <i class="ri-menu-line"></i>
        </div>
      </header> 
      <hr>

    <script src="index.js"></script>
    </body>
