<?php
$host = "localhost";
$user = "root";      // Replace with your DB username
$pwd  = "";          // Replace with your DB password
$sql_db = "cars_db"; // Replace with your DB name

$conn = @mysqli_connect($host, $user, $pwd, $sql_db);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>