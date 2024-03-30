<?php
    session_start();

    if(isset($_SESSION["user"])){ // if a session "user" is exist and have a value
        header("Location: home.php"); // redirect the user to the home page
    }

    if(isset($_SESSION["admin"])){ // if a session "adm" is exist and have a value
        header("Location: dashboard.php"); // redirect the admin to the dashboard page
    }

    require_once "db_connect.php";
    require_once "file_upload.php";
    require_once "functions.php";

    $error = false;  // by default, a varialbe $error is false, means there is no error in our form
    $fnameError = $first_name = $lnameError = $last_name = $emailError = $email = $passError = $dateError = $date_of_birth = $address = "";

    if(isset($_POST["sign-up"])){
        $first_name = cleanInput($_POST["first_name"]);
        $last_name = cleanInput($_POST["last_name"]);
        $email = cleanInput($_POST["email"]);
        $password = cleanInput($_POST["password"]);
        $date_of_birth = cleanInput($_POST["date_of_birth"]);
        $picture = fileUpload($_FILES["picture"]);

        $address = cleanInput($_POST["address"]);

        // simple validation for the "first name"
        if (empty($first_name)) {
            $error = true;
            $fnameError = "You can't leave the first name empty";
        } elseif (strlen($first_name) < 3) {
            $error = true;
            $fnameError = "First name must be at least 3 chars";
        } elseif (!preg_match("/^[a-zA-Z\s]+$/", $first_name)) {
            $error = true;
            $fnameError = "First name must contain only letters and spaces";
        }
    
        # validation for last_name
    
        if (empty($last_name)) {
            $error = true;
            $lnameError = "You can't leave the last name empty";
        } elseif (strlen($last_name) < 3) {
            $error = true;
            $lnameError = "Last name must be at least 3 chars";
        } elseif (!preg_match("/^[a-zA-Z\s]+$/", $last_name)) {
            $error = true;
            $lnameError = "Last name must contain only letters and spaces";
        }
    
        # validation for email
        if (empty($email)) {
            $error = true;
            $emailError = "Email can't be empty";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = true;
            $emailError = "please, enter a valid email";
        } else {
            $sql = "SELECT `email` FROM `users` WHERE `email` = '{$email}'";
            $result = mysqli_query($connect, $sql);
            if (mysqli_num_rows($result) != 0) {
                $error = true;
                $emailError = "Email already exists!";
            }
        }
    
        # validation for password
        if (empty($password)) {
            $error = true;
            $passError = "You can't leave the password empty";
        } elseif (strlen($password) < 6) {
            $error = true;
            $passError = "password must be at least 6 chars";
        }
    
        # validation for date
    
        if (empty($date_of_birth)) {
            $error = true;
            $dateError = "please select the date of birth";
        }
    
        if (!$error) {
            $password = hash("sha256", $password);
    
            $insertQuery = "INSERT INTO `users`( `first_name`, `last_name`, `password`, `date_of_birth`, `email`, `picture`, `address`) VALUES ('{$first_name}','{$last_name}', '{$password}', '{$date_of_birth}', '{$email}', '{$picture[0]}', '{$address}')";
    
    
            $result = mysqli_query($connect, $insertQuery);
    
            if ($result) {
                echo "Success";
                $first_name = $last_name = $date_of_birth = $email = $address = "";
            } else {
                echo "Error";
            }
        }
    }
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sign Up</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1 class="text-center">Sign Up</h1>
            <form method="post" autocomplete="off" enctype="multipart/form-data">
                <div class="mb-3 mt-3">
                    <label for="first_name" class="form-label">First name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name" value="<?= $first_name ?>">
                    <span class="text-danger"><?= $fnameError ?></span>
                </div>
                <div class="mb-3">
                    <label for="last_name" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name" value="<?= $last_name ?>">
                    <span class="text-danger"><?= $lnameError ?></span>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                    <span class="text-danger"><?= $passError ?></span>
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Date of birth</label>
                    <input type="date" class="form-control" id="date" name="date_of_birth" value="<?= $date_of_birth ?>">
                    <span class="text-danger"><?= $dateError ?></span>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email address" value="<?= $email ?>">
                    <span class="text-danger"><?= $emailError ?></span>
                </div>
                <div class="mb-3">
                    <label for="picture" class="form-label">Profile picture</label>
                    <input type="file" class="form-control" id="picture" name="picture">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="<?= $address ?>">
                </div>

                <button name="sign-up" type="submit" class="btn btn-primary">Create account</button>
                
                <span>you have an account already? <a href="login.php">sign in here</a></span>
            </form>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>