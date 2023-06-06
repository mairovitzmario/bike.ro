<?php
session_start();
include("functions.php");
include("conn.php");

$user_data = get_user_data($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bike.ro</title>

    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/nav_style.css">
    <link rel="stylesheet" href="styles/index_style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@100;300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Turret+Road:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="shortcut icon" href="#" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script src="scripts/index_script.js"></script>
    <script src="scripts/nav_script.js"></script>

</head>
<body>

    <!--NAV BAR-->
    <div id="navbar"></div>


    <!--BLANK SPACE-->
    <div class="top-separator"></div>

    <!--SLIDESHOW-->
    <div class="slideshow-container">
        <div class="mySlides fade">
          <img src="img/slide1.jpg" style="width:100%">
        </div>
        
        <div class="mySlides fade">
          <img src="img/slide2.jpg" style="width:100%">
        </div>
        
        <div class="mySlides fade">
          <img src="img/slide3.jpg" style="width:100%">
        </div>
        
    </div>
    <br>     

    <div style="text-align:center; margin: 0;">
        <span class="dot" id="dot1"></span> 
        <span class="dot" id="dot2"></span> 
        <span class="dot" id="dot3"></span> 
    </div>


<div class="center twin-parent">

    <div class="twin">
        <div class="icon-container">
            <div class="icon">
                <i class="material-icons" style="font-size: 50px;">local_shipping</i>
            </div>
            <p>Livrare rapidă.</p>
        </div>
          
        <div class="icon-container">
            <div class="icon">
                <i class="material-icons" style="font-size: 50px;">payments</i>
            </div>
            <p>Plată ramburs.</p>
        </div>
    </div>
      
    <div class="twin">
        <div class="icon-container">
            <div class="icon">
                <i class="material-icons" style="font-size: 50px;">outbox</i>
            </div>
            <p>Retur garantat.</p>
        </div>
    
        <div class="icon-container">
            <div class="icon">
                <i class="material-icons" style="font-size: 50px;">verified_user</i>
            </div>
            <p>Calitate asigurată.</p>
        </div>
    </div>
    
</div>

</body>


</html>

