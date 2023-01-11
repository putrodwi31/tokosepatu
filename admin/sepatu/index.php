<?php include $_SERVER['DOCUMENT_ROOT'] . "/tokosepatu" . "/templates/header.php"; ?>
<?php  ?>
<div class="container">
    <div class="alert alert-info text-center mt-4">
        <h4 style="margin-bottom: 2px"> <b>SepatuKu.id</b> </h4>
    </div>

    <div class="panel-heading">
        <h4>Data Sepatu</h4>
    </div>

    <div class="panel-body">
        <a href="tambahsepatu" class="btn btn-sm btn-info pull-right">Tambah Data</a>
        <br><br>
        <table border="1" class="table table-bordered table-striped">
            <tr>
                <th>No</th>
                <th>Kode Sepatu</th>
                <th>Nama Sepatu</th>
                <th>Merk</th>
                <th>Ukuran</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Keterangan</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
            <?php include $_SERVER['DOCUMENT_ROOT'] . "/tokosepatu" .  '/koneksi.php';
            $query = mysqli_query($conn, "SELECT * FROM sepatu");
            $no = 1;
            while ($row = mysqli_fetch_array($query)) { ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['kode_sepatu']; ?></td>
                    <td><?php echo $row['nama_sepatu']; ?></td>
                    <td><?php echo $row['merk']; ?></td>
                    <td><?php echo $row['ukuran']; ?></td>
                    <td><?php echo $row['harga']; ?></td>
                    <td><?php echo $row['stok']; ?></td>
                    <td><?php echo $row['keterangan']; ?></td>
                    <td><img width="200px" height="200px" src="<?= $config['base_url'] . "/assets/img/produk/" . $row['foto'];; ?>" class="img-thumbnail" alt="..."></td>
                    <td>
                        <a href="editsepatu.php?id=<?php echo $row['kode_sepatu']; ?>" class="btn btn-sm btn-warning"> EDIT</a>
                        <a href="sepatu_hapus.php?id=<?php echo $row['kode_sepatu']; ?>" class="btn btn-sm btn-danger" onclick="return confirm ('apakah data ini yakin di hapus')">Hapus</a>
                    </td>
                </tr>

            <?php } ?>
        </table>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/tokosepatu" .  '/templates/footer.php'; ?>