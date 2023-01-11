<?php
include '../koneksi.php';
$id = $_POST['id'];
$nama_kategori = $_POST['nama_kategori'];
$eksd = array('jpeg', 'png', 'jpg', 'PNG');
$foto = $_FILES['img']['name'];
$xx = explode(".", $foto);
$eks = strtolower(end($xx));
$size = $_FILES['img']['size'];
$file_tmp = $_FILES['img']['tmp_name'];
if ($foto) {
    if (in_array($eks, $eksd) === true) {
        if ($size < 1044070) {
            move_uploaded_file($file_tmp, '../assets/img/kategori/' . $foto);
            $kucing = mysqli_query($conn, "UPDATE kategori SET nama_kategori='$nama_kategori', img='$foto' WHERE id='$id'");
            if (!$kucing) {
                var_dump($kucing, mysqli_connect_error());
                die;
            }
        } else {
            var_dump('Terlalu besar');
            die;
        }
    } else {
        var_dump('format tidak sesuai');
        die;
    }
} else {
    $kucing = mysqli_query($conn, "UPDATE kategori SET nama_kategori='$nama_kategori' WHERE id='$id'");
}

header("location:kategori");
