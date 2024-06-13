
<div class="container ">
    <?= form_open_multipart(''); ?>
    <input type="hidden" name="id" value="<?= $kedai['id']; ?>">
    
        <div class="form-group">
            <label >Kategori</label>
            <select name="kategori_id" class="form-control" id="">
                <?php foreach ($kategori as $item): ?>
                <option value="<?= $item['id']; ?>"><?= $item['nama']; ?></option>
                <?php endforeach ?>
            </select>
            <?= form_error('nama','<div class="text-small text-danger">' , '</div>'); ?>
        </div>
        <div class="form-group">
            <label >Nama Kedai</label>
            <input type="text" name="nama" value="<?= $kedai['nama']; ?>" class="form-control">
            <?= form_error('nama','<div class="text-small text-danger">' , '</div>'); ?>
        </div>
        <div class="form-group">
            <label >Alamat</label>
            <textarea name="alamat"  class="form-control" ><?= $kedai['alamat']; ?></textarea>
            <?= form_error('alamat','<div class="text-small text-danger">' , '</div>'); ?>
        </div>
        <div class="form-group">
            <label >Desc</label>
            <textarea name="bio"  class="form-control" ><?= $kedai['bio']; ?></textarea>
            <?= form_error('bio','<div class="text-small text-danger">' , '</div>'); ?>
        </div>
        <div class="form-group">
            <div class="row">
                    <div class="col-4">
                        <label >Poster1</label>
                        <input type="file" name="poster" class="form-control" required>
                        <div class="col-sm-3">
                            <img src="<?= base_url('assets/img/') . $kedai['poster']; ?>" style="width: auto; height:200px;" >
                        </div>
                        <?= form_error('poster','<div class="text-small text-danger">' , '</div>'); ?>
                    </div>
                    
                    <div class="col-4">
                        <label >Poster2</label>
                        <input type="file" name="poster2" class="form-control" required>
                        <div class="col-sm-3">
                            <img src="<?= base_url('assets/img/') . $kedai['poster2']; ?>" style="width: auto; height:200px;" >
                        </div>
                        <?= form_error('poster2','<div class="text-small text-danger">' , '</div>'); ?>
                    </div>
                    
                    <div class="col-4">
                        <label >Poster3</label>
                        <input type="file" name="poster3" class="form-control" required>
                        <div class="col-sm-3">
                            <img src="<?= base_url('assets/img/') . $kedai['poster3']; ?>" style="width: auto; height:200px;" >
                        </div>
                        <?= form_error('poster','<div class="text-small text-danger">' , '</div>'); ?>
                    </div>
                    
            </div>
        </div>
        
        <button type="submit" class="btn btn-primary btn-sm">Edit</button>
        <button type="reset" class="btn btn-secondary btn-sm">Reset</button>
    
    <?= form_close(); ?>
    <a href="<?= base_url('kedai'); ?>" class="btn btn-sm btn-info my-5">Kembali</a>
</div>
