
<div class="continer bg-primary" style="height: 100vh;" >
    <div class="row">
        <div class="mx-auto my-5 col-lg-4">
            <div class="card my-5 ">
                <div class="card-body login-card-body">
                <?= $this->session->flashdata('pesan'); ?>
                    <h3 class="login-box-msg text-dark">Login</h3>
                    <form action="<?= base_url('auth'); ?>" method="post">
                        <div class="input-group mb-3">
                            <input type="text" id="email" name="email" value="<?= set_value('email'); ?>" class="form-control" placeholder="Email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <?= form_error('email','<div class="text-small text-danger">' , '</div>'); ?>
                        <div class="input-group mb-3">
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <?= form_error('password','<div class="text-small text-danger">' , '</div>'); ?>
                        <div class="row">
                            <div class="col mb-2">
                                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                            </div>
                        </div>
                    </form>
                <div class="row my-3">
                    <div class="col-10">
                    <a class="mt-3" href="<?= base_url('auth/register'); ?>" class="text-center">Daftar Member disini!</a>
                    </div>
                    <div class="col-2">
                        <a  href="<?= base_url('home'); ?>">Home</a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
</div>

