<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pinjaman_uang";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Memulai sesi
session_start();
?>
