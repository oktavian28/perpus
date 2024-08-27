<h2 align="center">Lapor Peminjam Buku</h2>
<table border="1" cellspacing="0" cellpadding="5" width="100%">
    <tr>
        <th scope="col">No</th>
        <th scope="col">User</th>
        <th scope="col">Buku</th>
        <th scope="col">Tanggal Peminjam</th>
        <th scope="col">Tanggal Pengembalian</th>
        <th scope="col">Status Peminjam</th>
    </tr>
    <?php
    include "koneksi.php    ";
    $i = 1;
    $query = mysqli_query($koneksi, "SELECT * FROM peminjaman LEFT JOIN user on user.UserID = peminjaman.UserID LEFT JOIN buku on buku.BukuID = peminjaman.BukuID");
    while ($data = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <th scope="row"><?php echo $i++; ?></th>
            <td><?php echo $data['UserID']; ?></td>
            <td><?php echo $data['BukuID']; ?></td>
            <td><?php echo $data['TanggalPeminjaman']; ?></td>
            <td><?php echo $data['TanggalPengembalian']; ?></td>
            <td><?php echo $data['StatusPeminjaman']; ?></td>
        </tr>
        <?php
    }
    ?>
</table>

<script>
    window.print();
    setTimeout(function() {
        window.close();
    }, 100);
</script>