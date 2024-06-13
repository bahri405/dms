<?= $this->session->flashdata('pesan'); ?>
  
  <div class="container-fluid">
      <a href="<?= base_url('kedai/proses_tambah_data'); ?>">
      <button class="btn btn-sm btn-info mb-2" >Tambah kedai kopi</button>
      </a>
      <div class="row mt-3">
      <?php foreach ($kedai as $item ) : ?>
        <div class="col-4">
          <div class="card">
            <img  src="<?= base_url(). '/assets/img/'. $item['poster']; ?>" class="card-img-top img-fluid" style="height: 270px; object-fit:center;">
            <div class="card-body">
              <h3 class="" ><?= $item['nama']; ?></h3>
              <span class="badge badge-info"><?= $item['kategori_nama']; ?></span>
                  <p class="card-text">Alamat <?= $item['alamat']; ?></p>
                  <a href="<?= base_url('kedai/detail/'); ?><?= $item['id']; ?>" class="text-dark btn btn-outline-secondary btn-block btn-sm">Details</a>
                      <div class="my-2 row">
                          <div class="col">
                              <a href="<?= base_url('kedai/proses_edit_data/'); ?><?= $item['id']; ?>" class="text-dark btn btn-block btn-sm btn-outline-warning">Edit</a>
                          </div>
                          <div class="col">
                              <a href="<?= base_url('kedai/hapus/').$item['id']; ?>" class="text-dark btn btn-block btn-sm btn-outline-danger" >Delete</a>
                          </div>
                      </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        </div>
  </div>
        

