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
            <h1 class="mt-4">Buku</h1>
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Ubah Buku</h6>
                <div class="table-responsive">
                    <form method="post">
                        <?php
                        $id = isset($_GET['id']) ? $_GET['id'] : '';
                        if (!$id) {
                            die("ID tidak ditemukan.");
                        }

                        if (isset($_POST['submit'])) {
                            $KategoriID = $_POST['KategoriID'];
                            $Judul = $_POST['Judul'];
                            $Penulis = $_POST['Penulis'];
                            $Penerbit = $_POST['Penerbit'];
                            $Tahunterbit = $_POST['TahunTerbit'];

                            $query = mysqli_query($koneksi, "UPDATE buku SET KategoriID='$KategoriID', Judul='$Judul', Penulis='$Penulis', Penerbit='$Penerbit', TahunTerbit='$Tahunterbit' WHERE BukuID=$id");

                            if ($query) {
                                echo '<script>alert("Ubah data berhasil.");</script>';
                            } else {
                                echo '<script>alert("Ubah data gagal.");</script>';
                            }
                        }

                        $query = mysqli_query($koneksi, "SELECT * FROM buku WHERE BukuID=$id");
                        $data = mysqli_fetch_array($query);
                        ?>
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label">Kategori</label>
                            <div class="col-md-8">
                                <select name="KategoriID" class="form-control">
                                    <?php
                                    $kat = mysqli_query($koneksi, "SELECT * FROM kategoribuku");
                                    while ($kategori = mysqli_fetch_array($kat)) {
                                        ?>
                                        <option <?php if ($kategori['KategoriID'] == $data['KategoriID'])
                                            echo 'selected'; ?> value="<?php echo $kategori['KategoriID']; ?>">
                                            <?php echo $kategori['KategoriID']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label">Judul</label>
                            <div class="col-md-8">
                                <input type="text" value="<?php echo $data['Judul']; ?>" class="form-control"
                                    name="Judul" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label">Penulis</label>
                            <div class="col-md-8">
                                <input type="text" value="<?php echo $data['Penulis']; ?>" class="form-control"
                                    name="Penulis" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label">Penerbit</label>
                            <div class="col-md-8">
                                <input type="text" value="<?php echo $data['Penerbit']; ?>" class="form-control"
                                    name="Penerbit" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label">Tahun Terbit</label>
                            <div class="col-md-8">
                                <input type="number" value="<?php echo $data['TahunTerbit']; ?>" class="form-control"
                                    name="TahunTerbit" required>
                            </div>
                        </div>
                        
                        <div class="mb-3 row">
                            <div class="col-md-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-outline-info m-2" name="submit"
                                    value="submit">Simpan</button>
                                <a href="buku.php" class="btn btn-outline-warning m-2">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </table>
        <div class="container-fluid pt-4 px-4">
    
</div>


    </div>

    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

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