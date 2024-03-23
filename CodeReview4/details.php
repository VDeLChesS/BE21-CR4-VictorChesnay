<?php
require "db_connect.php";

$id = $_GET["id"];

$sql = "SELECT * FROM `list_of_media` WHERE `id` = {$id}";

$result = mysqli_query($connect, $sql);

$row = mysqli_fetch_assoc($result);

$layout = "";

if ($result->num_rows > 0) {
    echo"<header class='container'>
            <h1 class='display-4'> {$row['media_type']} published by {$row['publisher']}</h1>
        </header>";
    $layout = "
    <div class='card mb-3'>
        <div class='row g-0'>
            <div class='col-md-4'>
                <img src='pictures/{$row["picture"]}' class='img-fluid rounded-start' alt='...'>
            </div>
            <div class='col-md-8'>
                <div class='card-body'>
                    <h5 class='card-title'><strong>{$row["title"]}</strong></h5>
                    <p class='card-text'>{$row["short_description"]}</p>
                    <ul class='list-group list-group-flush'>
                        <li class='list-group list-group-item'>Author: {$row["author_firstname"]} {$row["author_lastname"]}</li>
                        <li class='list-group list-group-item'>ISBN: {$row["ISBN"]}</li>
                        <li class='list-group list-group-item'>Published Year: {$row["publish_year"]}</li>
                        <li class='list-group list-group-item'>Publisher: {$row["publisher"]}</li>
                        <li class='list-group list-group-item'>Media Type: {$row["media_type"]}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>";
} else {
    $layout = "<p>No results found</p>" ;
}
$connect->close();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Details</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style2.css">
    </head>
    <body>
        <main class="container"> 
            <div class="container-fluid">
                <?= $layout ?>
            </div>
            <div class="container">
                <a href="index.php" class="btn btn-primary">Back to Home</a>
            </div>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
    

</html>