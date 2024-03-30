<?php
$hostname = "127.0.0.1"; // this is the hostname that you can find in the PhpMyAdmin and you can write "localhost" too
$username = "root"; // be default the userName for the databases is root
$password = "";
$dbname = "restaurant_database";

// Create connection
$conn = new mysqli($hostname, $username, $password, $dbname);

// Check connection
if(!$conn) {
    die( "Connection failed: " . mysqli_connect_error() );
}

