<?php

$username = "root";

$hostname = "127.0.0.1"; // or "localhost"

$password = "";

$databaseName = "be21_cr4_victorchesnay_biglibrary";

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

if (!$connect) {
    die("Connection failed");
}
