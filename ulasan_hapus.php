<?php 
include "koneksi.php"; // Sertakan file koneksi

$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM ulasanbuku WHERE UlasanID=$id");

if ($query) {
    echo '<script>
            alert("Hapus berhasil.");
            location.href = "index.php?page=ulasan";
          </script>';
} else {
    echo '<script>
            alert("Hapus gagal.");
            location.href = "index.php?page=ulasan";
          </script>';
}
?>
