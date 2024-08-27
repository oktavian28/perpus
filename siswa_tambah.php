<?php
include "koneksi.php"; // Sertakan file koneksi
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Perpus</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>


    <div class="bg-secondary rounded h-100 p-4">
        <table class="table">
            <h1 class="mt-4">Tambah</h1>
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Tambah Siswa</h6>
                <div class="table-responsive">
                    <form method="post">
                        <?php
                        if (isset($_POST['submit'])) {
                            $nis = $_POST['nis'];
                            $nama = $_POST['nama'];
                            $alamat = $_POST['alamat'];
                            $noabsen = $_POST['noabsen'];
                            $foto = $_POST['foto'];
                            $tanggal_lahir = $_POST['tanggal_lahir'];
                            $query = mysqli_query($koneksi, "INSERT INTO siswa (nis,nama,alamat,noabsen,foto,tanggal_lahir) values ('$nis','$nama','$alamat','$noabsen','$foto','$tanggal_lahir')");

                            if ($query) {
                                echo '<script>alert("Tambah data berhasil.");</script>';
                            } else {
                                echo '<script>alert("Tambah data gagal.");</script>';
                            }
                                
                        }
                        ?>
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label">Nis</label>
                            <div class="col-md-8">
                                <input type="number" class="form-control" name="nis" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label">Nama Siswa</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="nama" required>
                            </div>
                        </div>                                                                                          
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label">Alamat</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="alamat" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label">No Absen</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="noabsen" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label">Foto</label>
                            <div class="col-md-8">
                                <input type="file" class="form-control" name="foto" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label">Tanggal Lahir</label>
                            <div class="col-md-8">
                                <input type="date" class="form-control" name="tanggal_lahir" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-md-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-2" name="submit"
                                    value="submit">Simpan</button>
                                <a href="siswa.php" class="btn btn-danger">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </table>
    </div>


    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>