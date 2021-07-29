<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="/css/style.css">

<body>

    <!-- Fixed navbar -->
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light fixed-top bg-white justify-content-between">
            <a class="navbar-brand" href="<?php echo base_url("pembayaran"); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                </svg>
                Data Tagihan
            </a>
            <nav class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    </svg>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo base_url("Pengaturan"); ?>">Akun Saya</a>
                    <a class="dropdown-item" href="#">Riwayat</a>
                    <a class="dropdown-item" href="#">Pengaturan</a>
                    <a class="dropdown-item" href="#">Logout</a>
                    <!--<div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a> -->
                </div>
            </nav>
        </nav>
    </div> <br><br><br><br><br><br>
    <div class="container">
        <table class="table table-bordered">
            <thead class="table-success">
                <tr>
                    <th scope="col">Nomer Layanan</th>
                    <th scope="col">Nama Pengguna</th>
                    <th scope="col">No.Telp</th>
                    <th scope="col">Tgl Tempo</th>
                    <th scope="col">Jumlah Tagihan</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>
                        <div>
                            <input type="checkbox" aria-label="Checkbox for following text input">
                            120213222
                        </div>
                    </th>

                    <th>Dimas Aji Wiratama</td>
                    <th>08778102828</td>
                    <th>25 juli</th>
                    <th>Rp. 500.000</td>
                    <th class="text-success">Sudah Dibayar</th>

                </tr>
                <tr>
                    <th>
                        <div>
                            <input type="checkbox" aria-label="Checkbox for following text input">
                            120213222
                        </div>
                    </th>
                    <th>Dimas Aji Wiratama</th>
                    <th>0877781902828</th>
                    <th>25 juli</th>
                    <th>Rp. 500.000</td>
                    <th class="text-danger">Sudah Dibayar</th>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </tbody>
        </table>
        <div class="buttonbottom" style="justify-content: space-between; display: flex;">
            <div> <button type="button" class="btn btn-primary btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModal">
                    Create Data
                </button></div>
            <div><a class="btn btn-primary btn-lg btn-block" href="<?php echo base_url("Tagihansiswa/editdata"); ?>" type="button">Edit Data</a></div>
            <div><a class="btn btn-primary btn-lg btn-block" href="<?php echo base_url("Tagihansiswa/editdata"); ?>" type="button">Edit Data</a></div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $('#myModal').on('shown.bs.modal', function() {
            $('#myInput').trigger('focus')
        })
    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>