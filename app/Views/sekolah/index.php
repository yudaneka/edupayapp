<?= $this->extend('layout/templateAdmin'); ?>

<?= $this->section('content'); ?>
<div class="container"><br>
    <div class="row">
        <div class="col">
            <h1 class="mt-2"> Daftar Sekolah</h1>
            <a href="/sekolah/create" class="btn btn-primary mb-3">Tambah Data Sekolah</a>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?> </div>
            <?php endif; ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Gedung</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($sekolah as $k) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="/img/<?= $k['gedung']; ?>" alt="" class="gedung"></td>
                            <td><?= $k['name']; ?></td>
                            <td>
                                <a href="/sekolah/<?= $k['slug']; ?>" class="btn btn-primary">Detail</a>
                                <form action="/sekolah/<?= $k['id_school']; ?>" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?');">Delete</button>
                                </form>
                                <!-- <a href="" class="btn btn-danger">Hapus</a> -->
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $pager->links() ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>