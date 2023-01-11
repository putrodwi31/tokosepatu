<?php include '../templates/header.php';
?>
<?php
if (isset($_SESSION['level'])) {
    if ($_SESSION['level'] != 'admin') {
        header("location:" . $config['base_url']);
    }
} else {
    header("location:" . $config['base_url'] . "login");
}
include "../koneksi.php";
$query = mysqli_query($conn, "SELECT * FROM sepatu");
$queryK = mysqli_query($conn, "SELECT * FROM kategori");
$queryA = mysqli_query($conn, "SELECT * FROM user where role_id=1");
$jumlahSepatu = mysqli_num_rows($query);
$jumlahKategori = mysqli_num_rows($queryK);
$jumlahAdmin = mysqli_num_rows($queryA);
?>
<div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg">
                    <div class="card">
                        <div class="card-body bg-info">
                            <h1 class="text-center text-white" style="font-size: 50px;"><?= $jumlahSepatu; ?></h1>
                        </div>
                        <div class="card-footer text-center font-weight-bold">Total Sepatu</div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card">
                        <div class="card-body bg-warning">
                            <h1 class="text-center text-white" style="font-size: 50px;"><?= $jumlahKategori; ?></h1>
                        </div>
                        <div class="card-footer text-center font-weight-bold">Total Kategori</div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card">
                        <div class="card-body bg-info">
                            <h1 class="text-center text-white" style="font-size: 50px;"><?= $jumlahAdmin; ?></h1>
                        </div>
                        <div class="card-footer text-center font-weight-bold">Total Admin</div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card">
                        <div class="card-body bg-info">
                            <h1 class="text-center text-white" style="font-size: 50px;">2</h1>
                        </div>
                        <div class="card-footer text-center font-weight-bold">Total View</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>