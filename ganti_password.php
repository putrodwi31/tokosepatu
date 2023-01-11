<?php include 'templates/header.php'; ?>
<?php
if (isset($_SESSION['flash_message'])) {
    $pesan = $_SESSION['flash_message'];
    unset($_SESSION['flash_message']);
    echo $pesan;
}
?>
<div class="container">
    <h2 class="text-center mt-5"><b>SepatuKu.id</b></h2>
    <div class="row mt-4">
        <div class="col-sm-12 my-auto">
            <div class="row">
                <div class="col-sm-8">
                    <img src="assets/img/login_page.png" class="img-fluid rounded-start shadow" alt="Login_page">
                </div>
                <div class="col-sm-4">
                    <div class="card rounded-start shadow">
                        <div class="card-header">
                            <h4 class="text-center">Lupa Password</h4>
                        </div>
                        <div class="card-body">
                            <form action="<?= $config['base_url']; ?>ganti_password_process.php" method="post">

                                <div class="mb-3">
                                    <label for="oldpassword" class="form-label">Password lama</label>
                                    <input type="password" class="form-control" id="oldpassword" name="oldpassword">
                                </div>
                                <div class="mb-3">
                                    <label for="passwoord" class="form-label">Password Baru</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Ulangi Password</label>
                                    <input type="password" class="form-control" id="password2" name="password2">
                                </div>
                                <button type="submit" class="btn btn-sm btn-primary" name="change">Ubah Password</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<?php include 'templates/footer.php'; ?>