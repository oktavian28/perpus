<?php 
include "koneksi.php"; // Sertakan file koneksi

$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM peminjaman WHERE PeminjamanID=$id");

if ($query) {
    echo '<script>
            alert("Hapus berhasil.");
            location.href = "index.php?page=peminjaman";
          </script>';
} else {
    echo '<script>
            alert("Hapus gagal.");
            location.href = "index.php?page=peminjaman";
          </script>';
}
?>
