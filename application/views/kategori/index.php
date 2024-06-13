<?= $this->session->flashdata('pesan'); ?>
  
  <div class="container-fluid">
      <a href="<?= base_url('kategori/tambah'); ?>">
      <button class="btn btn-sm btn-info mb-2" >Tambah data</button>
      </a>

                <table class="table table-bordered table-hover" >
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Kategori</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                
                <tbody>
                <?php $no = 1; 
                foreach($kategori as $item ): ?>
                  <tr>
                    <td ><?= $no++; ?></td>
                    <td><?= $item['nama']; ?></td>
                    <td>
                      <a href="<?= base_url('kategori/edit/'); ?><?= $item['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                      <a href="<?= base_url('kategori/hapus/'); ?><?= $item['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('yakin dihapus?');">Delete</a>
                      <a href="<?= base_url('kategori/detail/'); ?><?= $item['id']; ?>" class="btn btn-sm btn-secondary" ">Detail</a>
                    </td>
                  </tr>
                </tbody>
                <?php endforeach ?>
              </table>
  </div>
        

