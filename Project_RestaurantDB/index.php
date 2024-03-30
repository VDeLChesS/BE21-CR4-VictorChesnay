<?php 
require_once "db_connect.php";

$sql = "SELECT * FROM `Customer`";

$result = mysqli_query($connect, $sql);

mysqli_close($connect);

?>
<!DOCTYPE html>
<html lan="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Project Restaurant DataBase</title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
        <style>
            body,
            html {
                height: 100%
            }

            body,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                font-family: "Amatic SC", sans-serif
            }

            .menu {
                display: none
            }

            .bgimg {
                background-repeat: no-repeat;
                background-size: cover;
                background-image: url("https://img.freepik.com/photos-premium/delicieux-escargots-mer-cuits-aux-herbes-beurre-ail-plaque-metal-fourchettes-verre-vin-cuisine-gastronomique-menu-du-restaurant-cuisine-francaise-traditionnelle_114941-5917.jpg?w=900");
                min-height: 90%;
            }
        </style>
    </head>
    <body>
        <div class="w3-top w3-hide-small">
            <div class="w3-bar w3-xlarge w3-black w3-opacity w3-hover-opacity-off" id="myNavbar">
                <a href="index.php" class="w3-bar-item w3-button">HOME</a>
                <a href="menu.php" class="w3-bar-item w3-button">MENU</a>
                <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
                <a href="#myMap" class="w3-bar-item w3-button">CONTACT</a>
                <div class="w3-container w3-display-right">
                    <a href="login.php" class="w3-bar-item w3-button">Login</a>
                    <a href="register.php" class="w3-bar-item w3-button">Register</a>
                </div>
            </div> 
        </div>

        <!-- Header with image -->
        <header class="bgimg w3-display-container w3-grayscale-min" id="home">
            <div class="w3-display-bottomleft w3-padding">
                <span class="w3-tag w3-xlarge">Open from 9am to 12pm</span>
            </div>
            <div class="w3-display-middle w3-center">
                <span class="w3-text-white w3-hide-small" style="font-size:100px">Traditional<br>FRENCH Cuisine</span>
                <span class="w3-text-white w3-hide-large w3-hide-medium" style="font-size:60px"><b>Traditional<br>FRENCH Cuisine</b></span>
                <p><a href="menu.php" class="w3-button w3-xxlarge w3-black">Let me see the menu</a></p>
            </div>
        </header>
        <main>
            <div class="w3-container w3-padding-64 w3-red w3-grayscale w3-xlarge" id="about">
                <div class="w3-content">
                    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">About</h1>
                    <p>Le Petit Bistrot Parisien, </p>
                    <p><strong>What Are Our Specialities ?</strong> French Specialities <img src="images/french_cuisine.jpg" style="width:150px" class="w3-circle w3-right" alt="french-cuisine"></p>
                    <p>We are proud of our interiors.</p>
                    <img src="https://w0.peakpx.com/wallpaper/14/237/HD-wallpaper-a-restaurant-dinning-france-food-restaurant.jpg" style="width:100%" class="w3-margin-top w3-margin-bottom" alt="Restaurant">
                    <h1><b>Opening Hours</b></h1>

                    <div class="w3-row">
                        <div class="w3-col s6">
                            <p>Mon & Tue CLOSED</p>
                            <p>Wednesday 10.00 - 24.00</p>
                            <p>Thursday 10:00 - 24:00</p>
                        </div>
                        <div class="w3-col s6">
                            <p>Friday 10:00 - 12:00</p>
                            <p>Saturday 10:00 - 23:00</p>
                            <p>Sunday Closed</p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Image of location/map -->
            <img src="https://www.w3schools.com/w3images/map.jpg" class="w3-image w3-greyscale" style="width:100%;" id="myMap">

            <!-- Contact -->
            
        </main>
        <!-- Footer. This section contains an ad for W3Schools Spaces. You can leave it to support us. -->
        <footer class="w3-center w3-black w3-padding-48 w3-xxlarge">
            <p>Powered by Victor Chesnay</p>
        </footer>

    </body>

</html>