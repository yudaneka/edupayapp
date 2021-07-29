<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Detail Sekolah</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/<?= $sekolah['gedung']; ?>" class="card-img-top" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $sekolah['name']; ?></h5>
                            <p class="card-text"><b>Tagihan : </b><?= $sekolah['invoice']; ?></p>
                            <p class="card-text"><b>Alamat : </b><?= $sekolah['alamat']; ?></p>
                            <p class="card-text"><small class="text-muted"><b>Telepon : </b>
                                    <?= $sekolah['phone']; ?></small></p>
                            <a href="/sekolah" class="btn btn-primary">Kembali</a>
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>