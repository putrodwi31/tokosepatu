<?php include '../koneksi.php';
$kodesepatu = $_POST['kode_sepatu'];
$namasepatu = $_POST['nama_sepatu'];
$kategori = $_POST['kategori'];
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

if (in_array($eks, $eksd) === true) {
    if ($size < 1044070) {
        move_uploaded_file($file_tmp, '../assets/img/produk/' . $foto);
        mysqli_query($conn, "INSERT INTO sepatu VALUES('$kodesepatu','$namasepatu', '$kategori', '$merk','$ukuran','$harga','$stok','$keterangan','$foto')");
    }
}


header("location:datasepatu");
