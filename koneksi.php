<?php
$localhost = 'localhost';
$username = 'root';
$pass = '';
$database = 'tokosepatu';

$conn = mysqli_connect($localhost, $username, $pass, $database);

if (mysqli_connect_errno()) {
    echo "Gagal koneksi ke database: " . mysqli_connect_error();
}
#update