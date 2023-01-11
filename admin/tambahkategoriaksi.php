<?php include '../koneksi.php';

$nama_kategori = $_POST['nama_kategori'];
$eksd = array('jpeg', 'png', 'jpg');
$foto = $_FILES['img']['name'];
$xx = explode(".", $foto);
$eks = strtolower(end($xx));
$size = $_FILES['img']['size'];
$file_tmp = $_FILES['img']['tmp_name'];

if (in_array($eks, $eksd) === true) {
    if ($size < 1044070) {
        move_uploaded_file($file_tmp, '../assets/img/kategori/' . $foto);
        mysqli_query($conn, "INSERT INTO kategori VALUES('','$nama_kategori','$foto')");
    }
}
header("location:kategori");
