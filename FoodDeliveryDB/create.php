<?php
require_once "db_connect.php";
require_once "file_upload.php";

if(isset($_POST["create"])) {
    $name = $_POST["dish_name"];
    $price = $_POST["price"];
    $picture = fileUpload($_FILES["picture"]);
    $description = $_POST["dish_description"];
    $ingredients = $_POST["ingredients"];
    $category = $_POST["category"];
    $allergens = $_POST["allergens"];

        $sql = "INSERT INTO dishes (dish_name, price, picture, dish_description, ingredients, category, allergens) VALUES ('$name',$price,'{$picture[0]}', '$description', '$ingredients', $category, '$allergens')";
        if(mysqli_query($connect, $sql)){
            echo "<div class='alert alert-success' role='alert'>
            New record has been created, {$picture[1]}
            /div>";
            header("refresh: 3; url= index.php");
        } else {
            echo "<div class='alert alert-danger' role='alert'>
            error found, {$picture[1]}
            </div>";
            header("refresh: 3; url= index.php");
        }
            
    }
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
       <h2>Create a new Dish</h2>
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