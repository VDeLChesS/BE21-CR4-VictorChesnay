<?php
    require_once "../db_connect.php";
    
    $supplier = $_GET["id"];
    
    $sql = "SELECT * FROM `products` WHERE `fk_supplier` = '{$supplier}'";
        
    $result = mysqli_query($connect, $sql);

    $layout = ''; // Initialize layout variable

    if(mysqli_num_rows($result) == 0) {
         // Display the media published by the specific publisher
        // You can format and display the result as desired
        $layout .= "No result";

    } else {
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach($rows as $value) {
            $layout .= "
                <div class='card'>
                    <img src='../pictures/{$value["picture"]}' class='card-img-top' alt='...'>
                    <div class='card-header'>
                        <h2 class='card-title'>{$value["name"]}</h2>
                    </div>
                    <div class='card-body'>
                        <h3 class='card-title'>{$value["price"]} €</h3>
                        <h5 class='card-text'>{$value["category"]}</h5>
                        <p class='card-text'>{$value["description"]}</p>
                    </div>
                </div>"
            ;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Code Review 4</title>
        <style>
            ::after, ::before {box-sizing: border-box;}
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            body {
                font-family: Arial, sans-serif;
                background-color: #CE2029;
                padding: 10px;
                margin: 10px;
            }
        </style>

    </head>
    <body>
        <div class="container">
            <div class="row row-cols-3 justify-content-around">
                <?= $layout ?>
            </div>
        </div>
        <footer>
            <a class="btn btn-warning btn-lg" href="index.php">Go Back</a>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>
