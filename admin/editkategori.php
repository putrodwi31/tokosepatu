<?php include '../templates/header.php'; ?>
<div class="container ">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="text-center mt-4">FORM EDIT KATEGORI</h3><br>
            <?php include '../koneksi.php';

            $id = $_GET['id'];
            $data = mysqli_query($conn, "SELECT * FROM kategori where id='$id'");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <form action="kategori_update.php" method="POST" enctype="multipart/form-data">
                    <div class="row" style="margin-top:10px;">
                        <label for="namasepatu" class="col-sm-2 col-from-label">Nama Sepatu</label>
                        <div class="col-lg-4">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <input type="text" name="nama_kategori" class="form-control" value="<?php echo $d['nama_kategori']; ?>">
                        </div>
                    </div>
                    <div class="row" style="margin-top:10px;">
                        <label for="foto" class="col-sm-2 col-from-label">Foto</label>
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-lg-3">
                                    <img width="200px" height="200px" src="<?= $config['base_url'] . "/assets/img/kategori/" . $d['img']; ?>" class="img-thumbnail" alt="...">
                                </div>
                                <div class="col-lg-3">
                                    <input type="file" name="img" class="form-control" id="foto" onchange="loadFile(event)">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style=" margin-top:10px; margin-left:auto; margin-bottom:10px;">
                        <button type="submit" class="btn btn-success col-lg-1">Update</button>
                        <a href="kategori" class="btn btn-primary col-lg-1" style="margin-left:10px;">Kembali</a>
                    </div>
                    <!-- <a href="datasepatu.php">Kembali</a> -->
                </form>
            <?php } ?>
        </div>
    </div>
</div>
</div>
<?php include '../templates/footer.php'; ?>