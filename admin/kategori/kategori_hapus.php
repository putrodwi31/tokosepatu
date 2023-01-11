<?php include '../koneksi.php';

$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM kategori WHERE id='$id'");

header("location:kategori.php");
