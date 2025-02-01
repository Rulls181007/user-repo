<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "mini_googledb.sql";

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
