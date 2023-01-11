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
<div class="container">
    <h2 class="text-center mt-5"><b>SepatuKu.id</b></h2>
    <div class="row mt-4">
        <div class="col-sm-12 my-auto">
            <div class="row">
                <div class="col-sm-8">
                    <img src="<?= $config['base_url']; ?>assets/img/login_page.png" class="img-fluid rounded-start shadow" alt="Login_page">
                </div>
                <div class="col-sm-4">
                    <div class="card rounded-start shadow">
                        <div class="card-header">
                            <h4 class="text-center">Masuk</h4>
                        </div>
                        <div class="card-body">
                            <form action="cek_login.php" method="post">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>

                                <button type="submit" class="btn btn-sm btn-primary">Masuk</button>
                                <a href="daftar" class="btn btn-sm btn-primary">daftar</a>
                                <div class="row mt-2">
                                    <div class="col">
                                        <a style="text-decoration: none;" href="lupa_password">lupa password?klik disini</a>
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