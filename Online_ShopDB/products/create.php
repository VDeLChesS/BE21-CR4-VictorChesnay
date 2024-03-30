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

    $qSuppliers = "SELECT * FROM `suppliers`";
    $rSuppliers = mysqli_query($connect, $qSuppliers);

    $rows = mysqli_fetch_all($rSuppliers, MYSQLI_ASSOC);
    
    $suppliers = "";
    foreach ($rows as $value) {
        $suppliers .= "<option value='{$value["supplier_id"]}'>{$value["name"]}</option>";
    }

    if(isset($_POST["create"])){
        $name = $_POST["name"];
        $price = $_POST["price"];
        $picture = fileUpload($_FILES["picture"], "product");
        $category = $_POST["category"];
        $description = $_POST["description"];
        $supplier = isset($_POST["fk_supplier"]) ? $_POST["fk_supplier"] : null;
        $sql = "INSERT INTO `products` (`name`, `price`, `picture`, `category`, `description`, `fk_supplier`, `created_at`) VALUES ('{$name}','{$price}','{$picture[0]}', '{$category}', '{$description}', '{$supplier}', NOW())";
        
        if(mysqli_query($connect, $sql)){
            echo "<div class='alert alert-success' role='alert'>
            New record has been created, {$picture[1]}
          </div>";
          header("refresh: 3; url= index.php");
        }else {
            echo "<div class='alert alert-danger' role='alert'>
            error found, {$picture[1]}
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
            <h2>Create a new product</h2>
            <form method="POST" enctype="multipart/form-data">
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" aria-describedby="name" name="name">
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
                    <label for="category" class="form-label">category</label>
                    <input type="text" class="form-control" id="category" aria-describedby="category" name="category">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">description</label>
                    <input type="text" class="form-control" id="description" aria-describedby="description" name="description">
                </div>
                <div class="mb-3">
                    <label for="fk_supplier" class="form-label">Supplier</label>
                    <select name="fk_supplier" class="form-control" id="fk_supplier">
                        <option value="null">Select a supplier</option>
                        <?= $suppliers ?>
                    </select>
                </div>
                <button name="create" type="submit" class="btn btn-primary">Create product</button>
                <a href="index.php" class="btn btn-warning">Back to Homepage</a>
            </form>
        </div>
 
    </body>
</html>