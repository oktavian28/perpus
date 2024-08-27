<?php
include "koneksi.php"; // Sertakan file koneksi

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    echo "ID yang diterima: $id<br>";

    $query = mysqli_query($koneksi, "DELETE FROM siswa WHERE siswaid =$id");

    if ($query) {
        echo "<script>
            alert('Hapus data berhasil.');
            location.href= 'index.php?page=siswa';
        </script>";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
} else {
    echo "ID tidak ditemukan.";
}
?>
