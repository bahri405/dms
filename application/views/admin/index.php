<div class="container">
    <div class="row">
        <div class="col-lg-3 col-6">

            <div class="small-box bg-info">
            <div class="inner">
<h3><?= $kedai_count ?></h3>
<p>Jumlah kedai</p>
</div>
<div class="icon">
<i class="ion ion-bag"></i>
</div>
<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-success">
<div class="inner">
<h3><?= $kategori_count ?></h3>
<p>Jumlah Kategori</p>
</div>
<div class="icon">
<i class="ion ion-stats-bars"></i>
</div>
<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-warning">
<div class="inner">
<h3><?= $user_count ?></h3>
<p>Jumlah User</p>
</div>
<div class="icon">
<i class="ion ion-person-add"></i>
</div>
<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-danger">
<div class="inner">
<h3><?= $review_count ?></h3>
<p>Jumlah Review</p>
</div>
<div class="icon">
<i class="ion ion-pie-graph"></i>
</div>
<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

</div>
</div>


<div class="container">
<div class="card-body table-responsive p-0">
    <table class="table table-striped table-valign-middle">
        <thead>
            <tr>
                <th>Kedai</th>
                <th>Alamat</th>
                <th>Kategori</th>
                <th>More</th>
            </tr>
        </thead>
        <tbody>
        </td>
        <?php if (!empty($kedai)): ?>
        <?php foreach ($kedai as $data): ?>
            <tr>
                <td>
                    <img src="<?= base_url('assets/img/').$data['poster']; ?>" style="height: 50px; width: 50px;" alt="Product 1" class="img-circle img-size-32 mr-2">
                    <?= $data['nama'] ?>
                </td>
                <td><?= $data['alamat'] ?></td>
                <td><?= $data['kategori_nama'] ?></td>
                <td>
                    <a href="<?= base_url('kedai'); ?>" class="text-muted">
                    <i class="fas fa-search"></i>
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3">No data available</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
</div>




