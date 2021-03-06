<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<body>

    <!-- Fixed navbar -->
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light fixed-top bg-white justify-content-between">
            <a class="navbar-brand" href="<?php echo base_url("pembayaran/detail"); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                </svg>
                Tagihan Bulan Juli 2021
            </a>
        </nav>
    </div><br><br><br><br>
    <div class="container">
        <h4>Data Personal</h4>
        <div class="title">Nama</div>
        <h6>Dimas Aji Wiratama </h6>
        <hr>
        <div class="title">Nomor Induk Siswa</div>
        <h6>1202173222</h6>
        <hr>
    </div><br><br>

    <div class="container">
        <div class="title">Tagihan</div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Bulan</th>
                    <th scope="col">Sub Tagihan</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Pembayaran SPP</th>
                    <td>Juli</td>
                    <td>Rp. 100.000</td>
                    <td></td>

                </tr>
                <tr>
                    <th scope="row">Total</th>
                    <td></td>
                    <td>Rp. 100.000</td>
                    <td class="text-success">Berhasil</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>