<?php include '../templates/header.php'; ?>
<?php  ?>
<div class="container">
    <div class="alert alert-info text-center mt-4">
        <h4 style="margin-bottom: 2px"> <b>SepatuKu.id</b> </h4>
    </div>

    <div class="panel-heading">
        <h4>Kategori</h4>
    </div>

    <div class="panel-body">
        <a href="tambahkategori" class="btn btn-sm btn-info pull-right">Tambah Kategori</a>
        <br><br>
        <table border="1" class="table table-bordered table-striped">
            <tr>
                <th>No</th>
                <th>Kategori</th>
                <th>Gambar</th>
                <th>Aksi</th>

            </tr>
            <?php include '../koneksi.php';
            $query = mysqli_query($conn, "SELECT * FROM kategori");
            $no = 1;
            while ($row = mysqli_fetch_array($query)) { ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['nama_kategori']; ?></td>
                    <td><img width="200px" height="200px" src="<?= $config['base_url'] . "/assets/img/kategori/" . $row['img'];; ?>" class="img-thumbnail" alt="..."></td>
                    <td>
                        <a href="editkategori.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning"> EDIT</a>
                        <a href="kategori_hapus.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm ('apakah data ini yakin di hapus')">Hapus</a>
                    </td>
                </tr>

            <?php } ?>
        </table>
    </div>
</div>

<?php include '../templates/footer.php'; ?>