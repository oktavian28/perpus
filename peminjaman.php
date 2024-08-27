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
        <h1 class="mt-4">LAPORAN PEMINJAM BUKU</h1>
    </div>
    <div class="bg-secondary rounded h-100 p-4">
        <a href="peminjaman_tambah.php" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Peminjaman</a>
        <div class="table-responsive">
            <br>
            <table class="table">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">User</th>
                    <th scope="col">Tanggal Peminjam</th>
                    <th scope="col">Tanggal Pengembalian</th>
                    <th scope="col">Status Peminjam</th>
                    
                    <th scope="col">Aksi</th>
                </tr>
                <?php
                $i = 1;
                $query = mysqli_query($koneksi, "SELECT * FROM peminjaman LEFT JOIN user on user.UserID = peminjaman.UserID LEFT JOIN buku on buku.BukuID = peminjaman.BukuID WHERE peminjaman.UserID=" . $_SESSION['user']['UserID']);
                while ($data = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $i++; ?></th>
                        <td><?php echo $data['UserID']; ?></td>
                        <td><?php echo $data['TanggalPeminjaman']; ?></td>
                        <td><?php echo $data['TanggalPengembalian']; ?></td>
                        <td><?php echo $data['StatusPeminjaman']; ?></td>
                        <td>
                        <?php
                        if ($_SESSION['user']['level'] != 'petugas') {
                        ?>
                            <?php
                            if ($data['StatusPeminjaman'] != 'dikembalikan') {
                                ?>
                                <?php
                                } ?>
                                <a href="peminjaman_ubah.php?id=<?php echo $data['PeminjamanID']; ?>"
                                    class="btn btn-info">Ubah</a>
                                <a href="peminjaman_hapus.php?id=<?php echo $data['PeminjamanID']; ?>" class="btn btn-danger"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</a>
                                <?php
                            }
                            ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12 text-end">
                        <a href="index.php" class="btn btn-primary">Kembali ke Dashboard</a>
                    </div>
                </div>
            </div>
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