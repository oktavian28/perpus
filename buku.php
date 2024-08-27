<?php
include "koneksi.php";
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


    <div class="col text-center">
        <h1 class="mt-4">Buku</h1>
    </div>
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Tambah Buku</h6>
        <a href="buku_tambah.php" class="btn btn-success rounded-pill m-2">Tambah Data</a>
        <div class="table-responsive">
            <br>
            <table class="table">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Tahun Terbit</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Aksi</th>
                </tr>
                <?php
                $i = 1;
                $query = mysqli_query($koneksi, "SELECT * FROM buku LEFT JOIN kategoribuku on buku.KategoriID = kategoribuku.KategoriID");
                if (!$query) {
                    echo "<tr><td colspan='7'>Query Error: " . mysqli_error($koneksi) . "</td></tr>";
                } else {
                    while ($data = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <th scope="row"><?php echo $i++; ?></th>
                            <td><?php echo $data['Judul']; ?></td>
                            <td><?php echo $data['Penulis']; ?></td>
                            <td><?php echo $data['Penerbit']; ?></td>
                            <td><?php echo $data['TahunTerbit']; ?></td>
                            <td><?php echo $data['deskripsi']; ?></td>
                            <td><img src="uploads/<?php echo $data['foto']; ?>" alt="Foto Buku" style="width: 100px; height: 100px;"></td>

                            <td>
                                <a href="buku_ubah.php?id=<?php echo $data['BukuID']; ?>" class="btn btn-outline-info m-2">Ubah</a>
                                <a href="buku_hapus.php?id=<?php echo $data['BukuID']; ?>" class="btn btn-outline-danger m-2"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</a>
                            </td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </table>
            <br>
            <div class="row g-4">
                <div class="col-12 text-center">
                    <a href="index.php" class="fa fa-home">Kembali ke Dashboard</a>
                </div>
            </div>
            <br>
        </div>
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