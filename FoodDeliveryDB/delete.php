<?php
require_once "db_connect.php";

$id = $_GET["dish_Id"]; // to take the value from the parameter "id" in the url
$sql = "SELECT * FROM dishes WHERE dish_Id = $id"; // finding the product
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);  // fetching the data
if ($row["picture"] != "steak_tartare.jpg") { // if the picture is not product.png (the default picture) we will delete the picture
    unlink("images/$row[picture]");
}

$delete = "DELETE FROM dishes WHERE dish_Id = $id"; // query to delete a record from the database

if (mysqli_query($conn, $delete)) {
    header("Location: index.php");
} else {
    echo "Error";
}

mysqli_close($conn);