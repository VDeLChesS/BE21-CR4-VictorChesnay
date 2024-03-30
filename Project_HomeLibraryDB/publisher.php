<?php
require_once "db_connect.php";

$layout = ''; // Initialize layout variable

if(isset($_GET['publisher'])) {
    $publisher = $_GET['publisher'];
    
    // Prevent SQL injection
    $publisher = mysqli_real_escape_string($connect, $publisher);

    $sql = "SELECT * FROM list_of_media WHERE publisher = '$publisher'";
    $result = mysqli_query($connect, $sql);

    if(mysqli_num_rows($result) > 0) {
        // Display the media published by the specific publisher
        // You can format and display the result as desired
        echo"<h1 class='display-6'> All Published by $publisher</h1>";

        while($row = mysqli_fetch_assoc($result)) {
            $layout .= "
                <div class='col'>
                    <div class='card'>
                        <h2 class='header'>{$row['title']}</h2>
                        <img src='pictures/{$row['picture']}' class='card-img-top' alt='...'>
                        <div class='card-body'>
                            <ul class='list-group list-group-flush'>
                                <li class='list-group-item'>ISBN: {$row['ISBN']}</li>
                                <li class='list-group-item'>Author: {$row['author_firstname']} {$row['author_lastname']}</li>
                                <li class='list-group-item'>Published Year: {$row['publish_year']}</li>
                                <li class='list-group-item'>Media Type: {$row['media_type']}</li>
                            </ul>
                        </div>
                        <div class='card-footer'>
                            <a href='details.php?id={$row['id']}' class='btn btn-primary'>More Details</a>
                        </div>
                    </div>
                </div>
                ";

            }
            // Display media information as Bootstrap cards
            
        } else {
            $layout .= "No media found for publisher: $publisher";
        }
    } else {
        $layout .= "Publisher parameter not provided";
    }


mysqli_close($connect);
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
            <div class="row justify-content-around">
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
