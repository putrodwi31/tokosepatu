<?php
include 'koneksi.php';
session_start();
$oldpass = $_POST['oldpassword'];
$pass1 = $_POST['password'];
$pass2 = $_POST['password2'];
$email = $_SESSION['email'];

if ($_POST['oldpassword'] != "" && $_POST['password'] != "" && $_POST['password2'] != "") {
    if ($pass1 == $pass2) {

        $query = mysqli_query($conn, "SELECT * FROM user WHERE email='$email'");
        $data = mysqli_fetch_assoc($query);
        if (password_verify($oldpass, $data['password'])) {
            $conPass = password_hash($pass2, PASSWORD_DEFAULT);
            $queryUpdate = mysqli_query($conn, "UPDATE user SET password='$conPass' WHERE email='$email'");
            if ($queryUpdate) {
                $_SESSION['flash_message'] = "<script>toastr['success']('Password berhasil diubah', 'Berhasil')</script>";
                header('location:ganti_password');
            }
        } else {
            $_SESSION['flash_message'] = "<script>toastr['error']('Password lama tidak sesuai', 'gagal')</script>";
            header('location:ganti_password');
        }
    } else {
        $_SESSION['flash_message'] = "<script>toastr['error']('Konfirmasi password tidak sesuai', 'gagal')</script>";
        header('location:ganti_password');
    }
} else {
    $_SESSION['flash_message'] = "<script>toastr['error']('isikan form yang ada', 'gagal')</script>";
    header('location:ganti_password');
}


// var_dump($row);
