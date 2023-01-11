<?php
include '../koneksi.php';
$kodesepatu = $_POST['kode_sepatu'];
$namasepatu = $_POST['nama_sepatu'];
$merk = $_POST['merk'];
$ukuran = $_POST['ukuran'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$keterangan = $_POST['keterangan'];
$eksd = array('jpeg', 'png', 'jpg');
$foto = $_FILES['foto']['name'];
$xx = explode(".", $foto);
$eks = strtolower(end($xx));
$size = $_FILES['foto']['size'];
$file_tmp = $_FILES['foto']['tmp_name'];

if ($foto) {
    if (in_array($eks, $eksd) === true) {
        if ($size < 1044070) {
            move_uploaded_file($file_tmp, '../assets/img/produk/' . $foto);
            $kucing = mysqli_query($conn, "UPDATE sepatu SET nama_sepatu='$namasepatu', merk='$merk', ukuran='$ukuran', harga='$harga', stok='$stok', keterangan='$keterangan', foto='$foto' WHERE kode_sepatu='$kodesepatu'");
            if (!$kucing) {
                var_dump($kucing, mysqli_connect_error());
                die;
            }
        } else {
            var_dump($kucing, mysqli_connect_error());
            die;
        }
    } else {
        var_dump(in_array($eks, $eksd));
        die;
    }
} else {
    $kucing = mysqli_query($conn, "UPDATE sepatu SET nama_sepatu='$namasepatu', merk='$merk', ukuran='$ukuran', harga='$harga', stok='$stok', keterangan='$keterangan' WHERE kode_sepatu='$kodesepatu'");
}

header("location:index");
