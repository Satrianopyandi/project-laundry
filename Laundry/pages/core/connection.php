<?php
date_default_timezone_set('Asia/Jakarta');

$databaseHost = 'localhost';
$databaseName = 'laundry';
$databaseUsername = 'root';
$databasePassword = '';

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if (!$conn) {
    die("koneksi gagal : ".mysqli_connect_error());
} else {
    echo "koneksi berhasil";
}
?>