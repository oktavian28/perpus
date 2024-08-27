<!-- Sale & Revenue Start -->
<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-table fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Buku Kategori</p>
                                <?php 
                                    echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM kategoribuku"));
                                ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-book fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Buku</p>
                                <?php 
                                    echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM buku"));
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Ulasan</p>
                                <?php 
                                    echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM ulasanbuku"));
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-user fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total User</p>
                                <?php 
                                    echo mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM user"));
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->
            <div class="container-fluid pt-4 px-4">
    <div class="row g-4 justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <td width="200">Nama</td>
                            <td width="1">:</td>
                            <td><?php echo $_SESSION['user']['nama_lengkap']; ?></td>
                        </tr>
                        <tr>
                            <td width="200">User</td>
                            <td width="1">:</td>
                            <td><?php echo $_SESSION['user']['level']; ?></td>
                        </tr>
                        <tr>
                            <td width="200">Tanggal Login</td>
                            <td width="1">:</td>
                            <td><?php echo date('d-m-Y'); ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

            


           

            