<?= $this->session->flashdata('pesan'); ?>
<div class="container">
    <div class="card mb-3" style="max-width: 700px;">
    <div class="row no-gutters">
        <div class="col-md-6">
        <img src="<?= base_url('assets/img/').$user['image']; ?>"  style="width:300px">
        </div>
        <div class="col-md-6">
        <div class="card-body">
            <h3 class="mt-5 mb-3"><?= $user['name']; ?></h3>
            <p class="card-text"><?= $user['email']; ?></p>
            <p class="card-text"><small class="text-muted">Tanggal bergabung <?= date('d F Y', $user['date_created']); ?></small></p>
        </div>
        </div>
    </div>
    </div>
</div>