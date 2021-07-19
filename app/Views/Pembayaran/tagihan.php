<?= $this->extend('Layout/template_pembayaran'); ?>
<?= $this->section('content'); ?>

<body>
    <div class="container"><br><br>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../img/1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/1.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div><br><br>
        </div>

        <div class="container">
            <div class="jumbotron">
                <h1 class="display-4" style="text-align: center;">Tagihan Anda</h1>
                <hr class="my-4">
                <p>Tagihan Anda pada bulan ini atas</p>
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Nama : </th>
                            <td>Dimas Aji Wiratama</td>
                        </tr>
                        <tr>
                            <th scope="row">Sekolah :</th>
                            <td>SMAN 95</td>
                        </tr>
                        <tr>
                            <th scope="row">NISN :</th>
                            <td colspan="2">1202173222</td>
                        </tr>
                        <tr>
                            <th scope="row">Tagihan :</th>
<<<<<<< HEAD
                            <td colspan="2">Rp 500.000</td>
                        </tr>
                        <tr>
                            <th scope="row">Status :</th>
                            <td class="text-danger">Belum Dibayar</td>
=======
                            <td colspan="2">Rp 100.000 </td>
>>>>>>> 2bad2b2a5b1d74d119ed986645797b9e808d5f0f
                        </tr>
                    </tbody>
                </table>
                <div class="text-center">
                    <a href="" type="submit" class="btn btn-success">Bayar</a>
                    <a class="btn btn-primary" href="<?php echo base_url("pembayaran/detail"); ?>" type="button">Lihat Detail</a>
                </div>
            </div>
        </div>

        <br><br>
</body>

<?= $this->endSection(); ?>