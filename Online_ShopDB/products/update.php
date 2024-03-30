<?php
    session_start();

    if(!isset($_SESSION["user"]) && !isset($_SESSION["admin"])){ // if the session user and the session adm have no value
        header("Location: ../login.php"); // redirect the user to the home page
    }
    
    if(isset($_SESSION["user"])){ // if a session "user" is exist and have a value
        header("Location: ../home.php"); // redirect the user to the user page
    }

    require_once "../db_connect.php";
    require_once "../file_upload.php";

    $id = $_GET["id"];

    $sql = "SELECT * FROM `products` WHERE `product_id` = '{$id}'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);
    

    $qSuppliers = "SELECT * FROM `suppliers`";
    $rSuppliers = mysqli_query($connect, $qSuppliers);

    $rows = mysqli_fetch_all($rSuppliers, MYSQLI_ASSOC);

    $allsuppliers = "";
    foreach ($rows as $value) {
        if ($value["supplier_id"] == $row["fk_supplier"]) {
            $allsuppliers .= "<option value='{$value["supplier_id"]}' selected>{$value["name"]}</option>";
        } else {
            $allsuppliers .= "<option value='{$value["supplier_id"]}'>{$value["name"]}</option>";
        }
    }

    if(isset($_POST["update"])) {
        /* taking values from inputs */
        $name = $_POST["name"];
        $price = $_POST["price"];
        $picture = fileUpload($_FILES["picture"], "product");
        $category = $_POST["category"];
        $description = $_POST["description"];
        $fk_supplier = $_POST["fk_supplier"];

        /* checking if a picture has been selected  */
        if($_FILES["picture"]["error"] == 4) {
            $sqlUpdate = "UPDATE `products` SET `name` = '{$name}', `price` = '{$price}', `category` = '{$category}', `description` = '{$description}', `fk_supplier` = '{$fk_supplier}' WHERE `product_id` = '{$id}'";
            /* checking if the picture name of the product is not product.png to remove it from pictures folder */
        } else {
            if($row["picture"] != "product.png"){
                unlink("../pictures/$row[picture]"); 
            }
            $sqlUpdate = "UPDATE `products` SET `name` = '{$name}', `price` = '{$price}', `picture` = '{$picture[0]}', `category` = '{$category}', `description` = '{$description}', `fk_supplier` = '{$fk_supplier}' WHERE `product_id` = '{$id}'";
        }

        $result = mysqli_query($connect, $sqlUpdate);

        if(mysqli_query($connect, $sqlUpdate)) {
            echo "<div class='alert alert-success' role='alert'>
            Product has been updated, {$picture[1]}
            </div>";
            header("refresh: 3; url= index.php");
        } else {
            echo "<div class='alert alert-danger' role='alert'>
            Something went wrong, please try again later!
            </div>";
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
        <style>
            body {
                color: aliceblue;
                background-image: linear-gradient(90deg, #020024 0%, #090979 35%, #00d4ff 100%);
            }
            .container{
                width: 50%;
            }

            #description {
                height: 100px;
            }
        </style>
    </head>
    <body>
        <div class="container mt-5">
            <h2>Update product</h2>
            <div class="text-center">
                <img src="../pictures/<?= $row["picture"] ?>" alt="<?= $row["name"] ?>" class="img-thumbnail" width="200">
            </div>
            <form method="POST" enctype="multipart/form-data">
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" aria-describedby="name" name="name" value="<?= $row["name"] ?>">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" id="price" aria-describedby="price" name="price" value="<?= $row["price"] ?>">
                </div>
                <div class="mb-3">
                    <label for="picture" class="form-label">Picture</label>
                    <input type="file" class="form-control" id="picture" aria-describedby="picture" name="picture">
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <input type="text" class="form-control" id="category" aria-describedby="category" name="category" value="<?= $row["category"] ?>">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" id="description" aria-describedby="description" name="description" value="<?= $row["description"] ?>">
                </div>
                <div class="mb-3">
                    <label for="fk_supplier" class="form-label">Supplier</label>
                    <select name="fk_supplier" class="form-control" id="fk_supplier">
                        <?= $allsuppliers ?>
                    </select>
                </div>
                <button name="update" type="submit" class="btn btn-primary">Update product</button>
            </form>
            <hr>
            <a href="index.php" class="btn btn-warning">Back to home page</a>
        </div>
    </body>
</html>