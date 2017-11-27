<?php
$host = "localhost";
$user = "root";
$pass = "cumlaude2018";
$name = "foodict";
 
$connection = mysqli_connect($host, $user, $pass,$name) or die("Koneksi ke database gagal!");
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 
?>