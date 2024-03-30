<?php 
    require_once "db_connect.php";
    // Check if category is set in the URL
    if(isset($_GET['category'])) {
        $category = $_GET['category'];

        // SQL query to select menu items based on category 
        $sql = "SELECT * FROM `menu_item` WHERE `category` = '{$category}'";
        $result = mysqli_query($connect, $sql);
        
        // Check if there are any results
        if ($result->num_rows > 0) {
            // Initialize the layout variable
            $layout = "";
            // Loop through each row and append menu items to the layout
            while ($row = mysqli_fetch_assoc($result)) {
                $layout .= "
                <div class='row row-cols-3 justify-content-evenly'>
                    <div class='col'>
                        <div class='card'>
                            <img src='images/{$row["picture"]}' class='card-img-top' alt='...'>
                            <div class='card-body'>
                                <h5 class='card-title'>{$row["dish_name"]}</h5>
                                <p class='card-text'>Price: {$row["price"]}$</p>
                                <p class='card-text'>Category: {$row["category"]}</p>
                                <p class='card-text'>Ingredients: {$row["ingredients"]}</p>
                                <a href='details.php?dish_id={$row["dish_id"]}' class='btn btn-primary'>More Details</a>
                            </div>
                        </div>
                    </div>
                </div>";
            }
        } else {
            // No results found for the specified category
            echo "<p>No results found</p>";
        }
        
    } else {
        // No category selected
        echo "<p>Please select a category</p>";
    }

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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
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
                <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
                <a href="#myMap" class="w3-bar-item w3-button">CONTACT</a>
                <div class="w3-container w3-display-right">
                    <a href="login.php" class="w3-bar-item w3-button">Login</a>
                    <a href="register.php" class="w3-bar-item w3-button">Register</a>
                </div>
            </div>
        </div>
        <div class="w3-container w3-black w3-padding-64 w3-xxlarge" id="menu">
            <div class="w3-content">
                <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">THE MENU</h1>
                <div class="w3-row w3-center w3-border w3-border-dark-grey">
                    <a href="javascript:void(0)" onclick="openMenu(event, 'Pizza');" id="myLink">
                        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Pizza</div>
                    </a>
                    <a href="javascript:void(0)" onclick="openMenu(event, 'Pasta');">
                        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Salads</div>
                    </a>
                    <a href="javascript:void(0)" onclick="openMenu(event, 'Starter');">
                        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Starter</div>
                    </a>
                </div>
                <div id="Pizza" class="w3-container menu w3-padding-32 w3-white">
        <div class="container">
            <div class="row row-cols-3 justify-content-evenly">
                <div class="col">
                    <div class="card">
                        <img src="images/food1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Appetizer</h5>
                            <p class="card-text">Click here to see our appetizer menu</p>
                            <a href="menu.php?category=Starter" class="btn btn-primary">Appetizer Menu</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="images/food2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Main</h5>
                            <p class="card-text">Click here to see our main menu</p>
                            <a href="menu.php?category=Main%Course" class="btn btn-primary">Main Menu</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="images/food3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Dessert</h5>
                            <p class="card-text">Click here to see our dessert menu</p>
                            <a href="menu.php?category=Dessert" class="btn btn-primary">Dessert Menu</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script>
        // Tabbed Menu
        function openMenu(evt, menuName) {
            var i, x, tablinks;
            x = document.getElementsByClassName("menu");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < x.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
            }
            document.getElementById(menuName).style.display = "block";
            evt.currentTarget.firstElementChild.className += " w3-red";
        }
        document.getElementById("myLink").click();
    </script>
</html>
