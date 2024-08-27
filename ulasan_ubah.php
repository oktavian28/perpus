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
            <h1 class="mt-4">ULASAN BUKU</h1>
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Tambah Buku</h6>
                <a href="ulasan.php" class="btn btn-primary mb-4">Tambah Data</a>
                <div class="table-responsive">
                    <form method="post">
                        <?php
                        $id = $_GET['id'];
                        if (isset($_POST['submit'])) {
                            $UlasanID = $_POST['BukuID'];
                            $UserID  = $_SESSION['user']['UserID'];
                            $ulasan = $_POST['Ulasan'];
                            $rating = $_POST['Rating'];

                            $query = mysqli_query($koneksi, "UPDATE ulasanbuku set BukuID='$UlasanID',Ulasan='$ulasan',Rating='$rating' WHERE UlasanID=$id");
                            // $query = mysqli_query($koneksi, "INSERT INTO ulasanbuku(UserID, BukuID,Ulasan,Rating) values ('$UlasanID','$UserID','$ulasan','$rating'") ;

                            if ($query) {
                                echo '<script>alert("Ubah data berhasil.");</script>';
                            } else {
                                echo '<script>alert("Ubah data gagal.");</script>';
                            }

                        }
                        $query = mysqli_query($koneksi, "SELECT * FROM ulasanbuku WHERE UlasanID=$id");
                        $data = mysqli_fetch_array($query);
                        ?>
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label">Buku</label>
                            <div class="col-md-8">
                                <select name="BukuID" class="form-control">
                                    <?php
                                    $buk = mysqli_query($koneksi, "SELECT * FROM buku");
                                    while ($buku = mysqli_fetch_array($buk)) {
                                        ?>
                                        <option <?php if($data['BukuID'] == $buku ['BukuID']) echo 'selected'; ?> value="<?php echo $buku['BukuID']; ?>"><?php echo $buku['Judul']; ?>
                                        </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-2">Ulasan</div>
                            <div class="cold-md-8">
                                <textarea name="Ulasan" rows="5" class="form-control"><?php echo $data['Ulasan']; ?></textarea>
                            </div>
                        </div>
                        <div class=" row mb-3">
                            <div class="col-md-2">Rating</div>
                            <div class="cold-md-8">
                                <select name="Rating" class="form-control">
                                    <?php 
                                        for($i = 1; $i<=10; $i++){
                                            ?>
                                            <option <?php if($data['Rating'] == $i) echo 'selected'; ?>><?php echo $i; ?></option>
                                            <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-md-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-2" name="submit"
                                    value="submit">Simpan</button>
                                <a href="ulasan.php" class="btn btn-danger">Kembali</a>
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