
<div class="card-body table-responsive p-0">
    <table class="table table-striped table-valign-middle">
        <thead>
            <tr>
                <th>Kedai</th>
                <th>Kategori</th>
                <th>Point</th>
                <th>More</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($kedai as $item) : ?>
            <tr>
                <td>
                    <img src="<?= base_url(). '/assets/img/'. $item['poster']; ?>" style="height: 50px; width: 50px;" alt="Product 1" class="img-circle img-size-32 mr-2">
                    <?= $item['nama']; ?>
                </td>
                <td><?= $item['kategori_nama']; ?></td>
                <td>
                    <small class="text-success mr-1">
                    <i class="fas fa-arrow-up"></i>
                    12%
                    </small>
                    12,000 Sold
                </td>
                <td>
                    <a href="<?= base_url('kedai/detail/'); ?><?= $item['id']; ?>" class="text-muted">
                    <i class="fas fa-search"></i>
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>