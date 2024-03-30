<?php
session_start();

if(!isset($_SESSION["user"]) && !isset($_SESSION["admin"])){ // if the session user and the session adm have no value
    header("Location: ../login.php"); // redirect the user to the home page
}

if(isset($_SESSION["user"])){ // if a session "user" is exist and have a value
    header("Location: ../home.php"); // redirect the user to the user page
}

require_once "../db_connect.php";

$id = $_GET["id"]; // to take the value from the parameter "id" in the url
$sqlRead = "SELECT * FROM `products` WHERE `product_id` = '{$id}'"; // finding the product
$resultRead = mysqli_query($connect, $sqlRead);

$row = mysqli_fetch_assoc($resultRead);

if ($row["picture"] != "product.jpg") {
    unlink("../pictures/{$row["picture"]}");
}

$sql = "DELETE FROM `products` WHERE `product_id` = '{$id}'";
$result = mysqli_query($connect, $sql);
if ($result) {
    header("Location: index.php");
} else {
    echo "Error";
}