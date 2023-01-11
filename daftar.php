<?php include 'templates/header.php'; ?>
<div class="container">
    <h2 class="text-center mt-5"><b>SepatuKu.id</b></h2>
    <?php
    if (isset($_SESSION['flash_message'])) {
        $pesan = $_SESSION['flash_message'];
        unset($_SESSION['flash_message']);
        echo $pesan;
    }
    ?>
    <div class="row mt-4">
        <div class="col-sm-12 my-auto"></div>
        <div class="row">
            <div class="col-sm-8">
                <img src="<?= $config['base_url']; ?>assets/img/login_page.png" class="img-fluid rounded-start shadow" alt="Login_page">
            </div>
            <div class="col-sm-4">
                <div class="card rounded-start shadow">
                    <div class="card-header">
                        <h4 class="text-center">Daftar</h4>
                    </div>
                    <div class="card-body">
                        <form action="proses_daftar.php" method="post">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" name="nama">
                            </div>
                            <div class="mb-3">
                                <label for="date" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="date" name="tgl_lahir">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="mb-3">
                                <label for="password2" class="form-label">Konfirmasi Password</label>
                                <input type="password" class="form-control" id="password2" name="password2">
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary">daftar</button>
                            <div class="row mt-2">
                                <div class="col">
                                    <a style="text-decoration: none;" href="login">sudah punya akun?login</a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</div>
<?php include 'templates/footer.php'; ?>