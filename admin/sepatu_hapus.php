<?php include '../koneksi.php';

$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM sepatu WHERE kode_sepatu='$id'");

header("location:datasepatu.php");
