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
			$_SESSION['email'] = $email;
			$_SESSION['level'] = "admin";
			echo "ANDA ADALAH ADMIN";
		} else if ($data['namarole'] == "user") {
			$_SESSION['email'] = $email;
			$_SESSION['level'] = "pegawai";
			header("location:index.php");
		}
	}
} else {
	header("location:index.php?pesan=gagal");
}
