<?php 
require_once "db_connect.php";

if(isset($_GET['search'])) {
    $search = $_GET['search'];
    // Modify SQL query to include search filter
    $sql = "SELECT * FROM `list_of_media` WHERE `title` LIKE '%$search%' OR CONCAT(`author_firstname`, ' ', `author_lastname`) LIKE '%$search%'";
} else {
    $sql = "SELECT * FROM `list_of_media`";
} 

$result = mysqli_query($connect, $sql);

$cards = "";

if (mysqli_num_rows($result) == 0) {
    $cards = "<p>No results found</p>" ;
} else {
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC) ;
    foreach ($rows as $value) {
        $cards .= "

        <div class='card'>
            <h5 class='card-header'>{$value["title"]}</h5>
            <img src='pictures/{$value["picture"]}' class='card-img-top' alt='...'>
            <div class='card-body'>
                <ul class='list-group list-group-flush'>
                    <li class='card-text'>ISBN: {$value["ISBN"]}</li>
                    <li class='card-text'>Author: {$value["author_firstname"]} {$value["author_lastname"]}</li>
                    <li class='card-text'>Type: {$value["media_type"]}</li>
                    <li class='card-text'>Published Year : {$value["publish_year"]}</li>
                    <li class='card-text'><a href='publisher.php?publisher={$value["publisher"]}' class='card-text'>Publisher: {$value["publisher"]}</a></li>
                </ul>
            </div>
            <div class='card-footer'>
                <a href='details.php?id={$value["id"]}' class='btn btn-primary'>More Details</a>
            </div>
        </div>";
    }
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
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">CodeFactory</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="create.php">New Media</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact us</a>
                        </li>
                    </ul>
                </div>
                <div class="d-flex">
                    <form class="d-flex" action="index.php" method="get">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <div class="jumbotron jumbotron-fluid">
            <div class="header">
                <h1 class="display-4">Welcome to our Library</h1>
                <p class="lead">We have a vast variety of Books, Movies and CD's to choose from.</p>
                <a type="button" class="btn btn-warning btn-lg" href="create.php">Add New Item</a><br><br>
            </div>
        </div>
        <main class="container-fluid">
            <?= $cards ?>
        </main>
        <footer>
            <p>&copy; 2021 Victor Ch. All rights reserved</p>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>
