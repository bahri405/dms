<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"  >
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6" >
            <h1>Company files</h1>
          </div>
          <div class="col-sm-6 ">
            <button type="button" class="btn btn-outline-primary btn-sm float-sm-right m-1" data-toggle="modal" data-target="#exampleModal">
              Tambah folder
            </button>
            <button type="button" class="btn btn-outline-success btn-sm float-sm-right m-1" data-toggle="modal" data-target="#exampleModal">
              Upload file
            </button>
            <button type="button" class="btn btn-outline-warning btn-sm float-sm-right m-1" data-toggle="modal" data-target="#exampleModal">
              Upload folder
            </button>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<!-- Modal tambah folder-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Folder</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama folder</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Deskripsi</label>
                  <textarea name="deskripsi" class="form-control" cols="10" rows="5" id=""></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
      </div>
    </div>

    <!-- Main content -->
    <section class="content">
    
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
            <table class="table ">
              <thead class="thead-dark">
                  <tr>
                    <th style="width: 120px;" scope="col">Nama</th>
                    <th scope="col" style="width: 120px;">Deskripsi</th>
                    <th scope="col" style="width: 120px;">Type</th>
                    <th scope="col" style="width: 120px;">Waktu Retensi</th>
                    <th scope="col" style="width: 120px;">Path</th>
                    <th scope="col" style="width: 120px;">Dibuat</th>
                    <th scope="col" style="width: 10px;">Aksi</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                  <td><i class="fa fa-folder-open" aria-hidden="true"> </i> pathapapasp</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>asdasdasdasd</td>
                  <td>dasdas</td>
                  <td>12/213/321</td>
                  <td >
                    <a href="" style="display:block; color:red;"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    <a href="" ><i class="fa fa-wrench" aria-hidden="true"></i></a>
                    
                  </td>
                  </tr>
                  <tr>
                  <td ><i class="fa fa-folder-open" aria-hidden="true"> </i> 4</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                  <td></td>
                  <td>12/213/321</td>
                  <td>
                      <a href="" style="display:block; color:red;"><i class="fa fa-trash" aria-hidden="true"></i></a>
                      <a href="" ><i class="fa fa-wrench" aria-hidden="true"></i></a>
                  </td>
                  </tr>
                  <tr>
                  <td><i class="fa fa-folder-open" aria-hidden="true"> </i> 3</td>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                  <td></td>
                  <td>12/213/321</td>
                  <td>
                      <a href="" style="display:block; color:red;"><i class="fa fa-trash" aria-hidden="true"></i></a>
                      <a href="" ><i class="fa fa-wrench" aria-hidden="true"></i></a>
                  </td>
                  </tr>
              </tbody>
            </table>
        </div>
        

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

