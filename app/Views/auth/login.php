<?= $this->extend('Home Page\homepage'); ?>
<?= $this->section('content'); ?>
<!-- Fixed navbar -->

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
                <h4><?=lang('Auth.loginTitle')?></h4>
                    <!-- <h4>Login</h4> -->            
                </div>
                <?= view('Myth\Auth\Views\_message_block') ?>  
                
                <div class="d-flex flex-column text-center">
                
                <form role="form" method="post" action="<?php echo site_url('Pembayaran');?>">
						<?= csrf_field() ?>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control <?php if(session
                            ('errors.login')) : ?>is-invalid<?php endif ?>" name="login" 
                            placeholder="<?=lang('Auth.emailOrUsername')?>...">
                            <div class="invalid-feedback">
								<?= session('errors.login') ?>
							</div>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control <?php if(
                                session('errors.password')) : ?>is-invalid<?php endif ?>" name ="password" 
                                placeholder="<?=lang('Auth.password')?>...">
                                <div class="invalid-feedback">
								<?= session('errors.password') ?>
							</div>
                        </div>
                        <button type="submit" class="btn btn-info btn-block btn-round"><?=lang('Auth.loginAction')?></button>
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
                <h4><?=lang('Auth.loginTitle')?></h4>
                    <!-- <h4>Login</h4> -->
                </div>
                <?= view('Myth\Auth\Views\_message_block') ?>  
                <br>
                <div class="d-flex flex-column text-center">
                <form role="form" method="post" action="<?php echo site_url('sekolah');?>">
						<?= csrf_field() ?>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control <?php if(session
                            ('errors.login')) : ?>is-invalid<?php endif ?>" name="login" 
                            placeholder="<?=lang('Auth.emailOrUsername')?>...">
                            <div class="invalid-feedback">
								<?= session('errors.login') ?>
							</div>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control <?php if(
                                session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" 
                                placeholder="<?=lang('Auth.password')?>">
                                <div class="invalid-feedback">
								<?= session('errors.password') ?>
							</div>
                        </div>
                        <button type="submit" class="btn btn-info btn-block btn-round"><?=lang('Auth.loginAction')?></button>
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

<?= $this->endSection(); ?>
