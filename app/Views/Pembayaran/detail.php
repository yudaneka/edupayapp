<?= $this->extend('Layout/template_detailtagihan'); ?>
<?= $this->section('content'); ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<body>

    <!-- Fixed navbar -->
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light fixed-top bg-white justify-content-between">
            <a class="navbar-brand" href="<?php echo base_url("pembayaran/tagihan"); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                </svg>
                Tagihan
            </a>

            <!-- <a class="navbar-brand" href="<?php echo base_url("home"); ?>"><img src="../img/Eidupay.png" width="110" height="63"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
        </div>
        <nav class="nav nav-pills nav-justified justify-content-between">
            <div class="collapse navbar-collapse" id="navbarNav">
                <a class="btn btn-primary" href="https://www.eidupay.com/" role="button">Info</a>
                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">Login</button> -->
            <!--<li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url("pembayaran/tagihan"); ?>">ConfirmPayment <span class="sr-only">(curr
                            ent)</span></a>
            </li> -->
            <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    </svg>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Akun Saya</a>
                    <a class="dropdown-item" href="#">Riwayat</a>
                    <a class="dropdown-item" href="#">Pengaturan</a>
                    <a class="dropdown-item" href="#">Logout</a>
                    <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>-->

        </nav>
    </div><br><br><br><br>

    <div class="container">
        <div class="title">Nomor Induk Siswa</div>
        <div class="d-flex justify-content-between">
            <h6>1202153377</h6>
            <img width="25" height="25" src="https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png" class="rounded float-right" alt="...">
        </div>
        <hr>
    </div><br><br>

    <div class="container">
        <div class="title">Riwayat Tagihan</div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Total</th>
                    <th scope="col">Status</th>
                    <th scope="col">Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
<<<<<<< HEAD
                    <th scope="row">Juli, 2021</th>
                    <td>Rp. 500.000</td>
=======
                    <th scope="row">1 Juli 2021</th>
                    <td>Rp. 100.000</td>
>>>>>>> 2bad2b2a5b1d74d119ed986645797b9e808d5f0f
                    <td class="text-danger">Belum Dibayar</td>
                    <td></td>
                </tr>
                <tr>
<<<<<<< HEAD
                    <th scope="row">Juli, 2021</th>
                    <td>Rp. 500.000</td>
=======
                    <th scope="row">2 Juli 2021</th>
                    <td>Rp. 100.000</td>
>>>>>>> 2bad2b2a5b1d74d119ed986645797b9e808d5f0f
                    <td class="text-success">Sudah Dibayar</td>
                    <td><a class="btn btn-primary btn-lg text-center" href="<?php echo base_url("pembayaran/detailbulan"); ?>" role="button">Lihat Detail</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>