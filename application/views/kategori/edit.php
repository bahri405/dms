
<div class="container ">
    <form action="" method="post" class="mb-3" >
    <input type="hidden" name="id" value="<?= $kategori['id']; ?>">
        <div class="form-group">
            <label >Nama Kategori</label>
            <input type="text" name="nama" value="<?= $kategori['nama']; ?>" class="form-control">
            <?= form_error('nama','<div class="text-small text-danger">' , '</div>'); ?>
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Save</button>
    </form>
    <a href="<?= base_url('kategori'); ?>" class="btn btn-sm btn-info my-5">Kembali</a>
</div>
