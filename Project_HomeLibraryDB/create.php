<?php
   require_once "db_connect.php";
   require_once "./file_upload.php";

   if(isset($_POST["create"])) {
       $title = $_POST["title"];
       $picture = fileUpload($_FILES["picture"]);
       $ISBN = $_POST["ISBN"];
       $short_description = $_POST["short_description"];
       $media_type = $_POST["media_type"];
       $author_firstname = $_POST["author_firstname"];
       $author_lastname = $_POST["author_lastname"];
       $publish_year = $_POST["publish_year"];
       $publisher = $_POST["publisher"];
       
       

       $sql = "INSERT INTO `list_of_media` (`title`, `picture`, `ISBN`, `short_description`, `media_type`, `author_firstname`, `author_lastname`, `publish_year`, `publisher`) VALUES ('{$title}', '{$picture[0]}', '{$ISBN}', '{$short_description}', '{$media_type}', '{$author_firstname}' , '{$author_lastname}', '{$publish_year}', '{$publisher}')";
       if(mysqli_query($connect, $sql)){
            echo "<div class='alert alert-success' role='alert'>
            New record has been created, {$picture[1]}
            </div>";
            header("refresh: 3; url= index.php");
        } else {
            echo "<div class='alert alert-danger' role='alert'>
            error found, {$picture[1]}
            </div>";
            header("refresh: 3; url= index.php");
        }
        // Add the closing </div> tag here
        echo "</div>";
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
            background: rgb(238,174,202);
            background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
        }
        .container {
            width: 50%;
            margin-top: 50px;
            margin-bottom: 50px;
        }
        #short_description {
            height: 100px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Add a new Item to the collection</h2>
        <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Title" name="title">
            </div>
            <div class="mb-3">
                <input type="file" class="form-control" placeholder="Item image url" name="picture">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="ISBN" name="ISBN">
            </div>
            <div class="mb-3">
                <textarea class="form-control" placeholder="Short Description" name="short_description" id="short_description"></textarea>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Media Type" name="media_type">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Author First Name" name="author_firstname">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Author Last Name" name="author_lastname">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Publish Year" name="publish_year">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Publisher" name="publisher">
            </div>
            <input class="btn btn-warning btn-lg" type="submit" value="Add New Item" name="create">
        </form>
    </div>
    <a href="index.php" class="btn btn-primary btn-lg">Back to Home</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"></script>
</body>
</html>