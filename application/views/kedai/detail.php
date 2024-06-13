
<div class="container mb-5">
    <!-- caraousel -->
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="<?= base_url('assets/img/').$kedai['poster']; ?>" class="d-block w-100" style="height: 500px;" >
                </div>
                <div class="carousel-item">
                <img src="<?= base_url('assets/img/').$kedai['poster2']; ?>" class="d-block w-100" style="height: 500px;" >
                </div>
                <div class="carousel-item">
                <img src="<?= base_url('assets/img/').$kedai['poster3']; ?>" class="d-block w-100" style="height: 500px;" >
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
<!-- caraousel end -->

    <div class="row my-3">
        <div class="col">
            <h2><?= $kedai['nama']; ?></h2>
            <p>Alamat : <?= $kedai['alamat']; ?></p>
            <p>Tentang kedai : <?= $kedai['bio']; ?></p>
        </div>
    </div>
    
    <?= form_open('kedai/add_review'); ?>
    <input type="hidden" name="kedai_id" value="<?= $kedai['id']; ?>">
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
    <?= form_close(); ?>

    <div class="row my-2">
        <div class="col-4">
            <?= $this->session->flashdata('pesan'); ?>
        </div>
    </div>
    
    <h3 class="mt-3">List Reviews</h3>
        <?php if (!empty($review)): ?>
            <div class="row" >
            <?php foreach ($review as $r): ?>
                <div class="col-12 my-2" style="border:1px solid black;">
                    <div class="media mt-1">
                        <img src="<?= base_url('assets/img/').$r['user_image']; ?>" class="align-self-start mr-3" style="border-radius: 50%; height:100px; width:100px;">
                        <div class="media-body ">
                        <h3 class="mt-0"><?= $r['name']; ?></h3>
                        <hr>
                        <p class="m-3"><?= $r['content']; ?></p>
                        <p class="m-3 badge badge-success"><?= $r['point']; ?> / 10</p>
                        <div class="row d-flex justify-content-end m-1">
                        <a class="badge badge-danger " href="<?= base_url('kedai/hapus_review/'. $r['id'] . '/'. $kedai['id']); ?>">
                            delete
                        </a>
                        </div>
                        
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p>tidak ada reviews</p>
        <?php endif; ?>
    </div>
</div>