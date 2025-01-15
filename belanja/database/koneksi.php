<?php
$host = "localhost";
$database = "project";
$username = "root";
$password = "";

$conn = mysqli_connect($host, $username, $password, $database,);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
