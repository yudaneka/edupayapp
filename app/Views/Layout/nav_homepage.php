<!-- Fixed navbar -->
<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light justify-content-between">
    <a class="navbar-brand" href="#"></a> <img src="../img/Eidupay.png" width="90" height="43">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <!-- <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> -->
            </li>
            <li class="nav-item">
                <!-- <a class="nav-link" href="#">Link</a> -->
            </li>
            <li class="nav-item">
                <!-- <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> -->
            </li>
        </ul>
    </div>
    <div class="container">
        <nav class="nav nav-pills nav-justified">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#infoModal">
                Info</button>
            <div class="modal" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            </div>
                            <div class="d-flex flex-column text-center">
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email1" placeholder="Your email address...">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="password1" placeholder="Your password...">
                                    </div>
                                    <button type="button" class="btn btn-info btn-block btn-round">Login</button>
                                </form>

                                <div class="text-center text-muted delimiter">or use a social network</div>
                                <div class="d-flex justify-content-center social-buttons">
                                    <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Twitter">
                                        <i class="fab fa-twitter"></i>
                                    </button>
                                    <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Facebook">
                                        <i class="fab fa-facebook"></i>
                                    </button>
                                    <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Linkedin">
                                        <i class="fab fa-linkedin"></i>
                                    </button>
                                    </di>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <div class="signup-section">Not a member yet? <a href="#a" class="text-info"> Sign Up</a>.</div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#loginmodal">
        Login
    </button>
    <button class="btn btn-info" data-toggle="modal" data-target="#myModal">
        Register</button>
    <!-- Small modal -->
    <div id="loginmodal" class="modal fade" tabindex="-1" role="dialog" style="display: none;">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Small modal</h4>
                </div>
                <div class="modal-body">...</div>
            </div> <!-- / .modal-content -->
        </div> <!-- / .modal-dialog -->
    </div> <!-- / .modal -->
    <!-- / Small modal -->
    <!-- info modal -->
</nav>
</div>
</nav>