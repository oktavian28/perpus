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
            <h1 class="mt-4">BUKU TAMBAH</h1>
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Tambah Buku</h6>
                <div class="table-responsive">
                    <form method="post">
                        <?php
                        if (isset($_POST['submit'])) {
                            $KategoriID = $_POST['KategoriID'];
                            $judul = $_POST['Judul'];
                            $penulis = $_POST['Penulis'];
                            $penerbit = $_POST['Penerbit'];
                            $tahunterbit = $_POST['TahunTerbit'];
                            $Deskripsi = $_POST['deskripsi'];
                            $query = mysqli_query($koneksi, "INSERT INTO buku(KategoriID,Judul,Penulis,Penerbit,TahunTerbit,deskripsi) values ('$KategoriID','$judul','$penulis','$penerbit','$tahunterbit','$Deskripsi')");

                            
                            if ($query) {
                                echo '<script>alert("Tambah data berhasil.");</script>';
                            } else {
                                echo '<script>alert("Tambah data gagal.");</script>';
                            }

                        }
                        ?>
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label">Kategori</label>
                            <div class="col-md-8">
                                <select name="KategoriID" class="form-control">
                                    <?php
                                    $kat = mysqli_query($koneksi, "SELECT * FROM kategoribuku");
                                    while ($kategori = mysqli_fetch_array($kat)) {
                                        ?>
                                        <option value="<?php echo $kategori['KategoriID']; ?>">
                                            <?php echo $kategori['NamaKategori']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label">Judul</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="Judul" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label">Penulis</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="Penulis" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label">Penerbit</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="Penerbit" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label">TahunTerbit</label>
                            <div class="col-md-8">
                                <input type="number" class="form-control" name="TahunTerbit" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label">Deskripsi</label>
                            <div class="col-md-8">
                                <textarea name="deskripsi" rows="5" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="foto">Unggah Foto:</label>
                            <input type="file" name="foto" required><br><br>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-md-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-2" name="submit"
                                    value="submit">Simpan</button>
                                <a href="buku.php" class="btn btn-danger">Kembali</a>
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