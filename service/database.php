database.php:
<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "buku_tamu";

// Membuat koneksi ke database
$db = mysqli_connect($hostname, $username, $password, $database_name);

// Memeriksa koneksi
if (!$db) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

?>