<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "andrian_uts_312310199";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>