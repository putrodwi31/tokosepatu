<?php include 'templates/header.php';
include 'koneksi.php';
$query = mysqli_query($conn, "SELECT * FROM sepatu");
$queryK = mysqli_query($conn, "SELECT * FROM kategori");
?>

<!--Carousel-->
<div class="container">
    <div id="carouselExampleIndicators" class="carousel slide mt-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= $config['base_url']; ?>assets/img/img1.jpg" class="d-block w-100 img-fluid" alt="Gambar 1">
            </div>
            <div class="carousel-item">
                <img src="<?= $config['base_url']; ?>assets/img/img2.jpg" class="d-block w-100 img-fluid" alt="Gambar 2">
            </div>
            <div class="carousel-item">
                <img src="<?= $config['base_url']; ?>assets/img/img3.jpg" class="d-block w-100 img-fluid" alt="Gambar 3">
            </div>
            <div class="carousel-item">
                <img src="<?= $config['base_url']; ?>assets/img/img4.jpg" class="d-block w-100 img-fluid" alt="Gambar 4">
            </div>
            <div class="carousel-item">
                <img src="<?= $config['base_url']; ?>assets/img/img5.jpg" class="d-block w-100 img-fluid" alt="Gambar 5">
            </div>
            <div class="carousel-item">
                <img src="<?= $config['base_url']; ?>assets/img/img6.jpg" class="d-block w-100 img-fluid" alt="Gambar 6">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!--Akhir Carousel-->

<!--Kategori-->
<div class="container mt-5">
    <div class="judul-kategori" style="background-color:#fff; padding: 5px 10px;">
        <h5 class="text-center" style="margin-top:5px;">KATEGORI</h5>
    </div>
    <div class="row text-center row-container mt-2">
        <?php
        while ($d = mysqli_fetch_array($queryK)) {
        ?>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="menu-kategori">
                    <a href="#"> <img src="<?= $config['base_url']; ?>assets/img/kategori/<?= $d['img']; ?>" class="img-kategori mt-3"></a>
                    <p class="mt-2"><?= $d['nama_kategori']; ?></p>
                </div>
            </div>
        <?php } ?>
        <!-- <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="menu-kategori">
                <a href="#"> <img src="<?= $config['base_url']; ?>assets/img/kategori/sepatu1.jpg" class="img-kategori mt-3"></a>
                <p class="mt-2">Authentic Sneakers</p>
            </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="menu-kategori">
                <a href="#"> <img src="<?= $config['base_url']; ?>assets/img/kategori/sepatu2.png" class="img-kategori mt-3"></a>
                <p class="mt-2">Slip-on Sneakers</p>
            </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="menu-kategori">
                <a href="#"> <img src="<?= $config['base_url']; ?>assets/img/kategori/sepatu3.jpg" class="img-kategori mt-3"></a>
                <p class="mt-2">Canvas Sneakers</p>
            </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="menu-kategori">
                <a href="#"> <img src="<?= $config['base_url']; ?>assets/img/kategori/sepatu4.jpg" class="img-kategori mt-3"></a>
                <p class="mt-2">Dad Sneakers</p>
            </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="menu-kategori">
                <a href="#"> <img src="<?= $config['base_url']; ?>assets/img/kategori/sepatu5.jpg" class="img-kategori mt-3"></a>
                <p class="mt-2">Plimsoll Sneakers</p>
            </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="menu-kategori">
                <a href="#"> <img src="<?= $config['base_url']; ?>assets/img/kategori/sepatu6.jpg" class="img-kategori mt-3"></a>
                <p class="mt-2">Leather Sneakers</p>
            </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="menu-kategori">
                <a href="#"> <img src="<?= $config['base_url']; ?>assets/img/kategori/sepatu7.jpg" class="img-kategori mt-3"></a>
                <p class="mt-2">Textile Blend Sneakers</p>
            </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="menu-kategori">
                <a href="#"> <img src="<?= $config['base_url']; ?>assets/img/kategori/sepatu8.jpg" class="img-kategori mt-3"></a>
                <p class="mt-2">Athletic Kicks</p>
            </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="menu-kategori">
                <a href="#"> <img src="<?= $config['base_url']; ?>assets/img/kategori/sepatu9.jpg" class="img-kategori mt-3"></a>
                <p class="mt-2">Velcro Sneakers</p>
            </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="menu-kategori">
                <a href="#"> <img src="<?= $config['base_url']; ?>assets/img/kategori/sepatu10.jpg" class="img-kategori mt-3"></a>
                <p class="mt-2">Retro Running Shoes</p>
            </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="menu-kategori">
                <a href="#"> <img src="<?= $config['base_url']; ?>assets/img/kategori/sepatu11.jpg" class="img-kategori mt-3"></a>
                <p class="mt-2">Knit Sneakers</p>
            </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="menu-kategori">
                <a href="#"> <img src="<?= $config['base_url']; ?>assets/img/kategori/sepatu12.jpg" class="img-kategori mt-3"></a>
                <p class="mt-2">High-top Sneakers</p>
            </div>
        </div> -->
    </div>
</div>
<!--Akhir Kategori-->

<!--Produk-->
<div class="container mt-5">
    <div class="judul-Produk" style="background-color:#fff; padding: 5px 10px;">
        <h5 class="text-center" style="margin-top:5px;">PRODUK</h5>
    </div>
    <div class="row">

        <?php while ($row = mysqli_fetch_array($query)) {
        ?>
            <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
                <div class="card text-center">
                    <img src="<?= $config['base_url']; ?>assets/img/produk/<?= $row['foto']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h6 class="card-title"><?= $row['nama_sepatu']; ?></h6>
                        <div class="icon-bintang" style="color: orange;">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <p class="card-text mt-2">Rp . <?= number_format($row['harga'], 2, ',', '.'); ?></p>
                        <a href="#" class="btn btn-dark d-grid">Beli</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<!--Akhir Produk-->

<?php include './templates/footer.php'; ?>