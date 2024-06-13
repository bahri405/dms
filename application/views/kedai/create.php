
<div class="container">
    <?= form_open_multipart(''); ?>
    
        <div class="form-group">
            <label >Kategori</label>
            <select name="kategori_id" class="form-control" id="">
                <option value="">--Pilih--</option>
                <?php foreach ($kategori as $item): ?>
                <option value="<?= $item['id']; ?>"><?= $item['nama']; ?></option>
                <?php endforeach ?>
            </select>
            <?= form_error('nama','<div class="text-small text-danger">' , '</div>'); ?>
        </div>
        <div class="form-group">
            <label >Nama Kedai</label>
            <input type="text" name="nama" class="form-control">
            <?= form_error('nama','<div class="text-small text-danger">' , '</div>'); ?>
        </div>
        <div class="form-group">
            <label >Alamat</label>
            <textarea name="alamat" class="form-control" id=""></textarea>
            <?= form_error('alamat','<div class="text-small text-danger">' , '</div>'); ?>
        </div>
        <div class="form-group">
            <label >Desc</label>
            <textarea name="bio" class="form-control" id=""></textarea>
            <?= form_error('bio','<div class="text-small text-danger">' , '</div>'); ?>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-4">
                    <label >Poster1</label>
                    <input type="file" name="poster" class="form-control">
                    <?= form_error('poster','<div class="text-small text-danger">' , '</div>'); ?>
                </div>
                <div class="col-4">
                    <label >Poster2</label>
                    <input type="file" name="poster2" class="form-control">
                    <?= form_error('poster2','<div class="text-small text-danger">' , '</div>'); ?>
                </div>
                <div class="col-4">
                    <label >Poster3</label>
                    <input type="file" name="poster3" class="form-control">
                    <?= form_error('poster3','<div class="text-small text-danger">' , '</div>'); ?>
                </div>
            </div>
        </div>
        
        <button type="submit" class="btn btn-primary btn-sm">Save</button>
        <button type="reset" class="btn btn-secondary btn-sm">Reset</button>
    
    <?= form_close(); ?>
    <a href="<?= base_url('kategori'); ?>" class="btn btn-sm btn-info my-5">Kembali</a>
</div>
