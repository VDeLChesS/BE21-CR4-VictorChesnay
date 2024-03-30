<?php
    require "../db_connect.php";

    session_start();
    
    if (!isset($_SESSION["user"]) && !isset($_SESSION["admin"])) {
        header("Location: ../login.php");
    }

    $session = 0;
    $goBack = "";

    if (isset($_SESSION["admin"])) {
        $session = $_SESSION["admin"];
        $goBack = "./index.php";
    } else {
        $session = $_SESSION["user"];
        $goBack = "../home.php";
    }

    $id = $_GET["id"];

    $sql = "SELECT * FROM `products` WHERE product_id = '{$id}'";

    $result = mysqli_query($connect, $sql);

    $row = mysqli_fetch_assoc($result);

    $layout = "
        <div class='row g-0'>
            <div class='col-md-4'>
                <img src='../pictures/{$row["picture"]}' class='img-fluid rounded-start' alt='...'>
            </div>
            <div class='col-md-6'>
                <div class='container-fluid'>
                    <h1 class='display-2'><strong>{$row["name"]}</strong></h1>
                    <h5 class='fw-bold'><strong>{$row["price"]}€</strong></h5>
                </div>
                <hr>
                <div class='container-fluid'>
                    <p class='fs-3'><strong>Category: {$row["category"]}</strong></p>
                    <p class='fs-5'>Description: {$row["description"]}</p>
                </div>
            </div>
        </div>"
    ;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>OnlineShop</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
        <link rel="manifest" href="../favicon/site.webmanifest">
        <link rel="mask-icon" href="../favicon/safari-pinned-tab.svg" color="#5bbad5">
        <style>
            body {
                font-family: Georgia, 'Times New Roman', Times, serif;
                background: rgb(34,193,195);
                background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(253,187,45,1) 100%);
                background-size: cover;
                background-attachment: fixed;
            }

            .btn {
                font-weight: 600;
                color: #fff;
                border-radius: 10px;
                padding: 10px 20px;
                margin: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            .header {
                color: #fff;
                align-items: center;
                margin: 10px;
            }

            .btn-bd-primary {
                font-weight: 600;
                color: #fff;
                background:rgba(240, 20, 30, 0.6);
                border-color: darkviolet;
                border-radius: 10px;
                padding: 10px 20px;
                margin: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

            }

            .btn-bd-primary:hover {
                background-color: #0056b3;
                border-radius: 2px;

            }

            .container {
                display: flex;
                height: 100%;
                margin: 2px;
                border-radius: 10px;
                overflow: hidden;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            .container > a:hover {
                background-color: aquamarine;
            }

            img {
                width: 100%;
                height: 450px;
                object-fit: cover;
                margin-right: 10%;
            }
        </style>

    </head>
    <body>
        <a href="<?= $goBack ?>"><button class="btn btn-primary" role="button">Go Back</button></a>
        <div class="header">
            <h1 class='display-4'>Product Details</h1>
        </div>
        <div class="container border-danger-subtle">
            <?= $layout ?>
        </div>
        <a href="#"><button class="btn-bd-primary" role="button">Add to Basket</button></a>
        <a href="#"><button class="btn btn-success" role="button">Buy Now</button></a>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>

