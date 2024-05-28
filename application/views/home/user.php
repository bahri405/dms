  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6" >
            <h1>User</h1>
          </div>
          <div class="col-sm-6">
            <a href="" class="breadcrumb float-sm-right">
            <button class="btn btn-sm btn-info">kembali</button>
            </a>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

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
                <form>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                        <input type="text"  class="form-control" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama user</label>
                        <div class="col-sm-10">
                        <input type="text"  class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                        <input type="text"  class="form-control" id="staticEmail" value="email@example.com">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Group user</label>
                        <div class="col-sm-10">
                        <select class="form-control" >
                            <option>--pilih--</option>
                            <option>1</option>
                            <option>2</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label  class="col-sm-2 col-form-label">Status user</label>
                        <div class="col-sm-10 form-check">
                        <input class="form-check-input " type="checkbox" value="" id="defaultCheck1">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="submit" value="reset" class="btn btn-warning">Reset</button>
                </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
