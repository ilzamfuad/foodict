<?php
$host = "localhost";
$user = "root";
$pass = "";
$name = "text_mining";
 
$connection = mysqli_connect($host, $user, $pass,$name) or die("Koneksi ke database gagal!");
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 
?>