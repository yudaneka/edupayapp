<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Tambah Data Sekolah</h2>
            <form action="/sekolah/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('name')) ? 'is-invalid' : ''; ?>" id="name" name="name" autofocus value="<?= old('name'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('name'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= old('alamat'); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="invoice" class="col-sm-2 col-form-label">Tagihan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="invoice" name="invoice" value="<?= old('invoice'); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phone" class="col-sm-2 col-form-label">Telepon</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="phone" name="phone" value="<?= old('phone'); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gedung" class="col-sm-2 col-form-label">Gedung</label>
                    <div class="col-sm-2">
                    <img src="/img/default.jpg" class="img-thumbnail img-preview"></div>
                    <div class="col-sm-8">
                        <div class="custom-file">
                        <input type="file" class="custom-file-input <?= ($validation->hasError('gedung')) 
                        ? 'is-invalid' : ''; ?>" id="gedung" name="gedung" onchange="previewImg()">
                        <div class="invalid-feedback">
                            <?= $validation->getError('gedung'); ?>
                        </div>
                        <label class="custom-file-label" for="gedung">Choose File</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-7">
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>
</div>
</div>
</div>
<?= $this->endSection(); ?>