<?php
    require_once "db_connect.php";
    require_once "file_upload.php";

    $error = false;  // by default, a varialbe $error is false, means there is no error in our form

    function cleanInputs($input){
        $data = trim($input); // removing extra spaces, tabs, newlines out of the string
        $data = strip_tags($data); // removing tags from the string
        $data = htmlspecialchars($data); // converting special characters to HTML entities, something like "<" and ">", it will be replaced by "&lt;" and "&gt";

        return $data;
    }

    $fname = $lname = $email = $phone_number = $address =""; // define variables and set them to empty string
    $fnameError = $lnameError = $emailError = $phoneNumberError = ""; // define variables that will hold error messages later, for now empty string

    if(isset($_POST["sign-up"])){
        $fname = cleanInputs($_POST["fname"]);
        $lname = cleanInputs($_POST["lname"]);
        $email = cleanInputs($_POST["email"]);
        $phone_number = cleanInputs($_POST["phone_number"]);
        $address = cleanInputs($_POST["address"]);
        $picture = fileUpload($_FILES["picture"]);

        // simple validation for the "first name"
        if(empty($fname)){
            $error = true;
            $fnameError = "Please, enter your first name";
        }elseif(strlen($fname) < 3){
            $error = true;
            $fnameError = "Name must have at least 3 characters.";
        }elseif(!preg_match("/^[a-zA-Z\s]+$/", $fname)){
            $error = true;
            $fnameError = "Name must contain only letters and spaces.";
        }

        // simple validation for the "last name"
        if(empty($lname)){
            $error = true;
            $lnameError = "Please, enter your last name";
        }elseif(strlen($lname) < 3){
            $error = true;
            $lnameError = "Last name must have at least 3 characters.";
        }elseif(!preg_match("/^[a-zA-Z\s]+$/", $lname)){
            $error = true;
            $lnameError = "Last name must contain only letters and spaces.";
        }

        // simple validation for the "date of birth"
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ // if the provided text is not a format of an email, error will be true
            $error = true;
            $emailError = "Please enter a valid email address";
        }else {
            // if email is already exists in the database, error will be true
            $query = "SELECT email FROM `customer` WHERE email='$email'";
            $result = mysqli_query($connect, $query);
            if(mysqli_num_rows($result) != 0){
                $error = true;
                $emailError = "Provided Email is already in use";
            }
        }

        if(empty($phone_number)){
            $error = true;
            $dateError = "Phone Number can't be empty!";
        }

        if(!$error){ // if there is no error with any input, data will be inserted to the database
            // hashing the password before inserting it to the database

            $sql = "INSERT INTO `customer` (first_name, last_name, email, phone_number, Customer_address, picture) VALUES ('$fname','$lname', '$email', '$phone_number', '$address','$picture[0]')";

            $result = mysqli_query($connect, $sql);

            if($result){
                echo "<div class='alert alert-success'>
                <p>New account has been created, $picture[1]</p>
            </div>";
            }else {
                echo "<div class='alert alert-danger'>
                <p>Something went wrong, please try again later ...</p>
            </div>";
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
                    <label for="fname" class="form-label">First name</label>
                    <input type="text" class="form-control" id="fname" name="fname" placeholder="First name" value="<?= $fname ?>">
                    <span class="text-danger"><?= $fnameError ?></span>
                </div>
                <div class="mb-3">
                    <label for="lname" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Last name" value="<?= $lname ?>">
                    <span class="text-danger"><?= $lnameError ?></span>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email address" value="<?= $email ?>">
                    <span class="text-danger"><?= $emailError ?></span>
                </div>
                <div class="mb-3">
                    <label for="phone_number" class="form-label">Phone number</label>
                    <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Phone number" value="<?= $phone_number ?>">
                    <span class="text-danger"><?= $phoneNumberError ?></span>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="<?= $address ?>">
                </div>
                <div class="mb-3">
                    <label for="picture" class="form-label">Profile picture</label>
                    <input type="file" class="form-control" id="picture" name="picture">
                </div>
                <button name="sign-up" type="submit" class="btn btn-primary">Create account</button>
                
                <span>you have an account already? <a href="login.php">sign in here</a></span>
            </form>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>