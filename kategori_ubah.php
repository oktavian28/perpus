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
        <h1 class="mt-4">BUKU</h1>
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Ubah Buku Anda</h6>
            <a href="?page=kate" class="btn btn-primary mb-4">Tambah Data</a>
            <div class="table-responsive">
                <form method="post">
                    <?php
                    $id = $_GET['id'];
                    if (isset($_POST['submit'])) {
                        $kategori = $_POST['NamaKategori'];
                        $query = mysqli_query($koneksi, "UPDATE kategoribuku SET NamaKategori='$kategori' WHERE KategoriID=$id");

                        if ($query) {
                            echo '<script>alert("Ubah data berhasil.");</script>';
                        } else {
                            echo '<script>alert("Ubah data gagal.");</script>';
                        }
                    }
                    $query = mysqli_query($koneksi, "SELECT * FROM kategoribuku WHERE KategoriID=$id");
                    $data = mysqli_fetch_array($query);
                    ?>
                    <div class="mb-3 row">
                        <label class="col-md-4 col-form-label">Nama Kategori</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" value="<?php echo $data['NamaKategori']; ?>"
                                name="NamaKategori" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-2" name="submit"
                                value="submit">Simpan</button>
                            <a href="kategori.php" class="btn btn-danger">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
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