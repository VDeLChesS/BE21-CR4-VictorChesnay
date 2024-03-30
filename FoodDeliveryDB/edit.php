<?php
require_once "db_connect.php";
require_once "file_upload.php";

$id = $_GET["dish_Id"]; // to take the value from the parameter "id" in the url
$sql = "SELECT * FROM dishes WHERE dish_Id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);


if (isset ($_POST["update"])) {
    /* taking values from inputs */
    $name = $_POST["dish_name"];
    $price = $_POST["price"];
    $picture = fileUpload($_FILES["picture"]);
    $description = $_POST["description"];


    /* checking if a picture has been selected in the input for the image */
    if ($_FILES["picture"]["error"] == 0) {
        /* checking if the picture name of the product is not product.png to remove it from pictures folder */
        if ($row["picture"] != "aligot.jpg") {
            unlink("images/$row[picture]");
        }
        $sql = "UPDATE dishes SET name = '$name', price = $price, picture = '$picture[0]' WHERE dish_Id = {$id}";
    } else {
        $sql = "UPDATE dishes SET name = '$name', price = $price WHERE dish_Id = {$id}";
    }

    if (mysqli_query($connect, $sql)) {
        echo "<div class='alert alert-success' role='alert'>
           product has been updated, {$picture[1]}
         </div>";
        header("refresh: 3; url= index.php");
    } else {
        echo "<div class='alert alert-danger' role='alert'>
           error found, {$picture[1]}
         </div>";
    }
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>

    <body>
        <div class="container mt-5">
            <h2>Update product</h2>
            <form method="POST" enctype="multipart/form-data">
                <div class="mb-3 mt-3">
                    <label for="dish_name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="dish_name" aria-describedby="dish_name" name="dish_name">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">price</label>
                    <input type="number" class="form-control" id="price" aria-describedby="price" name="price">
                </div>
                <div class="mb-3">
                    <label for="picture" class="form-label">picture</label>
                    <input type="file" class="form-control" id="picture" aria-describedby="picture" name="picture">
                </div>
                <div class="mb-3">
                    <label for="dish_description" class="form-label">description</label>
                    <textarea class="form-control" id="dish_description" rows="3" name="dish_description"></textarea>
                </div>
                <div class="mb-3">
                    <label for="ingredients" class="form-label">ingredients</label>
                    <textarea class="form-control" id="ingredients" rows="3" name="ingredients"></textarea>
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">category</label>
                    <select class="form-select" id="category" name="category">
                        <option value="1">Appetizer</option>
                        <option value="2">Main Course</option>
                        <option value="3">Dessert</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="allergens" class="form-label">allergens</label>
                    <textarea class="form-control" id="allergens" rows="3" name="allergens"></textarea>
                </div>
                <button name="create" type="submit" class="btn btn-primary">Create product</button>
                <a href="index.php" class="btn btn-warning">Back to home page</a>
            </form>
        </div>

    </body>
</html>