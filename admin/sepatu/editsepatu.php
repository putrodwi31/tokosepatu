<?php include $_SERVER['DOCUMENT_ROOT'] . "/tokosepatu" . "/templates/header.php";
include $_SERVER['DOCUMENT_ROOT'] . "/tokosepatu" .  '/koneksi.php';
$queryK = mysqli_query($conn, "SELECT * FROM kategori");
?>
<div class="container ">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="text-center mt-4">FORM EDIT DATA SEPATU</h3><br>
            <?php include $_SERVER['DOCUMENT_ROOT'] . "/tokosepatu" .  '/koneksi.php';

            $id = $_GET['id'];
            $data = mysqli_query($conn, "SELECT * FROM sepatu INNER JOIN kategori ON sepatu.id_kategori = kategori.id where kode_Sepatu='$id'");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <form action="sepatu_update.php" method="POST" enctype="multipart/form-data">

                    <div class="row" style="margin-top:10px;">
                        <label for="namasepatu" class="col-sm-2 col-from-label">Nama Sepatu</label>
                        <div class="col-lg-4">
                            <input type="hidden" name="kode_sepatu" value="<?php echo $id; ?>">
                            <input type="text" name="nama_sepatu" class="form-control" value="<?php echo $d['nama_sepatu']; ?>">
                        </div>
                    </div>
                    <div class="row" style="margin-top:10px;">
                        <label for="namasepatu" class="col-sm-2 col-from-label">Kategori</label>
                        <div class="col-lg-4">
                            <select class="form-select" name="kategori" id="kategori" aria-label="Pilih Kategori">
                                <option selected value="<?php echo $d['id_kategori']; ?>"><?php echo $d['nama_kategori']; ?></option>
                                <?php
                                while ($dr = mysqli_fetch_array($queryK)) { ?>
                                    <option value="<?= $dr['id']; ?>"><?= $dr['nama_kategori']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row" style="margin-top:10px;">
                        <label for="merk" class="col-sm-2 col-from-label">Merk Sepatu</label>
                        <div class="col-lg-4">
                            <input type="text" name="merk" class="form-control" value="<?php echo $d['merk']; ?>">
                        </div>
                    </div>
                    <div class="row" style="margin-top:10px;">
                        <label for="ukuran" class="col-sm-2 col-from-label">Ukuran</label>
                        <div class="col-lg-4">
                            <input type="text" name="ukuran" class="form-control" value="<?php echo $d['ukuran']; ?>">
                        </div>
                    </div>
                    <div class="row" style="margin-top:10px;">
                        <label for="harga" class="col-sm-2 col-from-label">Harga</label>
                        <div class="col-lg-4">
                            <input type="text" name="harga" class="form-control" value="<?php echo $d['harga']; ?>">
                        </div>
                    </div>
                    <div class="row" style="margin-top:10px;">
                        <label for="stok" class="col-sm-2 col-from-label">Stok</label>
                        <div class="col-lg-4">
                            <input type="text" name="stok" class="form-control" value="<?php echo $d['stok']; ?>">
                        </div>
                    </div>
                    <div class="row" style="margin-top:10px;">
                        <label for="Ket" class="col-sm-2 col-from-label">Keterangan</label>
                        <div class="col-lg-4">
                            <input type="text" name="keterangan" class="form-control" value="<?php echo $d['keterangan']; ?>">
                        </div>
                    </div>
                    <div class="row" style="margin-top:10px;">
                        <label for="foto" class="col-sm-2 col-from-label">Foto</label>
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-lg-3">
                                    <img width="200px" height="200px" src="<?= $config['base_url'] . "/assets/img/produk/" . $d['foto']; ?>" class="img-thumbnail" alt="...">
                                </div>
                                <div class="col-lg-3">
                                    <input type="file" name="foto" class="form-control" id="foto" onchange="loadFile(event)">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style=" margin-top:10px; margin-left:auto; margin-bottom:10px;">
                        <button type="submit" class="btn btn-success col-lg-1">Update</button>
                        <a href="index" class="btn btn-primary col-lg-1" style="margin-left:10px;">Kembali</a>
                    </div>
                </form>
            <?php } ?>
        </div>
    </div>
</div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/tokosepatu" .  '/templates/footer.php'; ?>