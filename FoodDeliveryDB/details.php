<?php
require_once "db_connect.php";

$id = $_GET['dish_Id'];
// Prepare the SQL statement
$sql = "SELECT * FROM dishes WHERE dish_Id = {$id}";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

if ($result->num_rows > 0) {
    $layout = "
    <div class='card mb-3'>
        <div class='row g-0'>
            <div class='col-md-4'>
                <img src='images/{$row['picture']}' class='img-fluid rounded-start' alt='{$row['dish_name']}'>
            </div>
            <div class='col-md-8'>
                <div class='card-body'>
                    <h5 class='card-title'>{$row['dish_name']}</h5>
                    <p class='card-text'>Price: {$row['price']}</p>
                    <p class='card-text'>Description: {$row['dish_description']}</p>
                    <p class='card-text'>Ingredients: {$row['ingredients']}</p>
                    <p class='text-muted'>Allergens: {$row['allergenes']}</p>
                </div>

            </div>
        </div>
    </div>
  ";
} else {
    echo "Meal not found";
}

$conn->close();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Details</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h2>Details</h2>
            <?php echo $layout; ?>
        </div>
        <br>
        <div class="container mt-5">
            <a href="index.php" class="btn btn-primary">Back</a>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>



