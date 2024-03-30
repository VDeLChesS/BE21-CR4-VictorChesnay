<?php
    session_start(); // creates a session or resumes the current one based on a session identifier passed via a GET or POST request, or passed via a cookie.
    
    if(!isset($_SESSION["user"]) && !isset($_SESSION["admin"])){ // if the session user and the session adm have no value
        header("Location: login.php"); // redirect the user to the home page
    }
 
    if(isset($_SESSION["admin"])){ // if a session "adm" is exist and have a value
        header("Location: dashboard.php"); // redirect the user to the dashboard page
    }

    require_once "db_connect.php";
    

    $sql = "SELECT * FROM `users` WHERE `id` = {$_SESSION["user"]}"; // selecting logged-in user details from the session user
 
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);

    $readQuery = "SELECT * from products";
    $readResult = mysqli_query($connect, $readQuery);

    $layout = "";

    if (mysqli_num_rows($readResult) == 0) {
        $layout = "No products found!";
    } else {
        $rows = mysqli_fetch_all($readResult, MYSQLI_ASSOC);
        foreach ($rows as $value) {
            $layout .= "
            <div class='col'>
                <div class='card'>
                    <img src='pictures/{$value["picture"]}' class='card-img-top' alt='...'>
                    <div class='card-body'>
                        <h3 class='card-title'>{$value["name"]}</h3>
                        <h5 class='card-text'>{$value["price"]}€</h5>
                        <p class='card-text'>{$value["category"]}</p>
                        <p class='card-text'>{$value["description"]}</p>
                    </div>
                    <div class='card-footer'>
                        <a href='products/details.php?id={$value["product_id"]}' class='btn btn-success'>Details</a>
                        <a href='basket.php?id={$value["product_id"]}' class='btn btn-primary'>Add to Basket</a>
                    </div>
                </div>
            </div>";
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome <?= $row["first_name"] ?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <style>
            body {
                background-color: #f8f9fa;
            }
            .card {
                margin: 10px;
            }
            .container-fluid {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;

            }
        </style>
    </head>
    <body>
        <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand" href="myprofil.php">
                    <img src="pictures/<?= $row["picture"] ?>" alt="Bootstrap" width="30" height="24">
                </a>
                <a class="navbar-brand" href="update_myprofil.php">
                    Update profile
                </a>

                <a class="navbar-brand" href="logout.php?logout">
                    Logout
                </a>
            </div>
        </nav><hr>
        <header class="container">
            <h1 class="display-4 text-center">Welcome <?= $row["first_name"] . " " . $row["last_name"] ?></h1>
        </header>
        
        <div class="container-fluid">
            <h2 class="text-center">Products</h2>
            <hr>
            <div class="row row-cols-3">
                <?= $layout ?>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>