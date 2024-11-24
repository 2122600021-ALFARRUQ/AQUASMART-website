<?php
// Konfigurasi Database
$server = 'aquasmartdb.mysql.database.azure.com';
$username = 'zwfvqusiix';
$password = 'xKnW$jS1dx8SKF8S';
$database = 'as_db';
$ssl_cert = ''; // Ganti dengan path SSL certificate Anda

// Membuat koneksi ke database MySQL Azure
$conn = mysqli_init();
//mysqli_ssl_set($conn, NULL, NULL, $ssl_cert, NULL, NULL); // Mengaktifkan SSL
mysqli_real_connect($conn, $server, $username, $password, $database, 3306);

// Periksa koneksi
if (mysqli_connect_errno()) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi berhasil ke database Azure!";
}
?>
