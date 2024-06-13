<div class="container">
    <div class="row">
        <div class="col-lg-8">
        <?= form_open_multipart('user/edit'); ?>
            <div class="form-group">
                <label >Email</label>
                <input type="text" name="email" value="<?= $user['email']; ?>" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label >Full Name</label>
                <input type="text" name="name" value="<?= $user['name']; ?>" class="form-control">
                <?= form_error('name','<div class="text-small text-danger">' , '</div>'); ?>
            </div>

            <div class="form-group">
                <label >Picture</label>
                <div class="col-sm 10">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?= base_url('assets/img/') . $user['image']; ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-9">
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="image" aria-describedby="inputGroupFileAddon02">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row ">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary btn-sm">Edit</button>
                </div>
            </div>

        <?= form_close(); ?>
        </div>
    </div>
</div>