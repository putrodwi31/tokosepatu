<?php include '../templates/header.php'; ?>
<div class="container ">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="text-center mt-4">FROM TAMBAH KATEGORI</h3><br>
            <form action="tambahkategoriaksi.php" method="POST" enctype="multipart/form-data">
                <div class="row" style="margin-top:10px;">
                    <label for="nama" class="col-sm-2 col-from-label">Nama Kategori</label>
                    <div class="col-lg-4">
                        <input type="text" name="nama_kategori" class="form-control">
                    </div>
                </div>
                <div class="row" style="margin-top:10px;">
                    <label for="foto" class="col-sm-2 col-from-label">Foto</label>
                    <div class="col-lg-4">
                        <div class="col-lg-3">
                            <input type="file" name="img" class="form-control" id="foto" onchange="loadFile(event)">
                        </div>
                        <img id="output_image" class="img-thumbnail">
                    </div>
                </div>
                <div class="row" style=" margin-top:10px; margin-left:auto; margin-bottom:10px;">
                    <button type="submit" name="simpan" class="btn btn-success col-lg-1">Simpan</button>
                    <button type="reset" name="batal" class="btn btn-success col-lg-1" style="margin-left:10px;">Batal</button>
                    <a href="datasepatu" class="btn btn-primary col-lg-1" style="margin-left:10px;">Kembali</a>
                </div>
                <!-- <a href="datasepatu.php">Kembali</a> -->
            </form>
        </div>
    </div>
</div>
</div>
<?php include '../templates/footer.php'; ?>