<?php require_once "config.php" ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?= $config['base_url']; ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= $config['base_url']; ?>assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?= $config['base_url']; ?>assets/css/styelhome.css">
    <link rel="stylesheet" type="text/css" href="<?= $config['base_url']; ?>assets/css/toastr.min.css">
    <title>SepatuKu.id</title>
    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output_image');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?= $config['base_url']; ?>">
                <strong>SepatuKu.id</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-center">
                    <form class="d-flex my-4 my-lg-0">
                        <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Cari">
                        <button class="btn btn-light" type="submit"> <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                    <?php $serv = $_SERVER['REQUEST_URI'];
                    $uri = explode("/", $serv);
                    ?>
                    <?php
                    ob_start();
                    if (!isset($_SESSION['level'])) {
                        session_start();
                    }
                    if (isset($_SESSION['level'])) {
                        if ($_SESSION['level'] == 'admin') {
                    ?>

                            <li class="nav-item text-center">
                                <a class="nav-link <?= $uri[2] == 'admin' && !$uri[3] ? 'active' : ''; ?>" aria-current="page" href="<?= $config['base_url']; ?>admin"><i class="icon fa-solid fa-house"></i> Dashboard</a>
                            </li>
                            <li class="nav-item text-center"></li>
                            <a class="nav-link <?= $uri[3] == 'sepatu' ?  'active' : ''; ?>" href="<?= $config['base_url']; ?>admin/sepatu/"><i class="fa-sharp fa-solid fa-cart-shopping"></i> Data Penjualan</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link" href="transaksi"><i class="fa-solid fa-shuffle"></i> Transaksi</a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="nav-link" href="#"><i class="fa-regular fa-rectangle-list"></i> Laporan</a>
                            </li>
                            <li class="nav-item dropdown text-center">
                                <a class="nav-link dropdown-toggle <?= $uri[3] == 'kategori' || $uri[3] == 'tambahkategori' || $uri[3] == 'ganti_password' ?  'active' : ''; ?>" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-sharp fa-solid fa-gear"></i> Ubah
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                    <li><a class="dropdown-item" href="<?= $config['base_url']; ?>admin/kategori">Pengaturan Kategori</a></li>
                                    <li><a class="dropdown-item" href="<?= $config['base_url']; ?>/ganti_password">Ganti Password</a></li>
                                </ul>
                            </li>

                    <?php }
                    } ?>

                    <?php
                    if (isset($_SESSION['nama'])) {
                    ?>
                        <li class="nav-item text-center">
                            <a class="nav-link" href="#"><i class="fa-solid fa-user"></i> Hallo, <?= $_SESSION['nama']; ?></a>
                        </li>
                        <li class="nav-item text-center">
                            <a class="nav-link" href="<?= $config['base_url']; ?>logout"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
                        </li>
                    <?php } else {
                    ?>
                        <li class="nav-item text-center">
                            <a href="login" class="btn btn-outline-primary mx-2">Masuk</a>
                            <a href="daftar" class="nav-item btn btn-primary">Daftar</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
    <script type="text/javascript" src="<?= $config['base_url']; ?>assets/js/jquery.js"></script>
    <script type="text/javascript" src="<?= $config['base_url']; ?>assets/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="<?= $config['base_url']; ?>assets/js/toastr.min.js"></script>
    <script type='text/javascript'>
        toastr.options = {
            'closeButton': true,
            'debug': false,
            'newestOnTop': false,
            'progressBar': true,
            'positionClass': 'toast-top-center',
            'preventDuplicates': false,
            'onclick': null,
            'showDuration': '300',
            'hideDuration': '1000',
            'timeOut': '5000',
            'extendedTimeOut': '1000',
            'showEasing': 'swing',
            'hideEasing': 'linear',
            'showMethod': 'fadeIn',
            'hideMethod': 'fadeOut'
        }
    </script>