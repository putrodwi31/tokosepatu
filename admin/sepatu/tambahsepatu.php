<?php include $_SERVER['DOCUMENT_ROOT'] . "/tokosepatu" . "/templates/header.php";
include $_SERVER['DOCUMENT_ROOT'] . "/tokosepatu" . '/koneksi.php';
$queryK = mysqli_query($conn, "SELECT * FROM kategori");
?>
<div class="container ">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="text-center mt-4">FROM TAMBAH DATA SEPATU</h3><br>
            <form action="tambahsepatuaksi.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <label for="kodesepatu" class="col-sm-2 col-from-label">Kode Sepatu</label>
                    <div class="col-lg-4">
                        <input type="text" name="kode_sepatu" class="form-control">
                    </div>
                </div>
                <div class="row" style="margin-top:10px;">
                    <label for="namasepatu" class="col-sm-2 col-from-label">Nama Sepatu</label>
                    <div class="col-lg-4">
                        <input type="text" name="nama_sepatu" class="form-control">
                    </div>
                </div>
                <div class="row" style="margin-top:10px;">
                    <label for="namasepatu" class="col-sm-2 col-from-label">Kategori</label>
                    <div class="col-lg-4">
                        <select class="form-select" name="kategori" id="kategori" aria-label="Pilih Kategori">
                            <option value="">Pilih Kategori</option>
                            <?php
                            while ($d = mysqli_fetch_array($queryK)) { ?>
                                <option value="<?= $d['id']; ?>"><?= $d['nama_kategori']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="row" style="margin-top:10px;">
                    <label for="merk" class="col-sm-2 col-from-label">Merk Sepatu</label>
                    <div class="col-lg-4">
                        <input type="text" name="merk" class="form-control">
                    </div>
                </div>
                <div class="row" style="margin-top:10px;">
                    <label for="ukuran" class="col-sm-2 col-from-label">Ukuran</label>
                    <div class="col-lg-4">
                        <input type="text" name="ukuran" class="form-control">
                    </div>
                </div>
                <div class="row" style="margin-top:10px;">
                    <label for="harga" class="col-sm-2 col-from-label">Harga</label>
                    <div class="col-lg-4">
                        <input type="text" name="harga" class="form-control">
                    </div>
                </div>
                <div class="row" style="margin-top:10px;">
                    <label for="stok" class="col-sm-2 col-from-label">Stok</label>
                    <div class="col-lg-4">
                        <input type="text" name="stok" class="form-control">
                    </div>
                </div>
                <div class="row" style="margin-top:10px;">
                    <label for="Ket" class="col-sm-2 col-from-label">Keterangan</label>
                    <div class="col-lg-4">
                        <input type="text" name="keterangan" class="form-control">
                    </div>
                </div>
                <div class="row" style="margin-top:10px;">
                    <label for="foto" class="col-sm-2 col-from-label">Foto</label>
                    <div class="col-lg-4">
                        <div class="col-lg-3">
                            <input type="file" name="foto" class="form-control" id="foto" onchange="loadFile(event)">
                        </div>
                        <img id="output_image" class="img-thumbnail">
                    </div>
                </div>
                <div class="row" style=" margin-top:10px; margin-left:auto; margin-bottom:10px;">
                    <button type="submit" name="simpan" class="btn btn-success col-lg-1">Simpan</button>
                    <button type="reset" name="batal" class="btn btn-success col-lg-1" style="margin-left:10px;">Batal</button>
                    <a href="index" class="btn btn-primary col-lg-1" style="margin-left:10px;">Kembali</a>
                </div>
                <!-- <a href="datasepatu.php">Kembali</a> -->
            </form>
        </div>
    </div>
</div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/tokosepatu" .  '/templates/footer.php'; ?>