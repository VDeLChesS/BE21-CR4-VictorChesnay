<?php 
require_once "db_connect.php";

$sql = "SELECT * FROM dishes";

$result = mysqli_query($conn, $sql);

$cards = "";

if (mysqli_num_rows($result) == 0) {
    $cards = "<p>No results found</p>" ;
} else {
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC) ;
    foreach ($rows as $value) {
        $cards .= "
            <div class='card'>
                <img src='images/{$value["picture"]}' class='card-img-top' alt='...'>
                <div class='card-body'>
                    <h5 class='card-title'>{$value["dish_name"]}</h5>
                    <p class='card-text'>Price: {$value["price"]}$</p>
                    <p class='card-text'>Category: {$value["category"]}</p>
                    <p class='card-text'>Allergenes: {$value["allergenes"]}</p>
                    <a href='details.php?dish_Id={$value["dish_Id"]}' class='btn btn-primary'>More Details</a>
                    <a href='edit.php?dish_Id={$value["dish_Id"]}' class='btn btn-warning'>Edit</a>
                    <a href='delete.php?dish_Id={$value["dish_Id"]}' class='btn btn-danger'>Delete</a>
                </div>
            </div>";
    }
}

mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta viewport="width=device-width, initial-scale=1.0">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Restaurant</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Restaurant</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="jumbotron jumbotron-fludish_Id">
            <div class="header">
                <h1 class="display-4">Welcome to our restaurant</h1>
                <p class="lead">We serve the best French Traditional food in France</p>
            </div>
        </div>
        <header>
            <h1>Restaurant Menu</h1>
        </header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <a href="create.php" class="btn btn-success">Add a new dish</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Our Dishes</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 g-4">   
                <?php echo $cards; ?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>
