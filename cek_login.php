<?php
session_start();
include 'koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

$login = mysqli_query($conn, "SELECT * FROM user INNER JOIN role ON user.role_id = role.id_role WHERE email='$email'");
$cek = mysqli_num_rows($login);

if ($cek > 0) {
	$data = mysqli_fetch_assoc($login);
	if (password_verify($password, $data['password'])) {
		if ($data['namarole'] == "admin") {
			// buat session login dan email
			$_SESSION['nama'] = $data['nama'];
			$_SESSION['email'] = $data['email'];
			$_SESSION['level'] = "admin";
			$_SESSION['flash_message'] = "<script>toastr['success']('Login Berhasil', 'Berhasil')</script>";
			header("location:admin");
		} else if ($data['namarole'] == "user") {
			$_SESSION['nama'] = $data['nama'];
			$_SESSION['email'] = $data['email'];
			$_SESSION['level'] = "user";
			$_SESSION['flash_message'] = "<script>toastr['success']('Login Berhasil', 'Berhasil')</script>";
			header("location:index.php");
		}
	} else {
		$_SESSION['flash_message'] = "<script>toastr['error']('username/password salah', 'Berhasil')</script>";
		header("location:login");
	}
} else {
	header("location:index.php?pesan=gagal");
}
