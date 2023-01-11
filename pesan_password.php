<?php include 'templates/header.php'; ?>
<?php
ob_start();
if (isset($_SESSION['flash_message'])) {
    $pesan = $_SESSION['flash_message'];
    unset($_SESSION['flash_message']);
    echo $pesan;
}
if (isset($_SESSION['level'])) {
    if ($_SESSION['level'] == 'admin') {
        header("location:admin/index.php");
    } else {
        header("location:index.php");
    }
}
?>