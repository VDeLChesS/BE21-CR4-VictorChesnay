<?php
    
    session_start(); // creates a session or resumes the current one based on a session identifier passed via a GET or POST request, or passed via a cookie.
    
    if(isset($_SESSION["user"])){ // if a session "user" is exist and have a value
        header("Location: home.php"); // redirect the user to the home page
    }
     
    if(isset($_SESSION["admin"])){ // if a session "adm" is exist and have a value
        header("Location: dashboard.php"); // redirect the admin to the dashboard page
    }

    require_once "db_connect.php";
    require_once "functions.php";

    $error = false;  // by default, a varialbe $error is false, means there is no error in our form
    $email = ""; // define variables and set them to empty string
    $emailError = $passError = ""; // define variables that will hold error messages later, for now empty string

    if(isset($_POST["login"])){
        $email = cleanInput($_POST["email"]);
        $password = cleanInput($_POST["password"]);

        // simple validation for the "date of birth"
        if (empty($email)) {
            $error = true;
            $emailError = "You can't leave this input empty!";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = true;
            $emailError = "Please type a valid email!";
        }
    
        if (empty($password)) {
            $error = true;
            $passError = "You can't leave this input empty!";
        }
    
        if (!$error) {
            $password = hash("sha256", $password);
    
            $sql = "SELECT * FROM `users` WHERE `email` = '{$email}' and `password` = '{$password}'";
            $result = mysqli_query($connect, $sql);
            $count = mysqli_num_rows($result);
            $row = mysqli_fetch_assoc($result);
    
            if ($count == 1) {
                if ($row["status"] == "admin") {
                    $_SESSION["admin"] = $row["id"];
                    header("Location: dashboard.php");
                } else {
                    $_SESSION["user"] = $row["id"];
                    header("Location: home.php");
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <style>
            body {
                background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("pictures/login.jpg");
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
                color: white;

            }
            main {
                margin-top: 150px;

            }
            .header {
                margin-top: 100px;
                margin-bottom: 200px;
            }
        
        </style>
    </head>
    <body>
        <main class="container-fluid">
            <div class="header position-relative">
                <h1 class="text-center">Login page</h1>
                <p class="text-center">Please login to your account</p>
                <p class="text-danger"><?= $emailError ?></p>
                <p class="text-danger"><?= $passError ?></p>
            </div>
            <div class="position-relative">
                <div class="position-absolute top-50 start-50 translate-middle">
                    <form method="post">
                        <div class="mb-3">
                            <input type="email" placeholder="Type your email!" class="form-control" name="email" value="<?= $email ?>">
                            <p class="text-danger"><?= $emailError ?></p>
                            <input type="password" placeholder="Type your password" class="form-control" name="password">
                            <p class="text-danger"><?= $passError ?></p>
                            <input type="submit" value="Login now" class="btn btn-primary" name="login">
                        </div>
                        <span>you don't have an account? <a href="register.php"><button name="login" type="button" class="btn btn-info">Register Now</button></a></span>
                    </form>
                </div>
            </div>
        </main>

        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"></script>
    </body>
</html>