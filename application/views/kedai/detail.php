<div class="container mb-5">
    <img src="<?= base_url('assets/img/aestetik1.jpg'); ?>" class="img-fluid rounded mx-auto d-block" style="height: 330px; width:auto">
    <div class="card-body">
        <p><?= $kedai['nama']; ?></p>
        <p>Desc : <?= $kedai['bio']; ?></p>
        <p >Alamat : <?= $kedai['alamat']; ?></p>
        <span class="badge badge-info">Kategori  : <?= $kedai['kategori_nama']; ?></span>
    </div>
    <form action="<?= base_url('review/add_reviews'); ?>" method="post">
        <div class="form-group">
            <label >Berikan Review</label>
            <textarea name="content" class="form-control" placeholder="Tulis komentar ..."></textarea>
            <?= form_error('content','<div class="text-small text-danger">' , '</div>'); ?>
        </div>
        <div class="form-group">
            <label >Berikan Point</label>
            <input type="number" name="point" placeholder=" 0/10" class="form-control">
            <?= form_error('point','<div class="text-small text-danger">' , '</div>'); ?>
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Kirim</button>
    </form>
    <h4 class="form-control bg-info my-3">List Review</h4>
    <div class="media">
        <img src="<?= base_url('assets/img/aestetik1.jpg'); ?>" class="align-self-start mr-3" style="border-radius: 50%; height:100px; width:100px;">
        <div class="media-body">
        <h5 class="mt-0">Top-aligned media</h5>
        <p>I’m gon’ put her in a coma. You give a hundred reasons why, and you say you're really gonna try. So I sat quietly, agreed politely. Suiting up for my crowning battle. And on my 18th Birthday we got matching tattoos. So très chic, yeah, she's a classic. I am ready for the road less traveled.</p>
        <p>Point :</p>
    </div>
</div>
</div>