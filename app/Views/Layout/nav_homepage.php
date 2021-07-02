<!-- Fixed navbar -->
<div class="container">
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-white justify-content-between">
        <a class="navbar-brand" href="<?php echo base_url("pembayaran/tagihan"); ?>"></a> <img src="../img/Eidupay.png" width="110" height="63">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
        </div>
        <nav class="nav nav-pills nav-justified justify-content-between">
            <div class="collapse navbar-collapse" id="navbarNav">
                <!--<a class="btn btn-primary" href="https://www.eidupay.com/" role="button">Info</a>
                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">Login</button> -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Login
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal1">Orang Tua Siswa</a>
                        <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal2">Admin</a>
                        <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal3">Sekolah</a>
                        <!--<div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a> -->
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="https://www.eidupay.com/ ">info <span class="sr-only">(current)</span></a>
                </li>
            </div>
        </nav>
    </nav>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-title text-center">
                    <h4>Login</h4>
                </div><br>
                <div class="d-flex flex-column text-center">
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email1" placeholder="Username / NISN ...">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password1" placeholder="Password...">
                        </div>
                        <button type="button" class="btn btn-info btn-block btn-round">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-title text-center">
                    <h4>Login</h4>
                </div><br>
                <div class="d-flex flex-column text-center">
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email1" placeholder="Username / NISN ...">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password1" placeholder="Password...">
                        </div>
                        <button type="button" class="btn btn-info btn-block btn-round">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-title text-center">
                    <h4>Login</h4>
                </div><br>
                <div class="d-flex flex-column text-center">
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email1" placeholder="Username / NISN ...">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password1" placeholder="Password...">
                        </div>
                        <button type="button" class="btn btn-info btn-block btn-round">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Enable tooltips
    var tooltipTriggerList = [].slice.call(
        document.querySelectorAll('[data-toggle="tooltip"]'));
    var tooltipList =
        tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>