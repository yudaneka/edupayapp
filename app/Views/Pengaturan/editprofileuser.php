<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<body>

    <!-- Fixed navbar -->
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light fixed-top bg-white justify-content-between">
            <a class="navbar-brand" href="<?php echo base_url("pembayaran"); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                </svg>
                Edit Profile
            </a>
        </nav>
    </div> <br><br><br><br>
    <div class="container">
        <img src="../img/default-user-image.png" alt="" style="width: 90px; height: 90px;" class="rounded-circle">
        <br><br>
        <form>
            <div class="form-group">
                <label for="exampleInputPassword1">Nomer Induk Siswa</label>
                <input type="nomerinduksiswa" class="form-control" id="nomerinduk" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Nama Siswa</label>
                <input type="namasiswa" class="form-control" id="namalengkapsiswa" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Nomer Telfon</label>
                <input type="nomersiswa" class="form-control" id="nomertelfonsiswa" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <!-- Button trigger modal -->
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                Launch static backdrop modal
            </button>
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Understood</button>
                        </div>
                    </div>
                </div>
            </div>