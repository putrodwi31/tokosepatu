<?php
session_start();
include 'koneksi.php';

if (isset($_POST['email'])) {
    $namalengkap    = $_POST['nama'];
    $tgl_lahir      = $_POST['tgl_lahir'];
    $email          = $_POST['email'];
    $password       = $_POST['password'];
    $password2      = $_POST['password2'];

    if ($password == $password2) {
        $conPass = password_hash($password2, PASSWORD_DEFAULT);
        $get1 = explode(" ", $namalengkap);
        $username = strtolower($get1[0] . rand(1000, 9999));
        $timestamp = date("Y-m-d H:i:s");
        $query = mysqli_query($conn, "INSERT INTO user(username,nama,tgl_lahir,role_id,email,password,created_at) VALUES ('$username','$namalengkap', '$tgl_lahir','2','$email' , '$conPass','$timestamp')");
        if ($query) {

            $_SESSION['flash_message'] = "<script>toastr['success']('Pendaftaran Berhasil', 'Berhasil')</script>";
        } else {
            $_SESSION['flash_message'] = "<script>toastr['error']('Pendaftaran gagal', 'Gagal')</script>";
        }
    } else {
        $_SESSION['flash_message'] = "<script>toastr['error']('pasword tidak sama', 'Gagal')</script>";
    }
}

header("location:daftar.php");
