<?php
    session_start();

    require_once "db_connect.php";
    require_once "file_upload.php";

    $session = 0;
    $goBack = "";

    if (isset($_SESSION["admin"])) {
        $session = $_SESSION["admin"];
        $goBack = "dashboard.php";
    } else {
        $session = $_SESSION["user"];
        $goBack = "home.php";
    }

    $sql = "SELECT * FROM `users` WHERE `id` = '{$session}'";

    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);


    if (isset($_POST["update"])) {
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $date_of_birth = $_POST["date_of_birth"];
        $email = $_POST["email"];
        
        $picture = fileUpload($_FILES["picture"]);
        $address = $_POST["address"];
        if ($_FILES["picture"]["error"] == 4) {
            $update = "UPDATE `users` SET `first_name`='{$first_name}',`last_name`='{$last_name}',`date_of_birth`='{$date_of_birth}',`email`='{$email}', `address`= '{$address}' WHERE `id` = '{$session}'";
        } else {
            if ($row["picture"] != "avatar.png") {
                unlink("pictures/{$row["picture"]}");
            }
            $update = "UPDATE `users` SET `first_name`='{$first_name}',`last_name`='{$last_name}',`date_of_birth`='{$date_of_birth}',`email`='{$email}', `picture`='{$picture[0]}', `address`= '{$address}' WHERE `id` = '{$session}'";
        }

        $result = mysqli_query($connect, $update);

        header("Location: {$goBack}");
    }

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Edit profile</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <style>
            *, *::before, *::after {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            body {
                background: rgb(126,116,133);
                background: linear-gradient(90deg, rgba(126,116,133,1) 17%, rgba(212,12,12,1) 80%, rgba(212,12,12,1) 96%);
            }
            header {
                
                border: black 2px solid;
                background-color: #f8f9fa;
                margin-right: 25%;
                margin-left: 25%;
                margin-top: 10px;
                padding: 20px;
            }

            main {
                background-color: #f8f9fa;
                margin-top: 25px;
                margin-right: 30px;
                margin-left: 30px;
                padding: 20px;
                
            }

            img {
                width: 100%;
                height: 60%;
            }
            .btn {
                font-size: 20px;
                color: black;
                width: 150px;
                height: 45px;
                margin: 10px;
            }
            .form-control {
                margin-top: 5px;
                width: 80%;
            }

        </style>
    </head>
    <body>
        <a href="dashboard.php"><button type="button" class="btn btn-info">Go Back</button></a>
        <header>
            <h1 class="text-center">Edit Your Profile Information</h1>
        </header>
        <main class="container">
            <div class="row g-0">
                <div class="col-md-8">
                    <form method="post" autocomplete="off" enctype="multipart/form-data">
                        <div class="mb-3 mt-3">
                            <label for="first_name" class="form-label">First name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name" value="<?= $row["first_name"] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="last_name" class="form-label">Last name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name" value="<?= $row["last_name"] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="date_of_birth" class="form-label">Date of birth</label>
                            <input type="date" class="form-control" id="date" name="date_of_birth" value="<?= $row["date_of_birth"] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email address" value="<?= $row["email"] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="picture" class="form-label">Profile picture</label>
                            <input type="file" class="form-control" id="picture" name="picture">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="<?= $row["address"] ?>">
                        </div>
                        
                        <button name="update" type="submit" class="btn btn-warning">Update</button>
                    </form><br>
                </div>
                <div class="col-md-4">
                    <img src='pictures/<?=$row["picture"]?>' class='card-img-top' alt='...'>
                </div>
            </div>
        </main>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>