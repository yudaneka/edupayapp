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
        <nav class="nav nav-pills nav-justified">
            <button type="button" class="btn btn-primary">Info</button>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                Login
            </button>
            <button class="btn btn-info" data-toggle="modal" data-target="#myModal">
                Register</button>
            <!-- Small modal -->
            <div id="modal-sizes-1" class="modal fade" tabindex="-1" role="dialog" style="display: none;">
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
        </nav>
    </div>
</nav>