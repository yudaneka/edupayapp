<?= $this->extend('Layout/template'); ?>
<?= $this->section('content'); ?>
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
    <div class="row">
        <div class="col-sm-4">
            <div class="card text-center">
                <div class="card-body">
                    <img src="../img/kartika.jpg" class="card-img-top" alt="...">
                    <h5 class="card-title">SMA KARTIKA SILIWANGI 2 BANDUNG</h5>
                    <p class="card-text">JL. PAK GATOT RAYA NO. 73, Gegerkalong, Kec. Sukasari, Kota Bandung Prov. Jawa Barat </p>
                    <a href="#" class="btn btn-primary">Lihat</a>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="card text-center">
                <div class="card-body">
                    <img src="../img/kartika.jpg" class="card-img-top" alt="...">
                    <h5 class="card-title">SMA KARTIKA SILIWANGI 2 BANDUNG</h5>
                    <p class="card-text">JL. PAK GATOT RAYA NO. 73, Gegerkalong, Kec. Sukasari, Kota Bandung Prov. Jawa Barat </p>
                    <a href="#" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="card text-center">
                <div class="card-body">
                    <img src="../img/kartika.jpg" class="card-img-top" alt="...">
                    <h5 class="card-title">SMA KARTIKA SILIWANGI 2 BANDUNG</h5>
                    <p class="card-text">JL. PAK GATOT RAYA NO. 73, Gegerkalong, Kec. Sukasari, Kota Bandung Prov. Jawa Barat </p>
                    <a href="#" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card">
                    <img src="../img/kartika.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">SMA KARTIKA SILIWANGI 2 BANDUNG</h5>
                        <p class="card-text">JL. PAK GATOT RAYA NO. 73, Gegerkalong, Kec. Sukasari, Kota Bandung Prov. Jawa Barat </p>
                        <a class="btn btn-primary card text-center" href="#" role="button">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="../img/kartika.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="../img/kartika.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br>
    <?= $this->endSection(); ?>